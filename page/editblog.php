<?php
$conn = mysqli_connect("localhost", "root", "", "vonziel");

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM theblog WHERE id=$id");
$bobo = mysqli_fetch_assoc($result);

if(isset($_POST["edit"])){
    $theid = $_GET["id"];
    $theemail = htmlspecialchars($_POST["theemail"]);
    $thepassword = htmlspecialchars($_POST["password"]);

    $konfirmasihapus = mysqli_query($conn, "SELECT email, mypw FROM theblog WHERE id=$theid");
    $yakinhapus = mysqli_fetch_assoc($konfirmasihapus);
    $kodephpemail = $yakinhapus["email"];
    $kodephpmypw = $yakinhapus["mypw"];

    $data = $_POST;
    if ($kodephpemail == $theemail && $kodephpmypw == $thepassword){
        $title = htmlspecialchars($data["title"]);
        $shortdesc = htmlspecialchars($data["shortdesc"]);
        $email = htmlspecialchars($data["email"]);
        $nama = htmlspecialchars($data["nama"]);
        $textblog = htmlspecialchars($data["textblog"]);
        $date = date("y-m-d");
        $mypw = htmlspecialchars($data["mypw"]);
    
        $query = "UPDATE theblog SET title='$title', shortdesc='$shortdesc', email='$email', nama='$nama', textblog='$textblog', tanggalnulis='$date', mypw='$mypw' WHERE id=$theid";
    
        mysqli_query($conn, $query);
    
        $check = mysqli_affected_rows($conn);
    
        if($check > 0){
            echo "
            <script>
            alert('The article was successfully Updated with the title $title');
            document.location.href = 'blog.php';
            </script>
            ";
        }else{
            echo "
            <script>
            alert('Post failed to Update. Try again a few moments later');
            </script>
            ";
        }
    }
    else{
        echo "<script>
        document.location.href = 'blog.php';
        alert('Cannot delete blog because the email you entered does not match the author of this blog');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
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

    <div class="editblog">
        <form action="" method="POST">  
            <input name="title" id="inputtitle" type="text" placeholder="Title Here" required value="<?php echo $bobo['title']; ?>">

            <input name="shortdesc" id="inputdesc" type="text" placeholder="Short Description" required value="<?php echo $bobo['shortdesc']; ?>">

            <input name="email" id="inputemail" type="email" placeholder="Your email must be filled" required value="<?php echo $bobo['email']; ?>">

            <input name="nama" id="inputname" type="text" placeholder="Your name" required value="<?php echo $bobo['nama']; ?>">

            <input name="mypw" id="mypw" type="text" placeholder="Create password here" required value="<?php echo $bobo['mypw']; ?>">
            
            <button name="edit" type="submit" >Change!</button>

            <br>

            <textarea name="textblog" id="textblog" cols="0" rows="24" placeholder="Write you idea here!" required><?php echo $bobo['textblog']; ?></textarea>


            <input style="margin-bottom: 0;" type="text" placeholder="your email" name="theemail" id="email">
            
            <input name="password" id="password" placeholder="Your Password">

            <p style="text-align: center; font-style: italic; font-size: 15px; margin-bottom: 20px; margin-top: 10px;">Just to make sure that this is you who take action!</p>

            <input id="thisid" name="id" type="text" value="<?php echo $_GET["id"];?>" placeholder="id blog">
        </form>
    </div>

    
</body>
</html>