<?php
    class Connection {
        private $server;
        private $user;
        private $pass;

        public function __construct($server, $user, $pass) {
            $this->server = $server;
            $this->user = $user;
            $this->pass = $pass;
            return Connection::getConnection($this);
        }

        public static function getConnection(Connection $obj) {
            try{
                $conn = new PDO($obj->server, $obj->user, $obj->pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            }
            catch(PDOException $ex) {
                echo "Ocurrió un error: $ex";
            }
            return null;
        }
    }

    $connection = new Connection("mysql:host=localhost;dbname=php_crud;", "root", "");
?>