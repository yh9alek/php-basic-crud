<?php
    require('connection.php');
    session_start();
    function update() {
        $id = '';
        if(isset($_POST['id'])) $id = $_POST['id'];
        $connection = getConnection("mysql:host=localhost; dbname=php_crud;", "root", "");
        try {
            $prepare = $connection->prepare("UPDATE tareas SET titulo = :title, descripcion = :description WHERE id = :id");
            $prepare->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
            $prepare->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
            $prepare->bindParam(':id', $id, PDO::PARAM_STR);
            $prepare->execute();
        }
        catch(PDOException $ex) {
            $_SESSION['message'] = "An error occurred during the update";
            return header("Location: ../../index.php?message=true");
        }
        $_SESSION['message'] = "Registration has been updated successfully";
        header("Location: ../../index.php?message=true");
    }
    update();
?>