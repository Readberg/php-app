<?php require("main/classes/register.class.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="/assets/css/styles.css">
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
            <form class="signup-form form" id="form" method="post" enctype="multipart/form-data" autocomplete="off">
                <label for="login" class="form-section">Login
                    <input type="text" class="login form-input _req" name="login" placeholder="Enter your login.." >
                </label>

                <label for="email" class="form-section">Email
                    <input type="email" class="email form-input _req" name="email" placeholder="example@gmail.com">
                </label>

                <label for="password" class="form-section">Password
                    <input type="password" class="password form-input _req" name="password" placeholder="xxxxxxxxxx">
                </label>

                <label for="confirmPassword" class="form-section">Confirm password
                    <input type="password" class="confirmPassword form-input _req" name="confirmPassword" placeholder="xxxxxxxxxx">
                </label>

                <label for="name" class="form-section">Name
                    <input type="text" class="name form-input _req" name="name" placeholder="Enter your name..">
                </label>
                <button class="signup-btn btn" id="sign-up" name="submit">Sign up</button>
            </form>
            <p>Already have an account? <a class="link" href="login.php">Log in</a></p>
            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
            <p id="test"></p>
        </div>
    </section>
    <section class="company-section">
        <a href="https://manao-team.com/" class="company-link"><img src="https://manao-team.com/local/templates/manao-dev/images/bg/bg-about.svg" alt="Manao team image" /></a>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>