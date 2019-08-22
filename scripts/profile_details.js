$(document).ready(function() {
    var modal = document.getElementById("myModal");
    $('#btnUpdate').on('click', () => {
        $.ajax({
            type: 'POST',
            url: './phpScript/updateUser.php',
            data: { userId: $('#user_code').val(), name: $('#name').val(), email: $('#email').val(), username: $('#username').val(), phone: $('#phone').val() },
            success: (res) => {
                alert(res)
            }
        })
    });
    $('#btnUpdatepass').on('click', () => {
        var userId = $('#user_code').val();
        var new_password = $('#new-password').val();
        var confirm_password = $('#confirm-password').val();
        var current_password = $('#current-password').val();

        if (new_password != confirm_password) {
            //do something
            alert("password do not match")
        } else {
            $.ajax({
                type: 'POST',
                url: './phpScript/updateUserPassword.php',
                data: { userId: userId, new_password: new_password, current_password: current_password },
                success: (res) => {
                    alert(res)
                }
            })
        }
    })
    $('#psw').on('click', (e) => {
        e.preventDefault();

        $(modal).css('display', 'block');

    })

    $('#btnClose').on('click', () => {
        $(modal).css('display', 'none');
    })
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

})