<?php
require '../config/connect.php';

$id = $_POST['id'];

$sql = "delete from news where id = '$id'";

mysqli_query($conn, $sql);

$check = mysqli_error($conn);
if($check){
    die($check);
} else{
    header('location: ../index.php');
}

mysqli_close($conn);