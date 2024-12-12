<?php 


function loadFooter() {
    $folder = '';
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    if (stristr($page, 'admin-') !== false) {
        $folder = "admin/";
    }

    if ($folder != "admin/") {
        return require_once '../resources/views/components/footer.view.php';
    }
}