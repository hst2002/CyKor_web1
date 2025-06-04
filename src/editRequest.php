<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $num = $_POST['postnum'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE postnum = '$num'";
    $conn->query($sql);
?>

<html>
    <body>
        <h3>edit completed</h3>
        <a href="index.php">back to home</a>
    </body>
</html>