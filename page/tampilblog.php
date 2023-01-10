<?php
require 'koneksi.php';
$id = $_GET["id"];
$sql = "SELECT * FROM theblog WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../src-pic/coverblog.png">
    <link rel="stylesheet" href="../style.css">
    <script src="page/page.js"></script>
    <script src="https://kit.fontawesome.com/c9a949b192.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

</head>
<body>
    <!-- sass --watch page1.scss style.css klik ini dulu setiap kali buka vscode--> 
    <div class="navbar">
        <label for="check">
            <img src="../src-pic/logoblog.png" alt="Logo Blog" onclick="rotatearrow()">
            <i id="kuncinav" class="fa-solid fa-chevron-right" onclick="rotatearrow()"></i>
        </label>

        <input type="checkbox" id="check" name="check">
        
        <ul>
            <li id="firstlist"><a href="../index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li id="lastlist"><a href="createnew.php">Write New</a></li>
        </ul>
    </div>

    <div class="isiblog">
        <div class="wrapperisi">

            <div class="infoblog">
                <p><span id="identitasblog">Writer :</span> <span id="yangnulis"><?php echo $row["nama"]?></span></p>
                <p><span id="identitasblog">Date :</span> <span id="tanggal"><?php echo $row["tanggalnulis"]?></span></p>
            </div>

            <div class="blognya">
                <p id="textblog"><?php echo $row["textblog"]?></p>
            </div>
        </div>
    </div>
    
</body>
</html>