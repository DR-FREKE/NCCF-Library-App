<?php 
include "lumacon.php";
include 'main.php';


if (isset($_GET['name']) && isset($_GET['contact']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['reg_code'])) {

    $name = $conn->real_escape_string($_GET['name']);
    $contact = $conn->real_escape_string($_GET['contact']);
    $email = $conn->real_escape_string($_GET['email']);
    $password = $conn->real_escape_string(md5($_GET['password']));
    $reg_code = $conn->real_escape_string($_GET['reg_code']);
    //$Username = $_REQUEST["reg_code"];

    $sql = "SELECT * FROM luma_codes WHERE reg_code ='".$reg_code."' AND pin_info = 'Free'";
    $result = $conn->query($sql) or die($conn->connect_error);
    $rws = $result->fetch_assoc();

    $User_code = $rws["reg_code"];
    $code_status = $rws['pin_info'];
    if ($User_code != $reg_code && $code_status != 'Free') {
        echo "bad";
    }else {
        if ($conn->query("INSERT INTO luma_users(name, contact, email, password, userLevel, reg_code) 
        VALUES('".$name."','".$contact."','".$email."','".$password."', 0, '".$reg_code."')")) {
            $sql_update = "UPDATE luma_codes SET pin_info='Used' WHERE reg_code = '".$reg_code."' ";
            if ($update_result = $conn->query($sql_update)) {
               echo "registered";
            }else{
                echo "error";
            }
        }
    }
}
// $mquery = "SELECT name, contact, password, userLevel, reg_code FROM temporary_users WHERE code_state = true";
// if($result = $conn->query($mquery)){
//     while ($assoc = $result->fetch_assoc()) {
//         # code...
//         echo $assoc['name'].'<br />';
//     }
// }
?>
