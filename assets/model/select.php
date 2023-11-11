<?php
    require('connection.php');
    function select($sql) {
        $connection = getConnection("mysql:host=localhost; dbname=php_crud;", "root", "");
        $records = '';
        try {
            $prepare = $connection->prepare($sql);
            $prepare->execute();
            $all = $prepare->fetchAll();
            foreach($all as $results) {
                $records .= "<tr>
                    <td>".$results['titulo']."</td>
                    <td>".$results['descripcion']."</td>
                    <td>".$results['fecha']."</td>
                    <td class='act__td'>
                        <a class='upd__btn' href='../php_crud/assets/view/update_view.php?id=".$results['id']."'><i class='fa-solid fa-marker'></i></a>
                        <a class='del__btn' href='../php_crud/assets/model/delete.php?id=".$results['id']."'><i class='fa-solid fa-trash-can'></i></a>
                    </td>
                </tr>";
            }
            return $records;
        }
        catch (PDOException $ex) {
            echo "An error occurred during the selection: $ex";
            return header("Location: ../../index.php?message=true");
        }
    }
?>