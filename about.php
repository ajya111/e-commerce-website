<?php
require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All Products - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="style/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(0);
        }
    }

    .animate-image {
        animation: slideIn 1s ease-in-out;
    }
</style>

</head>
<body>


    
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png.jpg" width="125px">
    
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php">cart</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" 
            onclick="menutoggle()">
    
        </div>
        
    </div>


<!----------------- about-page ------------------>

<div class="container">
   
    <div class="row">
        <div class="col-2">
            <h1>Aarshiya automobiles and spare parts</h1>
            <p>"Believe in the power of your dreams, take bold actions<br> and let your faith
                 become the gateway to turning possibilities into reality."</p> 
                 <a href="" class="btn">Explore Now &#xbb;</a>

        </div>
        <div class="col-2">
            <img src="images/image1.jpg" class="animate-image">
            
        </div>
    </div>
    <section class="about-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/about4.png">
                <h2>TVS Raider launched in 2022<br>Available in our showroom.</h2>
                <p>The TVS Raider boasts advanced features, including a fully digital 
                    instrument cluster that provides all the necessary information at a glance.
                    It also comes equipped with LED lighting, ensuring clear visibility and enhancing the bike's modern appeal. 
                    The bike's comfortable seating position and well-designed ergonomics make long rides 
                    a breeze, while its robust suspension system absorbs bumps and keeps the ride smooth.</p>
                    <br>
                    <p>Safety is a top priority on the TVS Raider. It is equipped with disc brakes on both the
                         front and rear wheels, providing excellent stopping power and enhanced control. Additionally,
                         it features advanced technologies like ABS (Anti-lock Braking System) to ensure stable and secure
                          braking in any situation.</p>


                          <div class="comment-box">
                            <h3>Leave a comment</h3>
                            <form class="'comment-form">
                                <input type="text" placeholder="Enter Name">
                                <input type="text" placeholder="Enter Email">
                                <textarea  rows="5" placeholder="your comment"></textarea>
                                <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                            </form> 

                          </div>
            </div>
            <div class="blog-right">
                <h3>post categories</h3>
                <div>
                    <span>Wego</span>
                    <span>2021</span>
                </div>
                <div>
                    <span>Ntorq</span>
                    <span>2019</span>
                </div>
                <div>
                    <span>Apache</span>
                    <span>2002</span>
                </div><div>
                    <span>RR310</span>
                    <span>2010</span>
                </div>
            </div>
        </div>

    </section>
</div>



<!------------- testimonial ------>
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The TVS NTorq scooter is a stylish and feature-packed two-wheeler that 
                    offers a thrilling riding experience.<br> Designed for urban commuters and young 
                    riders, the NTorq stands out with its bold and sporty design, showcasing sharp lines, 
                    vibrant colors, and futuristic aesthetics.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o"></i> 
                </div>
                <img src="images/user-1.png">
                <h3>Soni gautam</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The TVS NTorq scooter is a stylish and feature-packed two-wheeler that 
                    offers a thrilling riding experience.<br> Designed for urban commuters and young 
                    riders, the NTorq stands out with its bold and sporty design, showcasing sharp lines, 
                    vibrant colors, and futuristic aesthetics.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-half-o"></i> 
                </div>
                <img src="images/user-2.png">
                <h3>Prabesh Thapa</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The TVS NTorq scooter is a stylish and feature-packed two-wheeler that 
                    offers a thrilling riding experience.<br> Designed for urban commuters and young 
                    riders, the NTorq stands out with its bold and sporty design, showcasing sharp lines, 
                    vibrant colors, and futuristic aesthetics.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"></i> 
                </div>
                <img src="images/user-3.png">
                <h3>Anisha Nepali</h3>
            </div>
        </div>
    </div>
</div>



<!----------------- Footer ---------------------->
  

<div class="footer">
    <div class="containter">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our app</h3>
                <p>Download app for android and ios mobile.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/logo.png.jpg">
                <p> Our purpose is to design, manufacture, and distribute vehicles that meet the transportation
                     needs of individuals<br> and businesses, providing convenience, mobility, and
                      transportation solutions.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog post</li>
                    <li>Return policy</li>
                    <li>Join affiliates</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Tiktok</li>
                </ul>
            </div>

        </div>

        <hr>
        <p class="mywebsite">Self-created Website by Ajya Gotame.</p>
    </div>
</div>
<!----------- js for toggle menu ------------->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>

<!----------------js for toggle Form-------->

<script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function Register(){

        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function Login(){

        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>



</body>
</html>