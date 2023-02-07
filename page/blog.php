<?php
require 'koneksi.php';

$tampil = query("SELECT * FROM theblog");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Von Ziel Blog</title>
    <meta name="google-site-verification" content="4rB2NW_s__DDbAg02hK4SZ9h3TCvA6bB_EfLXOZi3Bo" />
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

    <div class="kumpulbox">
        <?php
        foreach($tampil as $bobo) : 
        $randomAkl = $bobo['akl'];
        $randomkmbj = $bobo['kmBj'];
        $myurl = "akl=" . $randomAkl . "&" . "kmbj=" . $randomkmbj;
        ?>
        
        <div class="box">
            <div class="tempatgambar">
                <a title="Delete this blog" href="hapusblog.php?<?php echo $myurl; ?>" onclick="confirmdelete()"><i
                        class="fa-solid fa-trash"></i></a>
                        
                <a title="Edit this blog" href="editblog.php?akl=<?php echo $bobo['akl']?>" onclick="confirmdelete()"><i id="iakhir" class="fa-solid fa-pen"></i></a>
            </div>
            <img id="coverimg" src="<?php echo $bobo['theimage']; ?>" alt="Thumbnail Blog">
            
            <div class="infobox">
                <h1 id="title"><a href="tampilblog.php?<?php echo $myurl; ?>"><?php echo $bobo["title"]?></a></h1>
                <p id="desc" style="font-weight: 500; font-size: 100%; margin: 10px; margin-bottom: 0;">
                    <?php echo $bobo["shortdesc"]?></p>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <div class="container3">
        <div class="content3">
            <img src="../src-pic/logoblog.png" alt="Logo Blog">
            <a rel="noopener" target="_blank" href="https://github.com/"><i class="fa-brands fa-github"></i> My
                Github</a>
            <a rel="noopener" target="_blank" href="https://www.instagram.com/danielmw101/?hl=id&theme=dark"><i
                    class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
    </div>
</body>

</html>