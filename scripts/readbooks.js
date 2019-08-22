$(document).ready(function() {
    var user_name = document.getElementById("user_code");
    $.ajax({
        type: 'GET',
        url: './phpScript/readBook.php',
        success: function(response) {
            let result = JSON.parse(response);
            for (var i = 0; i < result.length; i++) {
                document.getElementById("root").innerHTML +=
                    "<div class='team-item col-md-3'>" +
                    "<div class='item-image' style='min-width:250px; max-width: 250px; max-height: 250px;'>" +
                    "<a href='./mbooks/" + result[i].pdf + "'><img src='./mbooks/" + result[i].image + "' style='min-width:100%; max-height: 200px; min-height: 250px;'/></a>" +
                    "</div>" +
                    "<div class='item-caption py-3' style='min-width:250px;'>" +
                    "<div class='item-role px-2'>" +
                    "<p class='book_name'>" + result[i].book_name + "</p>" +
                    "</div>" +
                    "<div class='item-name px-2'>" +
                    "<a href='./mbooks/" + result[i].pdf + "'><p class='mbr-fonts-style display-4'><strong>READ</strong></p></a>" +
                    "<button type='button' id='btnFav' class='btnFave' data-pdf='" + result[i].pdf + "' data-tar='" + result[i].book_name + "' data-img='" + result[i].image + "'>add to fav</button></div>" +
                    "</div>" +
                    "</div>";
            }
            var fav = document.getElementsByClassName("btnFave");
            for (var x = 0; x < fav.length; x++) {
                fav[x].onclick = function() {
                    var bookName = $(this).attr('data-tar');
                    var bookCover = $(this).attr('data-img');
                    var bookPDF = $(this).attr('data-pdf');
                    addFavourite(user_name.value, bookName, bookCover, bookPDF);
                }
            }
        }
    });

});

function addFavourite(userCode, nameBook, bookImg, bookPdf) {
    $.ajax({
        url: './phpScript/favourite.php',
        type: 'POST',
        data: { usercode: userCode, name_of_Book: nameBook, book_img: bookImg, book_PDF: bookPdf },
        success: (res) => {
            alert(res);
        }
    })
}