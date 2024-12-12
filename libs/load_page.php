<?php


function loadPage()
{
    $folder = '';

    $page = isset($_GET['page']) ? $_GET['page'] : 'index';

    if (stristr($page, 'admin-') !== false) {
        $folder = "admin/";
    }
    if (stristr($page, 'succes-') !== false) {
        $folder = "succes/";
    }

    if (!isLoggedIn()) {
        if ($folder == 'admin/') {
            return '../resources/views/log-in.view.php';
        }
    } else {
        if (!$_SESSION['login']['is_admin'] && $folder == 'admin/') {
            if ($page != 'admin-profiel' && $page != 'admin-wijzigpagina' && $page != 'admin-eventform' && $page != 'admin-newpassword') {
                return '../resources/views/log-in.view.php';
            }
        }
    }

    if (isset($_SESSION['login']) && $page == 'log-in' || isset($_SESSION['login']) && $page == 'registreren') {
        return '../resources/views/admin/admin-profiel.view.php';
    }

    if (file_exists("../resources/views/$folder$page.view.php")) {
        return "../resources/views/$folder$page.view.php";
    } else {
        return "../resources/views/errors/404.view.php";
    }
}
