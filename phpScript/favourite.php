<?php
include "lumacon.php";

if(isset($_POST['usercode']) && isset($_POST['name_of_Book']) && isset($_POST['book_img']) && isset($_POST['book_PDF'])){

    $userCode = $_POST['usercode'];
    $bookName = $_POST['name_of_Book'];
    $bookImage = $_POST['book_img'];
    $bookPdf = $_POST['book_PDF'];

    $query = "SELECT * FROM fav_books WHERE reg_code='".$userCode."' && book_name='".$bookName."'";
    if($query_run = $conn->query($query)){
        $num_rows = mysqli_num_rows($query_run);
        if($num_rows > 0){
            echo "book already added to favourite";
        }else{
            if ($conn->query("INSERT INTO fav_books (book_name, book_image, book_pdf, reg_code) VALUES ('".$bookName."','".$bookImage."', '".$bookPdf."', '".$userCode."')")) {
                echo "Added to favourite";
            }
        }
    }

}
?>