<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My favorite Music Artist</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c1b34cd368.js" crossorigin=”anonymous”></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <h3 class="logo">My<span>Music</span></h3>
                <ul id="sidemenu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#Artist">Artist</a></li>
                    <li><a href="#">Album</a></li>
                    <li><a href="#">About Us</a></li>
                    <!-- <i class="fas fa-times" onclick="closemenu()"></i> -->
                </ul>
                <a href="#" class="btn-login">Logout</a>
                <!-- <i class="fas fa-bars" onclick="openmenu()"></i> -->
            </nav>
            <div class="header-text">
                <h1>Be part of Music</h1>
                <p>Pop & Rock Music</p>
            </div>
            <img src="../images/New Project 87 [119A850].png" class="logopic">
        </div>

        <!-- <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>Log<span>in</span></h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn-form">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Registers</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>Registra<span>tion</span></h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="btn-form">Register</button>
                    <div class="login-register">
                        <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div> -->

    </div>

    <!-- ----Login/registerform--- -->

    

    <!-- -----artist-- -->

    <div id="Artist">
        <div class="container">
            <h1 class="sub-title">Al<Span>bum</Span></h1>
            <div class="artist-list">
                <div class="singer">
                    <img src="../images/img1.jpeg" >
                    <div class="layer">
                        <h3>Weeknd</h3>
                        <h4>Stream</h4>
                        <a href="#"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="singer">
                    <img src="../images/img4.jpeg" >
                    <div class="layer">
                        <h3>Post Malone</h3>
                        <h4>Stream</h4>
                        <a href="../proj file/album website/index1.html"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="singer">
                    <img src="../images/TOPimg.png" >
                    <div class="layer">
                        <h3>Twenty One Pilots</h3>
                        <h4>Stream</h4>
                        <a href="#"><i class="fa-solid fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- ---album---- -->

    <div id="album-song">
        <div class="container">
            <div class="row">
                <h1 class="sub-title">Art<Span>ist</Span></h1>
                <div class="card">
                    <img src="../images/img5.png" class="card-album">
                    <h2>Week<span>nd</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cupiditate amet exercitationem illo est architecto recusandae eos, aperiam earum illum.</p>
                </div>
                <div class="card">
                    <img src="../images/PMimg.png" class="card-album" height="325px">
                    <h2>Post Ma<span>lone</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cupiditate amet exercitationem illo est architecto recusandae eos, aperiam earum illum.</p>
                </div>
                <div class="card">
                    <img src="../images/TOPimg2.png" class="card-album" height="320px">
                    <h2>Twenty One Pi<span>lots</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur cupiditate amet exercitationem illo est architecto recusandae eos, aperiam earum illum.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="container">
            <h1 class="sub-title">Songs <span>Album</span></h1>
            <div class="album-list">
                <div class="singer">
                    <img src="../images/img5.png" >
                    <div class="layer">
                        <h3>Weeknd</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga, officiis impedit porro nulla pariatur quia magni culpa cupiditate neque.</p>
                        <a href="../proj file/album website/index1.html"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="singer">
                    <img src="../images/img4.jpeg" >
                    <div class="layer">
                        <h3>Weeknd</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga, officiis impedit porro nulla pariatur quia magni culpa cupiditate neque.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <div class="singer">
                    <img src="../images/img7.jpeg" >
                    <div class="layer">
                        <h3>Weeknd</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga, officiis impedit porro nulla pariatur quia magni culpa cupiditate neque.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </div> -->

    <div id="About-Us">
         <div class="container">
                <div class="row1">
                        <div class="about-col-1">
                            <img src="../images/img10.jpg">
                        </div>
                        <div class="about-col-2">
                            <h1 class="sub-title">About <span>Us</span></h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates consequatur, est possimus animi qui, quaerat laboriosam perferendis veniam ex sit ea maxime modi, totam consequuntur repellat cum eos odio impedit? Iure molestiae exercitationem consequuntur quisquam nobis odio obcaecati consectetur, numquam dolorem nemo quia quo laboriosam dolore error perspiciatis suscipit. Porro.</p>
                            <a href="#" class="btn-learn">Learn More</a>
                        </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="index.js"></script>
</body>
</html>