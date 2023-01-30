<?php
use App\Services\Page;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>LogIn Page</title>
</head>
<body class="body">
<main class="main">
    <section class="company-section login-company">
        <a href="https://manao-team.com/" class="company-link"><img src="https://manao-team.com/local/templates/manao-dev/images/head-illustartion.svg" alt="Manao team image" /></a>
    </section>
    <section class="login-section section">
        <div class="information">
            <img class="info-img" src="../../assets/images/manao-icon.png" alt="Manao team logo"/>
            <h1>Login into your account</h1>
        </div>
        <div>
            <form class="login-form form" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-section">
                    <label>Login</label>
                    <input type="text" class="login form-input" id="custom-input" name="login" placeholder="Enter your login..">
                </div>
                <div class="form-section">
                    <label>Password</label>
                    <input type="password" class="password form-input" id="custom-input" name="password" placeholder="xxxxxxxxxx">
                </div>
            </form>
            <button class="signup-btn btn">Login now</button>
            <p>Don't have an account yet? <a class="link" href="/register">Sign Up now</a></p>
        </div>
    </section>
</body>
</html>