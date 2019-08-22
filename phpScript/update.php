<?php
include("lumacon.php");
include("main.php");

$main = new main();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
    $update_name = $_POST['name'];
    $update_email = $_POST['email'];
    $update_phone = $_POST['phone'];

    $query = "UPDATE luma_users SET name= '".$update_name."', email= '".$update_email."',
     contact='".$update_phone."' WHERE name='".$main->fetchData('name')."'";

    if($update_result = $conn->query($query)){
        echo "Updated";
    }else{
        echo "not uploaded";
    }

}
?>