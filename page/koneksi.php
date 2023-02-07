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

function randomString($length = 20) {
	// Set the chars
	$chars='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // gk boleh ada sepcial character

	// Count the total chars
	$totalChars = strlen($chars);

	// Get the total repeat
	$totalRepeat = ceil($length/$totalChars);

	// Repeat the string
	$repeatString = str_repeat($chars, $totalRepeat);

	// Shuffle the string result
	$shuffleString = str_shuffle($repeatString);

	// get the result random string
    return substr($shuffleString,1,$length);
}

function randomkbmj($length = 45) {
	// Set the chars
	$chars='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // gk boleh ada sepcial character

	// Count the total chars
	$totalChars = strlen($chars);

	// Get the total repeat
	$totalRepeat = ceil($length/$totalChars);

	// Repeat the string
	$repeatString = str_repeat($chars, $totalRepeat);

	// Shuffle the string result
	$shuffleString = str_shuffle($repeatString);

	// get the result random string
    return substr($shuffleString,1,$length);
}


function tambah($data){
    global $conn;

    $rand = randomString();
    $rand2 = randomkbmj();

    $title = htmlspecialchars($data["title"]);
    $shortdesc = htmlspecialchars($data["shortdesc"]);
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $textblog = htmlspecialchars($data["textblog"]);
    $mypw = htmlspecialchars($data["mypw"]);
    $date = date("y-m-d");
    $randomid = htmlspecialchars($rand);
    $kmbj = htmlspecialchars($rand2);

    $theimage = htmlspecialchars($data["image"]);
    if (empty($theimage)) {
        $theimage = "https://gmedia.net.id/upload/foto_artikel/20201016PUvWwGZWkW.png";
    } else {
        $theimage = htmlspecialchars($data["image"]);
    }


    $query = "INSERT INTO theblog VALUES('', '$title', '$shortdesc', '$email', '$nama', '$textblog', '$date', '$mypw', '$randomid', '$kmbj', '$theimage')";

    mysqli_query($conn, $query);

    $check = mysqli_affected_rows($conn);

    if ($check > 0){
        echo "
        <script>
        alert('The article was successfully uploaded with the title $title');
        // document.location.href = 'blog.php';
        window.history.go(-2);
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