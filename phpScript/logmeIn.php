<?php 
include "lumacon.php";
include 'main.php';
class userLogin{

    public function startup(){
        if(isset($_GET['name']) && isset($_GET['password'])){
            $username = $_GET["name"];
            $password = $_GET["password"];

            $this->login($username, $password);
        }
    }
    
    public function login($mUsername, $mPassword){
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
            header('Location: home.php');
        }else{
            echo "wrong";
        }  
    }
    public function welcome(){
        echo "welcome user";
    }
}
?>