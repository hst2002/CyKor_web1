<html>
    <head>
        <title>home</title>
    </head>
    <body>
        <a href="register.php">register</a>
        <a href="login.php">login</a>
        <?php 
            if(isset($_COOKIE["Loginusername"])) {
        ?>
            <a href="logout.php">logout</a>
        <?php
            }
            else{
        ?>
            <h3>Login Please</h3>
        <?php
                
            }
        ?>
    </body>
</html>