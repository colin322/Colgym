<?php

session_start();

require_once '../config.php';
require_once '../controllers/dbconnect.php';
require_once '../libs/helper.php';
require_once '../libs/load_page.php';
require_once '../libs/var_dump.php';
require_once '../libs/loadFooter.php';


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <?php require_once '../resources/views/components/navbar.view.php'?>
    <?php require_once loadPage(); ?> 
    <?php loadFooter(); ?>
    
</body>
</html>