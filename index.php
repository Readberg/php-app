<?php
session_start();
require("register.class.php") ?>
<?php
    if($_POST['password'] !== $_POST['confirmPassword']) {
        $_SESSION['error'] = ' *Passwords do not match';
    } else {
        if(isset($_POST['submit'])){
            $user = new RegisterUser($_POST['username'], $_POST['password']);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Register form</title>
</head>
<body>

	<form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>Register form</h2>
		<h4>All fields are <span>required</span></h4>

		<label>Login</label>
		<input type="text" name="username" placeholder="Enter login">

		<label>Password</label>
		<input type="text" name="password" placeholder="Enter password">

        <label>Confirm password
            <?php
            if ($_SESSION['error']){
                echo '<span style="color: #af0c0c;">' . $_SESSION['error'] . '</span>';
            }
            unset($_SESSION['error']);
            ?>
            </label>

        <input type="text" name="confirmPassword" placeholder="Enter password again">

		<button type="submit" name="submit">Register</button>
        <p class="link">Already have an account? - <a href="/login.php">Log in</a></p>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>