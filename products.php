<?php
require_once 'config.php';
session_start();

// Function to add a product to the cart
function addToCart($productId, $conn) {
    // Check if the product ID is valid
    if (!is_numeric($productId)) {
        echo "Invalid product ID!";
        return;
    }

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        echo "Please log in first.";
        return;
    }

    // Retrieve the product details from the products table
    $sql = "SELECT productname, productimage, price FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Store the result set on the client side
        $stmt->store_result();

        // Check if a product with the given ID exists
        if ($stmt->num_rows === 1) {
            // Get the results
            $stmt->bind_result($productName, $productImage, $price);

            // Fetch the data
            if ($stmt->fetch()) {
                // Close the first statement
                $stmt->close();

                // Add the product to the cart_items table
                $userId = $_SESSION['user_id'];
                $quantity = 1;
                $createdAt = date('Y-m-d H:i:s'); // Get the current date and time

                $sqlInsert = "INSERT INTO cart_items (user_id, product_id, productname, productimage, price, quantity, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmtInsert = $conn->prepare($sqlInsert);
                $stmtInsert->bind_param("iisssds", $userId, $productId, $productName, $productImage, $price, $quantity, $createdAt);

                // Execute the prepared statement to insert the product into cart_items
                if ($stmtInsert->execute()) {
                    echo "Product added to cart successfully!";
                } else {
                    echo "Failed to add the product to the cart: " . $stmtInsert->error;
                }

                // Close the second statement
                $stmtInsert->close();
            } else {
                echo "Product not found.";
            }
        } else {
            echo "Product not found.";
        }

        // Close the first statement
        $stmt->close();
    } else {
        echo "Error executing the SQL statement: " . $conn->error;
    }
}

// Check if the 'add_to_cart' parameter is set in the URL
if (isset($_GET['add_to_cart'])) {
    $productId = $_GET['add_to_cart'];
    addToCart($productId, $conn);
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All Products - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="style/products.css">
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

<div class="small-container">
    <div class="row row-2">
        <h2>Ntorq scooter parts</h2>
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
            <img src="images/product-1.png.jpg">
            <h4>TVS Ntorq 125 full-LED headlight</h4>
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
            <img src="images/product-2.png.jpg">
            <h4>TVS Ntorq 125<br> digital meter</h4>
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
            <img src="images/product-3.png.jpg">
            <h4>TVS Ntorq 125<br> front visor</h4>
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
            <img src="images/product-4.png.jpg">
            <h4>TVS Ntorq 125 side trim<br> panel</h4>
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
            <img src="images/product-5.png.jpg">
            <h4>TVS Ntorq 125 back full-visor</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-half-o" ></i>
                <i class="fa fa-star-o"></i> 
            </div>
            <p>Rs 8750.15</p>
            <a href="cart.php" class="btn">Add to cart &#xbb;</a>
        </div>
        <div class="col-4">
            <img src="images/product-6.png.jpg">
            <h4>TVS Ntorq 125 comfortable sit</h4>
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
            <img src="images/product-7.png.jpg">
            <h4>TVS Ntorq 125 Motor guard</h4>
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
            <img src="images/product-8.png.jpg">
            <h4>TVS Ntorq 125 DRL-barke light</h4>
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
                <img src="images/product-9.png.jpg">
                <h4>TVS Ntorq 125 sit cover</h4>
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
                <img src="images/product-10.png.jpg">
                <h4>TVS Ntorq 125 head visor</h4>
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
                <img src="images/product-11.png.jpg">
                <h4>TVS Ntorq 125-Fi headlight</h4>
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
                <h4>TVS Ntorq 125 silensor</h4>
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
            $productId = $row["id"]; // Get the product ID
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
                    <a href="cart.php?add_to_cart=' . $productId . '" class="btn">Add to cart &#xbb;</a>
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

    <!-- JavaScript for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>




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