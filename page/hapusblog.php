<?php
require 'koneksi.php';


if(isset($_POST["delete"])){
    $theemail = htmlspecialchars($_POST["email"]);
    $thepassword = htmlspecialchars($_POST["password"]);
    $id = $_POST["id"];

    $konfirmasihapus = mysqli_query($conn, "SELECT email, mypw FROM theblog WHERE akl = '$id'");
    $yakinhapus = mysqli_fetch_assoc($konfirmasihapus);
    $kodephpemail = $yakinhapus["email"];
    $kodephpmypw = $yakinhapus["mypw"];

    if ($kodephpemail == $theemail && $kodephpmypw == $thepassword){
        mysqli_query($conn, "DELETE FROM theblog WHERE akl = '$id'");
        echo "<script>
        window.history.go(-2);
        alert('Successfully Delete');
        </script>";
    }
    else if ($kodephpemail != $theemail){
        echo "<script>
        // alert('Cannot delete blog because the email you entered does not match the author of this blog');
        </script>";
    }

    else if($kodephpmypw != $thepassword){
        echo "<script>
        window.history.go(-2);
        // alert('Cannot delete blog because the password you entered does not match the author of this blog');
        </script>";
    }
    
    else{
        echo "<script>
        window.history.go(-2);
        alert('Cannot delete blog because the DATA that you entered does not match the author of this blog');
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
    <title>Von Ziel</title>
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
        <form action="hapusblog.php" method="POST">
            <input style="margin-bottom: 0;" type="text" placeholder="your email" name="email" id="email">
            
            <input style="text-align: center; border: none; padding: 20px; border-radius: 30px; margin: 30px 10px; width: 85%;" name="password" id="password" placeholder="Your Password">

            <p style="text-align: center; font-style: italic; font-size: 15px; margin-bottom: 20px; margin-top: 10px;">
                This
                action cannot be undone!</p>
            <input id="id" name="id" type="text" value="<?php echo $_GET["akl"];?>" placeholder="id blog">

            <button type="submit" name="delete">Delete</button>
        </form>
    </div>
</body>

</html>