<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Basic CRUD</title>
        <link rel="stylesheet" href="../css/update.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP MYSQL CRUD</h1>
            </div>
        </header>
        <section>
            <form action="../model/update.php" method="post">
                <label for="id">Task with id: </label>
                <input type="text" name="id" value="<?= $_GET['id']?>" readonly>
                <input type="text" name="title" placeholder="Task Title">
                <textarea name="description" placeholder="Task Description"></textarea>
                <input type="submit" value="Update Task">
            </form>
        </section>
    </body>
</html>