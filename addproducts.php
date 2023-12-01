<?php
include 'config.php';
session_start();
?>

<?php
// Establish database connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Ecommerce_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productImage = $_FILES['productimage']['name'];
    $productName = $_POST['productname'];
    $rating = $_POST["rating"];
    $price = $_POST["price"];

    
    // Prepare and bind the parameters
    $stmt = $conn->prepare("INSERT INTO products ( productimage, productname, ratings, price) VALUES ( ?, ?, ?, ?)");
    $stmt->bind_param("ssds", $productImage, $productName, $rating, $price);

    if ($stmt->execute()) {
        echo "Product added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="css/addproduct.css">
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
                    <li><a href="account.php">Account</a></li>
                    <li><a href="cart.php">cart</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" 
            onclick="menutoggle()">
    
        </div>
        
    </div>


<!----------------- Form to enter a product details ------------------>


<form method="POST" action="addproducts.php" enctype="multipart/form-data">
  <label for="productimage">product image:</label>
  <input type="file" name="productimage" id="productimage" required>
  
  <label for="productname">productname:</label>
  <input type="text" name="productname" id="productname" required>
  
  <label for="rating">rating:</label>
  <input type="number" name="rating" id="rating" min="0" max="5" step="0.5" required>
  
  <label for="price">price:</label>
  <input type="number" name="price" id="price" min="0" step="0.01" required>
  <a href="productlist.php">
  <button type="submit" >Add Product</button></a>
</form>






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




</body>
</html>