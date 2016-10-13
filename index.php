<?php
include('baseCore/system/bootstrap.php');

// Check if controller is empty
if (empty($_GET['controller']))  {
    header("Content-type:text/html; charset=utf-8");

    // Reset loaded libraries
    unset($_SESSION['baseCore']->libraries);
    $_SESSION['baseCore']->libraries = new stdClass();
    \baseCore\system\handlers\LoaderHandler::loadProject();
} else {
    if (ZIP_HTML) {
        header("Content-type:text/html; charset=utf-8");
    } else {
        header('Content-Type: application/json');
    }
    \baseCore\system\handlers\LoaderHandler::loadController();
}