$(document).ready(function(e) {
    $('#btnUpload').on('click', function(e) {
        e.preventDefault();

        // alert("good");
        startEbookUpload();
    });
});

function startAjax(formData) {
    $.ajax({
        url: './phpScript/ebook.php',
        type: 'POST',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            alert("sending...");
        },
        success: function(response) {
            alert(response);
        }
    });
}


function startEbookUpload() {
    var mFile = document.getElementById('uploadFile');
    var mImage = document.getElementById('uploadImage');
    var book_name = document.getElementById("ebook_name");

    var mfiles = mFile.files[0];
    var mImg = mImage.files[0];
    var formData = new FormData();

    if (!mfiles.type.match('pdf.*') && !mImg.type.match('jpg.*')) {
        alert("sorry");
    } else {
        formData.append('ebook_name', book_name.value);
        formData.append('file', mfiles);
        formData.append('image', mImg);

        startAjax(formData);
    }
    // alert(formData);

}