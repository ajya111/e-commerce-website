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
    if (!isset($_SESSION['id'])) {
        echo "Please log in first.";
        return;
    }

    // Retrieve the product details from the products table
    $sql = "SELECT productname, productimage, price FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Get the results
        $stmt->bind_result($productName, $productImage, $price);

        // Fetch the data
        if ($stmt->fetch()) {
            // Add the product to the cart_items table
            $userId = $_SESSION['id'];
            $quantity = 1;
            $createdAt = date('Y-m-d H:i:s'); // Get the current date and time

            $sqlInsert = "INSERT INTO cart_items (id, product_id, productname, productimage, price, quantity, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmtInsert = $conn->prepare($sqlInsert);
            $stmtInsert->bind_param("iisssds", $userId, $productId, $productName, $productImage, $price, $quantity, $createdAt);

            // Execute the prepared statement to insert the product into cart_items
            if ($stmtInsert->execute()) {
                echo "Product added to cart successfully!";
            } else {
                echo "Failed to add the product to the cart: " . $stmtInsert->error;
            }

            // Close the statement
            $stmtInsert->close();
        } else {
            echo "Product not found.";
        }

        // Close the statement
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
    <link rel="stylesheet" href="style/cart.css">
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

    <!----------cart items details-------->
<div class="cart-part">
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                
            </tr>
           
 </div>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-1.jpg">
                        <div>
                            <p>Ntorq 125 disc(visor)</p>
                            <small>Price: Rs20,000.00</small>
                            <br>
                            <a href="" class="remove-item" onclick="removeCartItem(event)">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" class="quantity"></td>
                <td>Rs20,000.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-2.jpg">
                        <div>
                            <p>Ntorq 125-xp side trim panel</p>
                            <small>Price: Rs2,200.00</small>
                            <br>
                            <a href=""class="remove-item" onclick="removeCartItem(event)">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" class="quantity"></td>
                <td>Rs2,200.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/buy-3.jpg">
                        <div>
                            <p>Ntorq 125 Race edition(visor)</p>
                            <small>Price: Rs35,000.00</small>
                            <br>
                            <a href="" class="remove-item" onclick="removeCartItem(event)">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1" class="quantity"></td>
                <td>Rs35,000.00</td>
            </tr>
        </table>
        


        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs 57,200.00</td>
                </tr>
                <tr>
                    <td> VAT 17%</td>
                    <td>Rs 9,724.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>Rs 66,924.00</td>
                </tr>
            </table>
        </div>

        <div class="button">
            <a href="payment.php" class="btn5">checkout</a>
          </div>



       

    </div>
</div>



<!-- HTML content for the cart page goes here -->

<?php
    // The existing HTML content for products and cart items goes here
    ?>

    <!-- JavaScript for removing item -->
    <script>
        function removeCartItem(event) {
            event.preventDefault();
            var cartItem = event.target.closest("tr");
            cartItem.remove();
        }
    </script>

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













<!----------- js for removing item ------------->
<script>
    function removeCartItem(event) {
        event.preventDefault();
        var cartItem = event.target.closest("tr");
        cartItem.remove();
    }
</script>


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