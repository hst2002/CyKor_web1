<?php
    $num = $_GET['postNum'];
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $result = $conn->query("SELECT * FROM posts WHERE postnum = $num");
    $row = $result->fetch_assoc();

?>

<html>
    <body>
        <a href="index.php">home</a><br>
        <h3><?=$row['title']?></h3>
        posted by <?=$row['poster']?><br><hr>
        <?=$row['content']?><br><br>
        <?php
            if($row['poster'] == $_COOKIE['Loginusername']){
        ?>
            <form method='POST' action='editPost.php'>
                <input type = "hidden" value =<?=$num?> name = 'postnum'>
                <input type="submit" value="edit">
            </form>
            <form method='POST' action='deleteRequest.php'>
                <input type = "hidden" value =<?=$num?> name = 'postnum'>
                <input type="submit" value="delete">
            </form>
        <?php
            }
        ?>
        <hr>
        <h4>Comments</h4>
        <?php
            $comments = $conn->query("SELECT * FROM comments WHERE postnum = $num");
            while($row = $comments->fetch_assoc()){
        ?>
                <?= $row['comment']?><br>
                : commented by <?= $row['commenter']?><br><br>
        <?php
            }
        ?>

        <form method='POST' action='comment.php'>
            <input type = "hidden" name = 'num' value = <?=$num?>>
            <input type = "text" name = 'comment' style="height:10%">
            <input type="submit" value="comments">
        </form>
    </body>
</html>