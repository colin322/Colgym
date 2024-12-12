<?php

function wijzig()
{
    $pdo = dbConnect();
    if (isset($_POST['wijzig'])) {


        $email = $_POST['wijzig_email'];
        $username = $_POST['wijzig_username'];
        $abonnement = $_POST['wijzig_abonnement'];
        $id = $_GET['id'] ?? null;
        $sql = "UPDATE users SET email = :email, abonnement_soort = :abonnement, username = :username WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':abonnement', $abonnement);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':id', $id);

        try {
            $stmt->execute();
            $_SESSION['login']['email'] = $email;
            $_SESSION['login']['abonnement_soort'] = $abonnement;
            $_SESSION['login']['username'] = $username;
            header("Location: ?page=succes-gewijzigd");
            exit();
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                return "Dit e-mailadres is al in gebruik.";
            }
        }
    }
}
