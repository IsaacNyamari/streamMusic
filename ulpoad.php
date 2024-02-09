<?php
require "./connect.php";
session_start();
$artist_id = $_SESSION['artist_id'];
if (isset($_REQUEST['submit']) && !empty($_FILES['photo']['name']) && !empty($_FILES['audio']['name'])) {
    $imgUpload = "albumArts/" . $_FILES['photo']['name'];
    $audioUpload = "audio/" . $_FILES['audio']['name'];
    $audioName = $_FILES['audio']['name'];
    $genre = $_REQUEST['submit'];
    $posterName = $_FILES['photo']['name'];
    $genre = $_REQUEST['genre'];
    if (!file_exists("$imgUpload") && !file_exists($audioUpload) && !empty($genre)) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $imgUpload) && move_uploaded_file($_FILES['audio']['tmp_name'], $audioUpload)) {
            // add to database
            $stmt = mysqli_prepare($conn, "INSERT INTO `music`
            (`artist_id`, `music_poster`, `music_name`, `genre`) 
            VALUES (?,?,?,?)");
            mysqli_stmt_bind_param($stmt, "ssss", $artist_id, $posterName, $audioName, $genre);
            if (mysqli_stmt_execute($stmt)) {
                setcookie("success", "Uploaded successfully!", time() + 5);
                header("location:./artists/add-song.php");
            }
        } else {
            setcookie("error_uploading", "Error uploading file!", time() + 5);
            header("location:./artists/add-song.php");
        }
    } else {
        setcookie("file_exists", "File already exists!", time() + 5);
        header("location:./artists/add-song.php");
    }
}
