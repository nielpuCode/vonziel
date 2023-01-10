<?php
require 'koneksi.php';
if(isset($_POST["tambah"])){
    tambah($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Von Ziel</title>
    <link rel="icon" href="../src-pic/coverblog.png">
    <link rel="stylesheet" href="../style.css">
    <script src="page.js"></script>
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

    <div class="creatediv">
        <form action="" method="POST">  
            <input name="title" id="inputtitle" type="text" placeholder="Title Here" required>

            <input name="shortdesc" id="inputdesc" type="text" placeholder="Short Description" required>

            <input name="email" id="inputemail" type="email" placeholder="Your email must be filled" required>

            <input name="nama" id="inputname" type="text" placeholder="Your name" required>


            
            <button name="tambah" type="submit" >Create!</button>

            <br>

            <textarea name="textblog" id="textblog" cols="0" rows="24" placeholder="Write you idea here!" required></textarea>
        </form>
    </div>

    <div class="container3">
        <div class="content3">
            <img src="../src-pic/logoblog.png" alt="Logo Blog">
            <a href="https://github.com/"><i class="fa-brands fa-github"></i> My Github</a>
            <a rel="noopener" target="_blank" href="https://www.instagram.com/danielmw101/?hl=id&theme=dark"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
    </div>

</body>
</html>