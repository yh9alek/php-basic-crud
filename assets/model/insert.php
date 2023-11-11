<?php
    require('connection.php');
    session_start();
    function insert(){
        $connection = getConnection("mysql:host=localhost; dbname=php_crud;", "root", "");
        try {
            $connection->exec("INSERT INTO tareas (titulo, descripcion, fecha) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".date("Y-m-d H:i:s")."');");
        }
        catch(PDOException $ex) {
            $_SESSION['message'] = "An error occurred during the insertion";
            return header("Location: ../../index.php?message=true");
        }
        $_SESSION['message'] = "Registration has been added successfully";
        header("Location: ../../index.php?message=true");
    }
    insert();
?>