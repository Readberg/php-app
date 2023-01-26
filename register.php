<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web app</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<header>

</header>
<!-- Форма авторизации-->
<main>
    <form action="vendor/signup.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <label>Confirm password<span class="password_correct">
                <?php
                    echo $_SESSION['passwordCorrect'];
                    unset($_SESSION['passwordCorrect']);
                ?>
            </span></label>
        <input type="password" name="password_confirm" placeholder="Enter password again">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter Email">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name">
        <button>Sign up</button>
        <p>
            Have an account? - <a href="/">Login</a>
        </p>
    </form>
</main>

<footer>

</footer>

</body>

</html>