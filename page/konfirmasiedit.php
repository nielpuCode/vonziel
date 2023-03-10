<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Von Ziel Blog</title>
    <link rel="icon" href="../src-pic/coverblog.png">
    <link rel="stylesheet" href="../style.css">
    <script src="page.js"></script>
    <script src="https://kit.fontawesome.com/c9a949b192.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <label for="check">
            <img src="../src-pic/logoblog.png" alt="Logo Blog" onclick="rotatearrow()">
            <i id="kuncinav" class="fa-solid fa-chevron-right" onclick="rotatearrow()"></i>
        </label>

        <input type="checkbox" id="check" name="check">

        <ul style="z-index: 10;">
            <li id="firstlist"><a href="../index.php">Home</a></li>
            <li><a href="blog.php">All Blog</a></li>
            <li id="lastlist"><a href="createnew.php">Write New</a></li>
        </ul>
    </div>

    <div class="hapusblog">
        <form action="editblog.php" method="POST">
            <input style="margin-bottom: 0;" type="text" placeholder="your email" name="email" id="email">

            <p style="text-align: center; font-style: italic; font-size: 15px; margin-bottom: 20px; margin-top: 10px;">Just to make sure that this is you who take action!</p>

            <input id="id" name="id" type="text" value="<?php echo $_GET["id"];?>" placeholder="id blog">

            <button type="submit" name="confirm">Confirm!</button>
        </form>
    </div>

</body>
</html>