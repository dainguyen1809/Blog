<?php

$conn = mysqli_connect('localhost', 'root', '', 'blog');

$check = mysqli_error($conn);

// if($check){
//     die($check);
// } else {
//     echo 'connection success !';
// }