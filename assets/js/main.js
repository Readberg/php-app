$( document ).ready(function() {
    $(".registerBtn").click(
        function(){
            let username = $('input[name = "username"]').val().trim(),
                password = $('input[name = "password"]').val().trim(),
                confirmPassword = $('input[name = "confirmPassword"]').val().trim()
                email = $('input[name = "email"]').val().trim(),
                name = $('input[name = "name"]').val().trim();

            $.ajax({
               url: 'register.class.php',
               type: 'POST',
                dataType: 'json',
               data: {
                   'username': username,
                   'password': password,
                   'email': email,
                   'name': name,
               }
            });
        }
    );
});

