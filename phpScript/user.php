<?php 

include "lumacon.php";
include "main.php";

$main = new main();

if($main->isLoggedIn()){
    echo $main->fetchData('name');
}
?>