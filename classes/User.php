<?php
    session_start();

    require_once 'database.php';

    class User {
        public $username, $email, $password;
        private $mysql;

        function __construct() {
            $database = new Database();
            $this->mysql = $database->dbConnect();
        }

        function hashPassword($pass) {
            return password_hash($pass, PASSWORD_DEFAULT);
        }

        function saveUser() {
            return mysqli_query($this->mysql, "INSERT INTO users VALUES (NULL, '". $this->username ."', '". $this->email ."', '". $this->hashPassword($this->password) ."')");
        }
        function loginUser() {
            $result = mysqli_fetch_array(mysqli_query($this->mysql, "SELECT * FROM users WHERE username = '". $this->username ."'"));
            if (password_verify($this->password, $result["password"])) {
                // echo "ok";
                $_SESSION['username'] = $result["username"];
                $_SESSION['email'] = $result["email"];
                header('Location: index.php');
            } else {
                die("Неверное имя пользователя или пароль!");
            }
        }

        function __destruct() {
            mysqli_close($this->mysql);
        }
    }

    // $user = new User();
    // $user->username = "mohovoy";
    // $user->email = "mohovoy@internet.ru";
    // $user->password = "88888888";
    // $user->saveUser();
    // $user->printData();
?>