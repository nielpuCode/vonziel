<?php
$conn = mysqli_connect("localhost", "root", "", "vonziel");
$result = mysqli_query($conn, "SELECT * FROM theblog");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($bobo = mysqli_fetch_assoc($result)){
        $rows[] = $bobo;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    $title = htmlspecialchars($data["title"]);
    $shortdesc = htmlspecialchars($data["shortdesc"]);
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $textblog = htmlspecialchars($data["textblog"]);
    $date = date("y-m-d");


    $query = "insert into theblog values('', '$title', '$shortdesc', '$email', '$nama', '$textblog', '$date')";

    mysqli_query($conn, $query);

    $check = mysqli_affected_rows($conn);

    if($check > 0){
        echo "
        <script>
        alert('The article was successfully uploaded with the title $title');
        document.location.href = 'blog.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Post failed to upload. Try again a few moments later');
        </script>
        ";
    }
}
?>