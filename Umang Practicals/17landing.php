<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        if (isset($_POST['save'])) {
            $name = $_POST['name'];
            session_start();
            $_SESSION["name"] = $name;
        }
        echo $_SESSION["name"];
        ?>
        <form method="post" action="17.php">
    <input type="submit" name="dis" value="logout" />  
        </form>
      
    </body>
</html>