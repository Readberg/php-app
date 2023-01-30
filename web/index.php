<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Registration Page</title>
</head>
<body class="body">
    <main class="main">
        <section class="registration-section section">
            <div class="information">
                <img class="info-img" src="./assets/images/manao-icon.png" alt="Manao team logo"/>
                <h1>Sign up into your account</h1>
            </div>
            <div>
                <form action="" class="signup-form form" id="form" method="post" enctype="multipart/form-data" autocomplete="off">
                    <label class="form-section">Login
                        <input type="text" class="login form-input _req" name="login" placeholder="Enter your login.." >
                        <span class="loginError labelError"></span>
                    </label>

                    <label class="form-section">Email
                        <input type="email" class="email form-input _req" name="email" placeholder="example@gmail.com">
                        <span class="emailError labelError"></span>
                    </label>

                    <label class="form-section">Password
                        <input type="password" class="password form-input _req" name="password" placeholder="xxxxxxxxxx">
                        <span class="passwordError labelError"></span>
                    </label>

                    <label class="form-section">Confirm password
                        <input type="password" class="confirmPassword form-input _req" name="confirmPassword" placeholder="xxxxxxxxxx">
                        <span class="confirmError labelError"></span>
                    </label>

                    <label class="form-section">Name
                        <input type="text" class="name form-input _req" name="name" placeholder="Enter your name..">
                        <span class="nameError labelError"></span>
                    </label>
                    <button class="signup-btn btn">Sign up</button>
                </form>
                <p>Already have an account? <a class="link" href="./login.php">Log in</a></p>
            </div>
        </section>
        <section class="company-section">
            <a href="https://manao-team.com/" class="company-link"><img src="https://manao-team.com/local/templates/manao-dev/images/bg/bg-about.svg" alt="Manao team image" /></a>
        </section>
    </main>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>
