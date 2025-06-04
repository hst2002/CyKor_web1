<html>
    <head>
        <title>home</title>
    </head>
    <body>
        <?php 
            if(isset($_COOKIE["Loginusername"])) {
        ?>
            <a href="logout.php">logout</a><br>
        <?php
            //게시글 나열 없으면 no posts yet
                $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
                $sql = "SELECT * FROM posts";
                $result = $conn->query($sql);
                if($result->num_rows == 0){
        ?>
                <h3>No posts yet</h3><br>
        <?php
                }
                else{
                    while($row = $result->fetch_assoc()){
        ?>
                        <a href="readPost.php?postNum=<?= $row['postnum']?>"><?= $row['title']?></a><br>
        <?php
                    }
                }
        ?>
                <form method="POST" action="writePost.php">
                    <input type="submit" value="write new post">
                </form>
                
        <?php
            }
            else{
        ?>
            <a href="register.php">register</a>
            <a href="login.php">login</a><br>
            <h3>Login Please</h3>
        <?php
                
            }
        ?>
    </body>
</html>