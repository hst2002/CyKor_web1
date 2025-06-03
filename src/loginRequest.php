<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if($result->num_rows == 0){
        echo "no username detected";
    }
    else{
        $row = $result->fetch_assoc();
        if($row["password"] != $password){
            echo "password incorrect";
        }
        else{
            echo "$username login succeed";
            $cookieName = "Loginusername";
            setcookie($cookieName, $username, time()+3600, "/");
        }
    }
?>
<html>
    <body>
        <br>
        <a href="index.php">back to home</a>
    </body>
</html>