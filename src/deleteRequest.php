<?php
    $num = $_POST['postnum'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $i = $num;
    $conn->query("DELETE FROM posts WHERE postnum = $num");
    $result = $conn->query("SELECT * FROM posts where postnum > $num");
    while($row = $result->fetch_assoc()){
        $prenum = $row['postnum'];
        $conn->query("UPDATE posts SET postnum = '$i' WHERE postnum = '$prenum'");
        $i++;
    }
?>

<html>
    <body>
        <h3>post deleted</h3>
        <a href="index.php">back to home</a>
    </body>
</html>