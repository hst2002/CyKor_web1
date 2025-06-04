<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $poster = $_COOKIE['Loginusername'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $result = $conn->query("SELECT postnum FROM posts");
    $i = $result->num_rows + 1;
    $sql = "INSERT INTO posts (postnum, poster, title, content) VALUES ('$i','$poster','$title','$content')";
    $conn->query($sql);
?>
<html>
    <head>
        <title>post upload</title>
    </head>
    <body>
        <h3>post uploaded</h3><br>
        <a href='index.php'>back to home</a>
    </body>
</html>