<?php
    function getConnection($server, $user, $pass) {
        try{
            $conn = new PDO($server, $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $ex) {
            echo "An error occurred: $ex";
        }
        return null;
    }
?>