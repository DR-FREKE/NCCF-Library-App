<?php 
include "lumacon.php";

class addFile{

    public function uploadFile(){
        global $conn;
        $location = "C:\wamp64\www\luma";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name =$_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $ebook_cover = $_FILES['image']['name'];
            $ebook_tmp = $_FILES['image']['tmp_name'];
            $ebook_name = $_POST['ebook_name'];
            
            $path_info = pathinfo($name, PATHINFO_EXTENSION);

            if($path_info == "pdf"){
                $location = $location."\mbooks/";
                $location2 = $location."\Images/";
                if(move_uploaded_file($tmp_name, $location.$name)){
                    if(move_uploaded_file($ebook_tmp, $location.$ebook_cover)){
                        if($conn->query("INSERT INTO luma_books(ebook_name, file, image_name) VALUES('".$ebook_name."', '".$name."', '".$ebook_cover."')")){
                            echo "uploaded";
                        }else{
                            echo "couldn't upload";
                        }
                    }
                }
            }
        }
    }
}

$mFile = new addFile();
$mFile->uploadFile();
    
?>

