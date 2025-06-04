<?php
    $num = $_POST['postnum'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $i = $num;
    $conn->query("DELETE FROM posts WHERE postnum = $num");
    $conn->query("DELETE FROM comments WHERE postnum = $num");
    $result = $conn->query("SELECT * FROM posts WHERE postnum > $num");
    while($row = $result->fetch_assoc()){
        $prenum = $row['postnum'];
        $conn->query("UPDATE posts SET postnum = '$i' WHERE postnum = '$prenum'");
        $comments = $conn->query("SELECT * FROM comments WHERE postnum > $num");
        while($comment_row = $comments->fetch_assoc()){
            $conn->query("UPDATE comments SET postnum = '$i' WHERE postnum = '$prenum'");
        }
        $i++;
    }
?>

<html>
    <body>
        <h3>post deleted</h3>
        <a href="index.php">back to home</a>
    </body>
</html>