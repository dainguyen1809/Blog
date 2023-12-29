<?php

require '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$photos = $_POST['photos'];
$date = $_POST['date'];

$sql = "update news
set
title = '$title',
content = '$content',
photos = '$photos',
date = '$date'
where
id = '$id'";

mysqli_query($conn, $sql);

$check = mysqli_error($conn);
if($check){
    die($check);
} else{
    header('location: ../index.php');
}

mysqli_close($conn);