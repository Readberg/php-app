<?php
session_start();

$data = file_get_contents("../data.json");

$login = $_POST['login'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password_confirm'];
$email = $_POST['email'];
$name = $_POST['name'];

if ($password !== $passwordConfirm){
    $_SESSION['passwordCorrect'] = '*Passwords do not match';
    header('Location: ../register.php');
}

?>

