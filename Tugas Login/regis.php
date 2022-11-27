<?php
class RegisterUser{
    private $username;
    private $raw_password;
    public $errorinput;
    public $successinput;
    private $storage = "data.json";
    private $stored_users;
    private $new_user;

    public function __construct($username, $password)
    {
        $this->username = trim($this->username);
        $this->username = filter_var($username, FILTER_SANITIZE_STRING);

        $this->raw_password = filter_var(trim($password), FILTER_SANITIZE_STRING);

        $this->stored_users = json_decode(file_get_contents($this->storage),true);

        $this->new_user = [
            "username" => $this -> username,
            "password" => $this -> raw_password,
        ];
 
        if($this->checkFieldValues()){
            $this->insertUser();
        }

    }
    private function checkFieldValues()
    {
        if(empty($this->username) && empty($this->raw_password))
        {
            $this->errorinput = "Both Fields are required";
            return false;
        }
        elseif(empty($this->username)){
            $this ->errorinput = "Please input your username";
            return false;
        }
        elseif(empty($this->raw_password)){
            $this ->errorinput = "Please input your password";
            return false;
        }
        else{ 
            return true;
        }
    }
    private function usernameExists()
    {
        foreach($this -> stored_users as $user){
            if($this->username == $user['username']){
                $this->errorinput = "Username already taken, please choose a different one";
                return true;
            }
        }

        return false;
    }

    private function insertUser()
    {
        if($this->usernameExists() == FALSE)
        {
            array_push($this->stored_users, $this->new_user);
            if(file_put_contents($this-> storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
                return $this->successinput = "Your Registration is successful";
            }
            else{
                return $this->errorinput = "Something went wrong, please try again";
            }
        }
    }

}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regis</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body >
<div class="bg-all">
</div>
</body>
</html> -->