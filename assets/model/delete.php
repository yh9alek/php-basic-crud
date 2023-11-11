<?php
    require('connection.php');
    session_start();
    $_SESSION['message'] = null;
    function delete() {
        $cod = '';
        if(isset($_GET['id'])) $id = $_GET['id'];
        $connection = getConnection("mysql:host=localhost; dbname=php_crud;", "root", "");
        try {
            $prepare = $connection->prepare("DELETE FROM tareas WHERE id = :id");
            $prepare->bindParam(':id', $id, PDO::PARAM_STR);
            $prepare->execute();
        }
        catch(PDOException $ex) {
            $_SESSION['message'] = "An error occurred during the deletion";
            return header("Location: ../../index.php?message=true");
        }
        $_SESSION['message'] = "The record was deleted successfully";
        header("Location: ../../index.php?message=true");
    }
    delete();
?>