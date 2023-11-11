<?php require_once '../php_crud/assets/model/select.php' ?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Basic CRUD</title>
        <link rel="stylesheet" href="../php_crud/assets/css/index.css">
        <!-- font-awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP MYSQL CRUD</h1>
            </div>
        </header>
        <section>
            <div class="taks__section container">
                <div class="add">
                    <?php if(isset($_GET['message'])): ?>
                        <div class="message__container">
                            <h3 class="message"><?=$_SESSION['message'];?></h3>
                            <a href="index.php" class="message__button"><i class="fa-solid fa-xmark"></i></i></a>
                        </div>
                    <?php endif; ?>
                    <form action="../php_crud/assets/model/insert.php" method="post">
                        <input type="text" name="title" placeholder="Task Title">
                        <textarea name="description" placeholder="Task Description"></textarea>
                        <input type="submit" value="Save Task">
                    </form>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        <?php echo select("SELECT * FROM tareas;");?>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>