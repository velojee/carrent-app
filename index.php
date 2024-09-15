<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentcar Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/login.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" class="form" action="login.php" method="post">
            <h2>LOGIN</h2>
            <div class="form-control">
            <!--Notifikasi Error-->

            <!--username form input-->
            <label>username</label><br>
            <input id='username' class="input" type="text" name="username" placeholder="nama pengguna" ><br>
    
            <!--password form input-->
            <br><br><label>passoword</label><br>
            <input id="password" class="input" type="password" name="password" placeholder="kata sandi" ><br>

            </div>
            <button type="submit" name="masuk">Masuk</button>
            
            <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            
        </form>
    </div>
</body>
</html>