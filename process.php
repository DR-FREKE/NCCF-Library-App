<?php
include "lumacon.php";

if(isset($_POST['ebook_id']) && isset($_POST['ebook_name']) && isset($_POST['ebook_file'])){
    $ebook_id = mysqli_real_escape_string($conn, $_POST['ebook_id']);
    $ebook_name = mysqli_real_escape_string($conn, $_POST['ebook_name']);
    $ebook_file = mysqli_real_escape_string($conn, $_POST['ebook_file']);

    $sql = "INSERT INTO luma_books(ebook_id,ebook_name,ebook_file) VALUES('$ebook_id','$ebook_name','$ebook_file')";
    if(mysqli_query($conn,$sql)){
        echo 'File Uploaded';
    }else{
        echo 'ERROR: '. mysqli_error($conn);
    }
}

?>