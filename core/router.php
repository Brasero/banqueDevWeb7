<?php
if(isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'addClient':
            require '../view/addClient.php';
            break;
        case 'listClient':
            require '../controller/listClient.php';
            break;
        case 'submitClient':
            require '../controller/addClient.php';
            break;
        case 'purge':
            require '../controller/purge.php';
            break;
    }

} else {
    require '../view/home.php';
}
?>