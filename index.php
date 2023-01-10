<?php
require 'page/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Von Ziel</title>
    <link rel="icon" href="src-pic/coverblog.png">
    <link rel="stylesheet" href="style.css">
    <script src="page/page.js"></script>
    <script src="https://kit.fontawesome.com/c9a949b192.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
    <!-- sass --watch page1.scss style.css klik ini dulu setiap kali buka vscode--> 
    <div class="navbar">
        <label for="check">
            <img src="src-pic/logoblog.png" alt="Logo Blog" onclick="rotatearrow()">
            <i id="kuncinav" class="fa-solid fa-chevron-right" onclick="rotatearrow()"></i>
        </label>

        <input type="checkbox" id="check" name="check">
        
        <ul>
            <li id="firstlist"><a href="">Home</a></li>
            <li><a href="page/blog.php">Blog</a></li>
            <li id="lastlist"><a href="page/createnew.php">Write New</a></li>
        </ul>
    </div>

    <div class="kotakgambar">
        <div class="thumbnail">
            <img src="src-pic/coverblog.png" alt="Symbol Blog">
            
            <p>Hello everyone, I am a young man who is in his first semester of college majoring in Information Technology. I decided to create this personal blog to share my experiences and achievements while studying in college. Here, you will find various articles about my college life, including assignments, projects, and other activities that I do. Apart from that, I will also share tips and tricks that I have applied during my studies. Thank you for visiting my blog, I hope the writings that I present can be useful for those of you who are currently in college or just want to know more about college life.</p>
        </div>
    </div>
    
    <div class="container1">

        
        <?php $counter = 0; while($bro = mysqli_fetch_assoc($result)) : ?>
        <div class="box">
            <img src="https://gmedia.net.id/upload/foto_artikel/20201016PUvWwGZWkW.png" alt="Thumbnail Blog">

            <div class="infobox">
                <h1><a href="page/tampilblog.php?id=<?php echo $bro['id']?>"><?php echo $bro["title"]?></a></h1>
                <p><?php echo $bro["shortdesc"]?></p>
            </div>
        </div>
        <?php
        $counter++;
        if($counter == 3){
            break;
        }
        ?>
        <?php endwhile; ?>
    </div>

    <div class="container2">
        <div class="content2">
            If you like writing and want to share your knowledge, experiences or hobbies with others, why not create a blog? By having a blog, you can express yourself and share what you love with others online. Apart from that, blogging can also be a fun way to develop writing and communication skills. Let's start creating your blog right now!
        </div>
    </div>

    <div class="container3">
        <div class="content3">
            <img src="src-pic/logoblog.png" alt="Logo Blog">
            <a href="https://github.com/"><i class="fa-brands fa-github"></i> My Github</a>
            <a rel="noopener" target="_blank" href="https://www.instagram.com/danielmw101/?hl=id&theme=dark"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
    </div>

</body>
</html>