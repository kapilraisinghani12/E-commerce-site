<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce Website Design Clone</title>
    <link rel="stylesheet" href="styles-loginpage.css">
    <link rel="stylesheet" href="styles-mainpage.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,200;1,300;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="page1.php"><img src="images/logo.png" alt="" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="page1.php">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </nav>
        <img src="images/cart.png" width="30px" height="30px" alt="">
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" width="30px" height="30px" alt="">
    </div>
    <!-- -------------account-page------------ -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="images/image1.png" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <!-- login  -->
                        <form id="LoginForm" action="">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot Password</a>
                        </form>
                        <!-- register  -->
                        <form id="RegForm" action="">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="password">
                          
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------------------footer------------------- -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>
                        Download Our App
                    </h3>
                    <p>Download App for Android and iOS.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png" alt="">
                        <img src="images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/logo-white.png" alt="">
                    <p>Our Purpose - To sustainably make the pleasure and benefits of sports accessible to the
                        common to make them exceptional .</p>
                </div>
                <div class="footer-col-3">
                    <h3>
                        Useful Links
                    </h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blogs</li>
                        <li>Policies</li>
                        <li>Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>
                        Follow us
                    </h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2023 - By Kapil Raisinghani</p>
        </div>
    </div>
    <!-- ----------------------js for toggle menu to make site responsive---------------------------- -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <!-- ---------------js for toggle form----------- -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";

        }

    </script>

</body>

</html>