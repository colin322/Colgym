<?php

function wijzigPassword()
{
    if (isset($_POST['wijzig_password3'])) {

        if (!empty($_POST['wijzig_password1']) && !empty($_POST['wijzig_password2'])) {
            $huidigWachtwoord = $_POST['wijzig_password1'];
            $nieuwWachtwoord = $_POST['wijzig_password2'];

            $user = $_SESSION['login'];

            if (password_verify($huidigWachtwoord, $user['wachtwoord'])) {
                $hashedNieuwWachtwoord = password_hash($nieuwWachtwoord, PASSWORD_DEFAULT);

                $pdo = dbConnect();
                $sql = "UPDATE users SET wachtwoord = :wachtwoord WHERE id = :id";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':wachtwoord', $hashedNieuwWachtwoord);
                $stmt->bindParam(':id', $user['id']);
                $stmt->execute();

                $_SESSION['login']['wachtwoord'] = $hashedNieuwWachtwoord;

                header("Location: ?page=succes-gewijzigd");
                exit();
            } else {
                return 'Huidig wachtwoord is onjuist.';
            }
        } else {
            return 'Voer alle velden in.';
        }
    }
    return '';
}
?>
