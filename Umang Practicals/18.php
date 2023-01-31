<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
       if (isset($_POST['pass']))
       {
        $cookie_value=$_POST['cname'];
        setcookie('user', $cookie_value);
       }
       if (isset($_POST['get']))
       {
        echo "$_COOKIE[user]";
       }
        ?>
        <form method="post" action="18.php">
        Enter the name:<br>  
    <input type="text" name="cname">
    <input type="submit" name="pass" value="pass" />  
    <input type="submit" name="get" value="get" /> 
        </form>
        
    </body>
</html>