<?php 
include "lumacon.php";

if (isset($_GET['reg_code']) && isset($_GET['pin_info'])) {

    $reg_code = $conn->real_escape_string($_GET['reg_code']);
    $pin_info = $conn->real_escape_string($_GET['pin_info']);
    $query = "SELECT * FROM luma_codes WHERE reg_code ='".$reg_code."'";
    $query_run = $conn->query($query);
    $result = $query_run->fetch_assoc();
        $User = $result["reg_code"];
        if($User == $reg_code){
            echo "sorry";
        }else{
            if ($conn->query("INSERT INTO luma_codes (reg_code,pin_info) VALUES ('".$reg_code."','".$pin_info."')")) {
                echo "created";
            }
        }
}
?>
