<html>
<head>
    <title>Login</title>    
</head>
<?php include_once "php/login_style.php"; ?>
<body>
    <section>
        <div class="login-box">
            <form action="php/access.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label> Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-frogot">
                    <label><input type="checkbox">Ricordami</label>
                    <a href="php/forgot_pwd.php">Password dimenticata?</a>
                </div>
                <button type="submit" name="submit">Login</button>
                <div class="register-link">
                    <p>Non hai un account?<a href="php/register.php">Registrati</a></p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>