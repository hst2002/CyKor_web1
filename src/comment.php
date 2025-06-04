<?php
    $num = $_POST['num'];
    $comment = $_POST['comment'];
    $commenter = $_COOKIE['Loginusername'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $sql = "INSERT INTO comments (postnum, commenter, comment) VALUES ('$num', '$commenter', '$comment')";
    $conn->query($sql);
?>

<html>
    <body>
        <h3>comment upload</h3>
        <a href="readPost.php?postNum=<?= $num?>">back to post</a><br>
        <a href="index.php">back to home</a>
    </body>
</html>