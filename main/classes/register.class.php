<?php
$user = new RegisterUser($_POST['login'], $_POST['password'], $_POST['confirm_password'], $_POST['email'], $_POST['name']);
class RegisterUser{
	// Class properties
	private $login;
	private $raw_password;
    private $confirm_password;
	private $encrypted_password;
    private $email;

    private $name;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;
	private $new_user;


	public function __construct($login, $password, $confirm_password, $email, $name){

		$this->login = trim($this->login);
		$this->login = filter_var($login, FILTER_SANITIZE_STRING);

		$this->raw_password = filter_var($password, FILTER_SANITIZE_STRING);
        $this->confirmPassword = filter_var($confirm_password);
		$this->encrypted_password = password_hash($this->raw_password, PASSWORD_DEFAULT);

        $this->email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

        $this->name = filter_var(trim($name), FILTER_SANITIZE_STRING);

		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"login" => $this->login,
			"password" => $this->encrypted_password,
            "email" => $this->email,
            "name" => $this->name
		];

		if($this->checkFieldValues() && $this->validatePassword()){
			$this->insertUser();
		}
	}

    // Проверка заполненности полей
	private function checkFieldValues(){
		if(empty($this->login) || empty($this->raw_password) || empty($this->email) || empty($this->name) || empty($this->confirm_password)){
			$this->error = "Both fields are required.";
			return false;
		}else{
			return true;
		}
	}

    // Проверка наличия логина в БД
	private function loginExists(){
		foreach($this->stored_users as $user){
			if($this->login == $user['login']){
				$this->error = "Username already taken, please choose a different one.";
				return true;
			}
		}
		return false;
	}

    // Проверка наличия email в БД
    private function emailExists(){
        foreach($this->stored_users as $user){
            if($this->email == $user['email']){
                $this->error = "Email already taken, please choose a different one.";
                return true;
            }
        }
        return false;
    }

    // Сравнение полей с паролем
    public function validatePassword() {
        if ($this->raw_password !== $this->confirm_password) {
            $this->error = "Password do not match";
            return false;
        }
        return true;
    }

    // Добавление пользователя в БД
	private function insertUser(){
		if($this->loginExists() == FALSE && $this->emailExists() == FALSE){
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
				return $this->success = "Your registration was successful";
			}else{
				return $this->error = "Something went wrong, please try again";
			}
		}
	}



} // end of class