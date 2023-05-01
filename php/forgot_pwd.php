<html>
<head>
    <title>Forgot Password</title>    
</head>
<?php include_once "mail_style.php"; ?>
<body>
    <section>
        <div class="login-box">
            <form action="send_mail.php">
                <h2>Modifica Password</h2><br>
                <h4>Alla mail che inserirai verra' mandato un link <br>dal quale poter modificare la propria password</h4>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label> Inserisci la mail</label>
                </div>
                <button type="submit">Invia</button>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>