<?php

function login()
{
    $email = $_POST['emailLogin'];
    $password = $_POST['password'];

    $pdo = dbConnect();
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $user['wachtwoord'])) {
        $_SESSION['login'] = $user;
        if ($user['is_admin'] == 1) {
            header("Location: ?page=admin-pagina");
        } else {
            header("Location: ?page=admin-profiel");
        }
        exit();
    } else {
        return 'Onjuiste wachtwoord/email';
    }
}
