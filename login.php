<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div id="header">
        <div class="container">
            <nav>
                <h3 class="logo">Music<span>Sphere</span></h3>
            </nav>
            <div class="header-text">
                <h1>Your sound, your world<br> Stream it all with us.</h1>
                <p>Pop & Rock Music</p>
            </div>
        </div>
    <div class="wrapper">
    <div class="form-box login">
                <h2>Log<span>in</span></h2>
                <form action="login.php" method="post">
                 <?php include('errors.php')?>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="text" name="username">
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password">
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <!-- <a href="#">Forgot Password?</a> -->
                    </div>
                    <button type="submit" name="login_user" class="btn-form">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="register.php" class="register-link">Registers</a></p>
                    </div>
                </form>
         </div>
    </div>
</div>
    <div id="preloader"></div>

    <script src="index.js"></script>
</body>
</html>