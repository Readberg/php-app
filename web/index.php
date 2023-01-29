<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="body">
    <main class="main">
        <section class="registration-section">
            <div class="information">
                <img src="./assets/images/manao-icon.png" alt="Manao team logo"/>
                <h1>Sign up into your account</h1>
            </div>
            <div>
                <form class="signup-form form" method="post" enctype="multipart/form-data" autocomplete="off">
                    <label>Login</label>
                    <input type="text" name="login" placeholder="Enter your login..">

                    <label>Email</label>
                    <input type="email" name="email" placeholder="example@gmail.com">

                    <label>Password</label>
                    <input type="password" name="password" placeholder="xxxxxxxxxx">

                    <label>Confirm password</label>
                    <input type="password" name="confirmPassword" placeholder="xxxxxxxxxx">

                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter your name..">
                </form>
                <button class="signup-btn btn">Sign up</button>
            </div>
        </section>
        <section class="company-section">
            <a href="https://manao-team.com/"><img src="https://manao-team.com/local/templates/manao-dev/images/bg/bg-about.svg" alt="Manao team image" /></a>
        </section>
    </main>
</body>
</html>
