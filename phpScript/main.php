<?php
ob_start();
session_start();
class main{
    private $loggedIn=null;

    public function isLoggedIn(){
        if(isset($_SESSION['user_id']) && isset($_SESSION['user_Level'])){
            $user_sessionID = $_SESSION['user_id'];
            $user_Level = $_SESSION['user_Level'];

            if(!empty($user_sessionID) || !empty($user_Level)){
                // $result = ($user_Level == 1)?$this->loggedIn = true:$this->loggedIn = false;
                // return $result;
                if($user_Level == '0'){
                    $this->loggedIn = 'normal_user';
                }elseif($user_Level == '1'){
                    $this->loggedIn = 'admin_user';
                }
                return $this->loggedIn;
            }
        }   
    }
    public function fetchData($data){
        global $conn;

        if(!empty($_SESSION['user_id'])){
            $query = "SELECT ".$data." FROM luma_users WHERE id = '".$_SESSION['user_id']."'";
            if($query_run=$conn->query($query)){
                $result = $query_run->fetch_assoc();
                
                return $result[$data];
            }
        }else{
            header('Location: login.php');
        }
        
    }
}
?>