<?php 
include "lumacon.php";
include "main.php";
// include "bookList.php";

if(isset($_POST['userId']) && isset($_POST['new_password']) && isset($_POST['current_password'])){
    
    $main = new main();
    $userId = $conn->real_escape_string($_POST['userId']);
    $new_password = $conn->real_escape_string(md5($_POST['new_password']));
    $current_password = $conn->real_escape_string(md5($_POST['current_password']));
    $current_password2 = $main->fetchData('password');


    if($current_password == $current_password2){
        $sql_update = "UPDATE luma_users SET password='".$new_password."' WHERE reg_code='".$userId."' && password='".$current_password."' ";
        if($update_result = $conn->query($sql_update)){
            echo "Updated";
        }else{
            echo "an error occured";
        }
    }else{
        echo "we couldn't find user";
    }
}
?>