<?php
session_start();

$data = file_get_contents("../data.json");

$login = $_POST['login'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password_confirm'];
$email = $_POST['email'];
$name = $_POST['name'];

$jsonArray = [];

if ($password !== $passwordConfirm){
    $_SESSION['passwordCorrect'] = '*Passwords do not match';
    header('Location: ../register.php');
} else {
    $jsonArray['login'] = $login;
    $jsonArray['password'] = $password;
    $jsonArray['email'] = $email;
    $jsonArray['name'] = $name;
    file_put_contents('../data.json', json_encode($jsonArray, JSON_FORCE_OBJECT), FILE_APPEND);

    header('Location: ../');
}

?>

