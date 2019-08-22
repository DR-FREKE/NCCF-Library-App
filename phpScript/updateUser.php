<?php 
include "lumacon.php";
include "main.php";
// include "bookList.php";

if(isset($_POST['userId']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['phone'])){
    
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];

    $sql_update = "UPDATE luma_users SET name='".$username."', contact='".$phone."', email='".$email."' WHERE reg_code='".$userId."' ";
    if($update_result = $conn->query($sql_update)){
        echo "Updated";
    }else{
        echo "an error occured";
    }
}
?>