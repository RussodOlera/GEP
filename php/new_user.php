<?php
require "db_conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $n_tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($duplicate)>0)
    {
        echo "<script> alert('Username o Email già in uso'); </script>";
        header("Location:register.php");
    }
    else
    {
        $sql = "INSERT INTO users VALUES('','$name','$surname','$n_tel','$email','$password')";
        mysqli_query($conn, $sql);
        echo "<script> alert('Registration Successful!') </script>";
        header("Location:../login.php"); 
    }
}
else
{
    echo "Errore";
}
?>