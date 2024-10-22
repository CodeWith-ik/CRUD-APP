<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Your connection is failed " . mysqli_error($conn));
}

else{
    // echo '<script>alert("your connection is successfully");</script>';
}





?>