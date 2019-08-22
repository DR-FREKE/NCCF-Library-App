$(document).ready(function() {
    var user_name = document.getElementById("user_code");
    $.ajax({
        type: 'GET',
        url: './phpScript/viewfavourite.php',
        success: function(response) {
            let result = JSON.parse(response);
            for (var i = 0; i < result.length; i++) {
                document.getElementById("shelf").innerHTML +=
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
                    "</div>" +
                    "</div>" +
                    "</div>";
            }
        }
    });

});