<html>
    <body>
    <form method="post">  
    Enter the name:<br>  
    <input type="text" name="name">  
    <input type="submit" name="submit" value="Submit" /> 
    </form> 
        <?php
        if ($_POST) {

            $name = $_POST['name'];
            echo "Welcome" . $name;
        }
        ?>
        
    </body>
</html>