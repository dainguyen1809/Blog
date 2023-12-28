<?php

include '../config/connect.php';

$title = $_POST["title"];
$content = $_POST["content"];
$photos = $_POST["photos"];
$date = $_POST["date"];


$sql = "insert into news(title, content, photos,date)
values('$title', '$content', '$photos','$date')";


mysqli_query($conn, $sql);
mysqli_close($conn);