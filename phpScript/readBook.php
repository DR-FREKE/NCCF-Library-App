<?php 

include "lumacon.php";
include "main.php";
include "bookList.php";

class readBook{

    public function __construct(){
        global $conn;

        if($result = $conn->query("SELECT * FROM luma_books")){
            $this->sendData($result);
        }
    }

    public function sendData($result){

        while($fetch_array = $result->fetch_assoc()){
            $book_list = new bookList($fetch_array['ebook_name'], $fetch_array['image_name'], $fetch_array['file']);
            $mArray[] = array("image"=>$book_list->getImageFile(), "book_name"=>$book_list->getBookName(), "pdf"=>$book_list->getPdfFile());

            // echo "<img src='../mbooks/".$book_list->getImageFile()."'>";

        }
        echo json_encode($mArray);

    }
}

$read = new readBook();
?>