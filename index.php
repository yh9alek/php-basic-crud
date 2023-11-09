<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD Básico</title>
        <link rel="stylesheet" href="../php crud/assets/css/index.css">
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
            <div class="container">
                <div class="add">
                    <div class="message__container">
                        <h3 class="message">Task Updated Succesfully</h3>
                        <button class="message__button"><i class="fa-solid fa-xmark"></i></i></button>
                    </div>
                    <form action="" method="post">
                        <input type="text" name="title" placeholder="Task Title">
                        <textarea name="description" placeholder="Task Description"></textarea>
                        <input type="submit" value="Save Task">
                    </form>
                </div>
                <div class="table">

                </div>
            </div>
        </section>
    </body>
</html>