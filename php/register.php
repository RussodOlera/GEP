<html>
<head>
    <title>Registration</title>    
</head>
<?php include_once "register_style.php"; ?>
<body>
    <section>
        <div class="register-box">
            <form action="new_user.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Registration</h2>
                <div class="input-box">
                    <input type="text" name="name" required>
                    <label> Nome</label>
                </div>
                <div class="input-box">
                    <input type="text" name="surname" required>
                    <label> Cognome</label>
                </div>
                
                <div class="input-box">                    
                    <input type="text" name="tel" required>
                    <label> N. Cellulare</label>
                </div>
                <div class="input-box">                    
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">                    
                    <input type="password" name="pwd" required>
                    <label>Password</label>
                </div>
                <button type="submit" name="submit">Register</button>
                <div class="login-link">
                    <p>Hai gia un account?<a href="../login.php">Accedi</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>