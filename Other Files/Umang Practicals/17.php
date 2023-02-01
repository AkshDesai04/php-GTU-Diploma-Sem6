<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
        if (isset($_POST['dis'])) {
            session_start();
        session_destroy();   
        }
        ?>
        <form method="post" action="17landing.php">
        Enter the name:<br>  
    <input type="text" name="name" value="Umang">
    <input type="submit" name="save" value="Submit" />  
        </form>
    </body>
</html>