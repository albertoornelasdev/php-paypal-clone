<?php
$controller = "pages";
$action = "home";

if (isset($_GET['controller']) && isset($_GET['action'])) {
    // urls

    if ( ($_GET['controller'] != "") && ($_GET['action'] != "")) {
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }   
}

require_once('views/template.php');
?>