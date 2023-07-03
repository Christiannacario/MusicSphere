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
        <div class="form-box register">
                <h2>Registra<span>tion</span></h2>
                <form action="register.php" method="post">
                <?php include('errors.php')?>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="email"></ion-icon></span>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password1">
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password2">
                        <label>Confirm Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    </div>
                    
                    <button type="submit" name="reg_user" class="btn-form">Register</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="login.php" class="login-link">Login</a></p>
                    </div>
                </form>
         </div>
    </div>
</div>
    <div id="preloader"></div>

    <script src="index.js"></script>
</body>
</html>