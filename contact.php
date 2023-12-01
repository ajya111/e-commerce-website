<?php
require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact us - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet"  type="text/css" href="style/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    
    <div class="container3">
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
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    
        </div>
        
    </div>

    <!----------contact details-------->
    <section class="contact2">
        <img src="images/bg.jpg" alt="">
        <div class="content2">
            <h2>Contact us</h2>
            <p>Aarshiya Automobile and Spare Parts: Your Trusted TVS Authorized Dealer<br>

                At Aarshiya Automobile and Spare Parts, we take pride in being your trusted authorized dealer for TVS two-wheelers.
                 With a rich history and a commitment to excellence, TVS has established itself as a leading manufacturer of motorcycles and scooters, 
                 renowned for their quality, reliability, and innovative features.
                
                As an authorized dealer, we offer an extensive range of TVS two-wheelers that cater to various needs and preferences. 
                Whether you're looking for a stylish scooter like the TVS Jupiter or a powerful motorcycle like the TVS Apache, we have the perfect ride for you. 
                Our knowledgeable and friendly sales team is dedicated to helping you find the ideal TVS model that suits your requirements.</p>

        </div>
        <div class="container2">
            <div class="ContactInfo">
                <div class="box2">
                    <div class="icon2"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text2">
                            <h3>Address</h3>
                            <p>Ga.Na.Pa-06 ,Baglung, naubishe chowk.</p>
                        </div>
                    
                </div>
                <div class="box2">
                    <div class="icon2"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text2">
                            <h3>phone</h3>
                            <p>9847668683,9749396538</p>
                        </div>
                    
                </div>
                <div class="box2">
                    <div class="icon2"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text2">
                            <h3>Email</h3>
                            <p>aarshiyaautomobile@gmail.com</p>
                        </div>
                    
                </div>

            </div>
            <div class="ContactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox5">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox5">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox5">
                        <textarea required="required"></textarea>
                        <span>please type your message</span>
                    </div>
                    <div class="inputBox5">
                       <input type="Submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>

    </section>

    

   
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



</body>
</html>