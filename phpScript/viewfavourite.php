<?php

include "lumacon.php";
include "main.php";
include "bookList.php";

class ViewFavourite{

    public function __construct(){
        global $conn;
        $main = new main();
        $userReg_code = $main->fetchData('reg_code');

        if($result = $conn->query("SELECT * FROM fav_books WHERE reg_code='".$userReg_code."'")){
            $this->sendData($result);
        }
    }

    public function sendData($result){

        while($fetch_array = $result->fetch_assoc()){
            $book_list = new bookList($fetch_array['book_name'], $fetch_array['book_image'], $fetch_array['book_pdf']);
            $mArray[] = array("image"=>$book_list->getImageFile(), "book_name"=>$book_list->getBookName(), "pdf"=>$book_list->getPdfFile());

            // echo "<img src='../mbooks/".$book_list->getImageFile()."'>";

        }
        echo json_encode($mArray);

    }
}

$viewfavourite = new ViewFavourite();

?>