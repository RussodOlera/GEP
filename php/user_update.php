<?php
    include "db_conn.php";
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $n_tel = $_POST['tel'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];

        $sql = mysqli_query($conn, "UPDATE `users` SET `nome`='$name',`cognome`='$surname',`tel`='$n_tel',`email`='$email',`pwd`='$password' WHERE id=$id");
        header("Location: index.php?msg=Utente modificato correttamente!");
    }
    
        //
    
?>


<html>
<head>
    <title>Registration</title>    
</head>
<?php include_once "register_style.php"; ?>
<body>
    <section>
        <div class="register-box">
            <?php
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = $id LIMIT 1");
                $row = mysqli_fetch_assoc($sql);
            ?>
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Update</h2>
                <div class="input-box">
                    <input type="text" name="name" value="<?php echo $row['nome']?> " required>
                    <label> Nome</label>
                </div>
                <div class="input-box">
                    <input type="text" name="surname" value="<?php echo $row['cognome']?>" required>
                    <label> Cognome</label>
                </div>
                
                <div class="input-box">                    
                    <input type="text" name="tel" value="<?php echo $row['tel']?>" required>
                    <label> N. Cellulare</label>
                </div>
                <div class="input-box">                    
                    <input type="email" name="email" value="<?php echo $row['email']?>" required>
                    <label>Email</label>
                </div>
                <div class="input-box">                    
                    <input type="password" name="pwd" value="<?php echo $row['pwd']?>" required>
                    <label>Password</label>
                </div>
                <button type="submit" name="submit">Confirm</button><br><br>
                <button type="submit" name="exit" action="index.php" >Cancel</button>
            </form>
        </div>
    </section>
</body>
</html>