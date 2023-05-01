<?php
session_start();
include "db_conn.php";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "<script>alert("$password");</script>"
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email' AND pwd ='$password'");
    $row = mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql)==1)
    {
        $temp=$row['id'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        header("Location:index.php");
    }
    else
    {
        session_destroy();
        echo "<script> alert('Nome utente non trovato'); </script>";
        header("Location:../login.php");
    }
}
?>