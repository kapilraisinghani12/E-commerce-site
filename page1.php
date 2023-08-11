<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce Website Design Clone</title>
    <link rel="stylesheet" href="styles-mainpage.css">
    <link rel="stylesheet" href="styles-mainpage.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,500;0,600;0,700;1,200;1,300;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
    <div class="header">


        <div class="container">

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
            <!-- ---------------------end of header--------------------- -->
            <div class="row">
                <div class="col-2">
                    <h1>Give Yourself Something Better, <br> A New Style!</h1>
                    <p>Success is not the key to happiness. Happiness is the key to success. <br> If you love what you
                        are
                        doing, you will be successfull.
                        <b><em>Bring Success with Style.</em></b>
                    </p>
                    <a href="" class="btn">Explore Now &#8620;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png" alt="">
                </div>
            </div>

        </div>

    </div>




    <!-- --------------- features and categories-------------------- -->
    <div class="categories">
        <div class="small-container">

            <div class="row">
                <div class="col-3">
                    <img src="images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="images/category-3.jpg" alt="">
                </div>
            </div>

        </div>
    </div>

    <!-- ---------------------offer ends in ------------------ -->

    <div class="offersale">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <h3 class="offtg">Sale Ends In  </h3>
                 
                </div>
                <div class="col-2">
                    <div class="countdown-container">
                        <div class="countdown-box">
                            <span class="countdown-number" id="days"></span>
                            <span class="countdown-label">Days</span>
                        </div>
                        <div class="countdown-box">
                            <span class="countdown-number" id="hours"></span>
                            <span class="countdown-label">Hours</span>
                        </div>
                        <div class="countdown-box">
                            <span class="countdown-number" id="minutes"></span>
                            <span class="countdown-label">Mins</span>
                        </div>
                        <div class="countdown-box">
                            <span class="countdown-number" id="seconds"></span>
                            <span class="countdown-label">Sec</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- ---------------------featured products-------------- -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-1.jpg" alt="">
                <h4>Red Printed T-Shirt PUMA</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-2.jpg" alt="">
                <h4>Black Sports Shoes HrX (Mens)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$75.25</p>
            </div>
            <div class="col-4">
                <img src="images/product-3.jpg" alt="">
                <h4>Grey Sports Trousers For Men</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$60.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-4.jpg" alt="">
                <h4>Blue Polo T-Shirt For Men PUMA </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>
                <p>$90.99</p>
            </div>
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg" alt="">
                <h4>Grey Aesthetic Sneakers Lace Up Shoes(Unisex)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$599.99</p>
            </div>
            <div class="col-4">
                <img src="images/product-6.jpg" alt="">
                <h4>Black Sports T-Shirt PUMA (Mens)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$75.25</p>
            </div>
            <div class="col-4">
                <img src="images/product-7.jpg" alt="">
                <h4>Socks HrX - Set Of Three (Unisex)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>
                <p>$10.29</p>
            </div>
            <div class="col-4">
                <img src="images/product-8.jpg" alt="">
                <h4>FOSSIL Charcoal Mens Essentials Wrist Watch</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>

                </div>
                <p>$999.99</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg" alt="">
                <h4>Trendy Roadster-223 Unisex Watch (Sports Edition)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$199.98</p>
            </div>
            <div class="col-4">
                <img src="images/product-10.jpg" alt="">
                <h4>Black MotoSports Shoes HrX Special Edition for Men</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
                <p>$770.99</p>
            </div>
            <div class="col-4">
                <img src="images/product-11.jpg" alt="">
                <h4>Grey Sports Shoes For Men With SuperDry Technology (Laceless)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$160.09</p>
            </div>
            <div class="col-4">
                <img src="images/product-12.jpg" alt="">
                <h4>Black Nike Sports Trousers For Men (SE) </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>$45.99</p>
            </div>
        </div>
    </div>
    <!-- ----------------Offer------------ -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img" alt="">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on RedStore</p>
                    <h1>Smart Band 5</h1>
                    <small>Mi Smart Band 5 is the latest and biggest upgrade to the Mi Band series. It comes with a
                        large 2.79cm (1.1”) AMOLED colour-display, which gives you 20% more display area than the Mi
                        Smart Band 4. </small><br>
                    <a href="" class="btn">Buy Now &#8620;</a>
                </div>
            </div>
        </div>
    </div>




    <!-- -------------------Testimonial Section----------------- -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quos possimus facilis corporis</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>

                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>Jean Mary</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quos possimus facilis corporis</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>Aakash Kumar</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quos possimus facilis corporis</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>Alexa Martha</h3>
                </div>
            </div>
        </div>

        <!-- ----------------------------------brands---------------------------- -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-coca-cola.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-paypal.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png" alt="">
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
        <!-- ------------------js for countdown------------------- -->
        <script>
            // Set the date and time for the countdown
            var countDownDate = new Date("2023-06-21T00:00:00Z").getTime();

           
            var x = setInterval(function () {

                // Get the current date and time
                var now = new Date().getTime();

                // Calculate the distance between the current date and time and the countdown date and time
                var distance = countDownDate - now;

                // Calculate the days, hours, minutes, and seconds remaining in the countdown
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                
                document.getElementById("days").innerHTML = ('0' + days).slice(-2);
                document.getElementById("hours").innerHTML = ('0' + hours).slice(-2);
                document.getElementById("minutes").innerHTML = ('0' + minutes).slice(-2);
                document.getElementById("seconds").innerHTML = ('0' + seconds).slice(-2);

                // If the countdown is finished, display a message
                if (distance <= 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "Sale has ended!";
                }
            }, 1000);

        </script>


</body>

</html>