$(document).ready(function() {
    setInterval(() => {
        $.ajax({
            url: './phpScript/user.php',
            type: 'GET',
            success: (response) => {
                $('#btndrop').html(response);
            }
        })
    }, 1)
})