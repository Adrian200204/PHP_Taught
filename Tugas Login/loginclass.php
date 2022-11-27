<?php
    class LoginUser{
        private $username;
        private $password;
        public $errorinput;
        public $successinput;

        private $storage = "data.json";
        private $stored_users;

        public function __construct($username, $password){
            $this->username = $username;
            $this ->password = $password;
            $this ->stored_users = json_decode(file_get_contents($this->storage),true);
            $this->login();
        }

        private function login(){
            foreach ($this ->stored_users as $user)
            {
                if($user['username'] == $this->username){
                    if($this->password == $user['password'])
                    {
                        session_start();
                        $_SESSION['user'] = $this->username;
                        header("location: newindex.php"); exit();
                    }
                }
            }
            return ($this->errorinput = "Wrong Username of password");
        }

    }
 