
<?php
require_once 'config.php';

?>

<?php
// Assuming you have a MySQL database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["Username"];
    $email = $_POST["email"];
    $password = $_POST["Password"];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (Username, email, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);
    
    if ($stmt->execute()) {
        header('Location: login.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="style/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.giggle {
  animation: giggle 1s infinite;
}

@keyframes giggle {
  0%, 100% {
    transform: rotate(0deg);
  }
  25% {
    transform: rotate(-10deg);
  }
  75% {
    transform: rotate(10deg);
  }
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
                    <li><a href="account.php">Account</a></li>
                    <li><a href="cart.php">cart</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" 
            onclick="menutoggle()">
    
        </div>
        
    </div>


<!----------------- acount-page ------------------>

<div class="account-page">
        <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.jpg" width="100%" class="giggle">
            </div>
            <div class="col-2">
                    <div class="form-container">
                    <div class="form-btn">
                        <span onclick="Register()">Register</span>
                        <hr id="Indicator1">
                    </div>
                    

                    <form  id="RegForm1" method="POST" action="register.php">
                        <input type="Text" placeholder="Username" name="Username">
                        <input type="Email" placeholder="email" name="email">
                        <input type="Password" placeholder="Enter Password" name="Password">
                        <input type="Password" placeholder="Confirm Password" name=" Confirm Password">
                        <button type="submit" class="btn">Register now</button>
                        <a href="login.php">Alreary have an account?</a>
                    </form>
                </div>
                
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





</body>
</html>