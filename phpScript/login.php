<?php 
include "lumacon.php";
include 'main.php';

if(isset($_GET['name']) && isset($_GET['password'])){
    $username = $_GET["name"];
    $password = $_GET["password"];
    $pass = md5($password);

    login($username, $pass);
}   
    
function login($mUsername, $mPassword){
    global $conn;
    
    $sql="SELECT * FROM luma_users WHERE name ='$mUsername' AND password ='$mPassword'";
    $result=$conn->query($sql) or die($conn->connect_error);
    $rws=  $result->fetch_assoc();
    
    $User=$rws["name"];
    $Pwd=$rws["password"]; 
    $user_id = $rws['id'];
    $userLevel = $rws['userLevel'];
    
    if($User==$mUsername && $Pwd==$mPassword){
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_Level'] = $userLevel;
        echo "login";
    }else{
        echo "wrong";
    }  
}
   

?>
