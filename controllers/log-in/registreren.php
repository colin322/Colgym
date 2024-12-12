<?php


function register()
{
    $pdo = dbConnect();
    if (isset($_POST['registreren'])) {
    
        if (!empty($_POST['registerwachtwoord']) && !empty($_POST['registeremail']) && !empty($_POST['registerusername']) && !empty($_POST['registerabonnement'])) {
            $email = $_POST['registeremail'];
            $password = $_POST['registerwachtwoord'];
            $username = $_POST['registerusername'];
            $abonnement = $_POST['registerabonnement'];
            
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (email, wachtwoord, username, abonnement_soort) VALUES (:email, :password, :username, :abonnement)";
            $stmt = $pdo->prepare($sql);



            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedpassword);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':abonnement', $abonnement);

            try {
                $stmt->execute();
                header("Location: ?page=succes-register");
                exit();
            } catch (PDOException $e) {
                if ($e->errorInfo[1] == 1062) {
                    return "Dit e-mailadres is al in gebruik.";
                } 
            }
        }
    }
}
