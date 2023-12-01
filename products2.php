
<?php
require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Products2 - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="style/products2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    
        </div>
        
    </div>




    <section class="about-content1">
    <div class="row1">
            <div class="blog-left">
                <img src="images/wego2.png">
                <h2>TVS Wego Available in our showroom.</h2>
                </div>

             <div class="small-container">
             <div class="row2">
                <h2>Wego scooter parts</h2>
               <select>
                 <option>Default Sorting</option>
                 <option>Sort by price</option>
                 <option>Sort by popularity</option>
                 <option>Sort by rating</option>
                 <option>Sort by sale</option>
                </select>
            </div>
             




  
             <div class="row">
             <div class="col-4">
               <img src="images/wegoheadlight.png">
               <h4>TVS Wego full-LED headlight</h4>
               <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 4020.35</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegometer.png">
            <h4>TVS Wego<br> digital meter</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 6532.26</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegofrontvisor.png">
            <h4>TVS Wego<br> front visor</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 3250.05</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegosidetrimpanel.png">
            <h4> Wego side trim<br> panel</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 2425.65</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
    </div>
   
    
    <div class="row">
        <div class="col-4">
            <img src="images/wegomirror.png">
            <h4>TVS Wego mirror</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 8750.15</p>
            <a href="cart.php" class="btn">Add to cart&#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegocomfortablesit.png">
            <h4>TVS Wego comfortable sit</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 6532.26</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegomotorguard.png">
            <h4>TVS Wego Motor guard</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 2595.85</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/wegobrakelight.png">
            <h4>TVS Wego-barke light</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 3570.45</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="images/wegositcover.png">
                <h4>TVS Wego sit cover</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i> 
                </div>
                <p>Rs 700.35</p>
                <a href="cart.php" class="btn">Add to cart &#xbb;</a>
            </div>
            <div class="col-4">
                <img src="images/wegoheadvisor.png">
                <h4>TVS Wego head visor</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i> 
                </div>
                <p>Rs 3745.06</p>
                <a href="cart.php" class="btn">Add to cart &#xbb;</a>
            </div>
            <div class="col-4">
                <img src="images/wegotire.png">
                <h4>TVS tire for wego</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-half-o"></i> 
                </div>
                <p>Rs 11,595.05</p>
                <a href="cart.php" class="btn">Add to cart &#xbb;</a>
            </div>
            <div class="col-4">
                <img src="images/product-12.png.jpg">
                <h4>TVS Wego silensor</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i> 
                </div>
                <p>Rs 9,760.85</p>
                <a href="cart.php" class="btn">Add to cart &#xbb;</a>
            </div>
        </div>


    </div>


    <?php
// Establish database connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="small-container">'; // Open the small container
    
    echo '<div class="row">'; // Open the row
    
    // Loop through each product and display the information
    while ($row = $result->fetch_assoc()) {
        $productImage = $row["productimage"];
        $productName = $row["productname"];
        $rating = $row["ratings"];
        $price = $row["price"];

        // Generate HTML code for each product
        echo '
        <div class="col-4">
            <div class="product">
                <img src="images/' . $productImage . '" alt="' . $productName . '">
                <h4>' . $productName . '</h4>
                <div class="ratings">';
        
        // Generate stars based on the rating
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                echo '<i class="fa fa-star"></i>';
            } else {
                echo '<i class="fa fa-star-o"></i>';
            }
        }
        
        echo '
                </div>
                <p>Rs ' . $price . '</p>
                <a href="cart.php" class="btn">Add to cart &#xbb;</a>
            </div>
        </div>';
    }
    
    echo '</div>'; // Close the row
    echo '</div>'; // Close the small container
} else {
    echo "No products found";
}

// Close the database connection
$conn->close();
?>


    <div class="page-btn">
        <span> <a href="products.php">1</a></span>
        <span><a href="products2.php">2</a></span>
        <span><a href="products3.php">3</a></span>
        <span><a href="products4.php">4</a></span>
        <span>&#x2192;</span>
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
</body>
</html>