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
                <form class="signup-form form" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-section">
                        <label>Login</label>
                        <input type="text" class="login form-input" name="login" placeholder="Enter your login..">
                    </div>
                    <div class="form-section">
                        <label>Email</label>
                        <input type="email" class="email form-input" name="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-section">
                        <label>Password</label>
                        <input type="password" class="password form-input" name="password" placeholder="xxxxxxxxxx">
                    </div>
                    <div class="form-section">
                        <label>Confirm password</label>
                        <input type="password" class="form-input" name="confirmPassword" placeholder="xxxxxxxxxx">
                    </div>
                    <div class="form-section">
                        <label>Name</label>
                        <input type="text" class="name form-input" name="name" placeholder="Enter your name..">
                    </div>
                </form>
                <button class="signup-btn btn">Sign up</button>
                <p>Already have an account? <a class="link" href="./login.php">Log in</a></p>
            </div>
        </section>
        <section class="company-section">
            <a href="https://manao-team.com/" class="company-link"><img src="https://manao-team.com/local/templates/manao-dev/images/bg/bg-about.svg" alt="Manao team image" /></a>
        </section>
    </main>
</body>
</html>
