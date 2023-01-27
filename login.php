<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
        header('Location: /account.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="assets/css/styles.css">
	<title>Log in form</title>
</head>
<body>
	<form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Login form</h2>
		<h4>Both fields are <span>required</span></h4>

		<label>Username</label>
		<input type="text" name="username">

		<label>Password</label>
		<input type="text" name="password">

		<button type="submit" name="submit">Log in</button>

        <p class="link">Don't have an account? - <a href="/index.php">Registration</a></p>

        <p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>