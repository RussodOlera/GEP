<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dvr";

$conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
?>