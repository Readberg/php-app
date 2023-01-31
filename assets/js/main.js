$(document).ready( function () {
    $(".sign-up").click( function (e) {
        let login = $('input[name = "login"]').val(),
            password = $('input[name = "password"]').val(),
            confirmPassword = $('input[name = "confirmPassword"]').val(),
            email = $('input[name = "email"]').val(),
            name = $('input[name = "name"]').val();

        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "main/classes/register.class.php",
            dataType: 'json',
            data: {
                'login': login,
                'password': password,
                'confirmPassword': confirmPassword,
                'email': email,
                'name': name,
            },
            success: function (data) {
                if(data.success) {
                    alert('complete')
                } else{
                    alert('error');
                }
            }
        })
    })
})