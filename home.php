<?php

require_once('./phpScript/lumacon.php');
require_once('./phpScript/main.php');

class home{
    public function __construct()
    {
        $main = new main();
        $redirect = $main->isLoggedIn();
        switch ($redirect) {
            case 'normal_user':
                # code...
                include('books.php');
                break;
            case 'admin_user':
                include('admin_home.php');
                break;
            default:
                # code...
                header('Location: login.php');
                break;
        }
    }
}
$mHome = new home();
?>