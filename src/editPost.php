<?php $num = $_POST['postnum']; ?>
<html>
    <head>
        <title>editing post</title>
    </head>
    <body>
        <h2>New Post</h2>
        <form method="POST" action="editRequest.php">
            title</br>
            <input type="text" name="title"></br>
            content</br>
            <input type="text" name="content" style="height: 20%"></br>
            <input type="hidden" value=<?= $num ?> name = 'postnum'>
            <input type="submit" value="edit post">
        </form>
        <a href="index.php">back to home</a>
    </body>
</html>