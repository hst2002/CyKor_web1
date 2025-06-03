<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if($result->num_rows>0){
        echo "username already exists";
    }
    else{
        $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    }
?>
<html>
    <body>
        <br>
        <a href="index.php">back to home</a>
    </body>
</html>