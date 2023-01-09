<?php
    class Database {
        const DB_HOSTNAME = "localhost";
        const DB_USERNAME = "root";
        const DB_PASSWORD = "root";
        const DB_NAME = "mining-game";
        public $db_connect;

        function dbConnect() {
            $this->db_connect = mysqli_connect(self::DB_HOSTNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME) or die(mysqli_error());
            return $this->db_connect;
        }
    }
?>