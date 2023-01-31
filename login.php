<?php require("main/classes/login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
        echo ('g');
		$user = new LoginUser($_POST['login'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<title>Login Page</title>
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
                    <label for="login">Login</label>
                    <input type="text" class="login form-input" id="custom-input" name="login" placeholder="Enter your login..">
                </div>
                <div class="form-section">
                    <label for="password">Password</label>
                    <input type="password" class="password form-input" id="custom-input" name="password" placeholder="xxxxxxxxxx">
                </div>
                <button class="signup-btn btn" id="sign-in" type="submit" name="submit">Login now</button>
            </form>
            <p>Don't have an account yet? <a class="link" href="/">Sign Up now</a></p>
            <p class="error"><?php echo @$user->error ?></p>
            <p class="success"><?php echo @$user->success ?></p>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>
</html>