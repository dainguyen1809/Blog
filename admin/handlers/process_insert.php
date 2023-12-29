<?php

require  '../config/connect.php';

$title = $_POST["title"];
$content = $_POST["content"];
$photos = $_POST["photos"];
$date = $_POST["date"];


$sql = "insert into news(title, content, photos, date)
values('$title', '$content', '$photos','$date')";


mysqli_query($conn, $sql);

$check = mysqli_error($conn);
if($check){
    die($check);
} else{
    header('location: ../index.php');
}

mysqli_close($conn);
