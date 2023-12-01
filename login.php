
<?php
session_start(); // Start or resume the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Retrieve the email and password from the login form
    $email = $_POST["email"];
    $password = $_POST["Password"];

    // Prepare and execute the SQL query to fetch user details
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Check if the user exists and the password matches
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Password matches, so login is successful
            $_SESSION["user_id"] = $user["id"]; // Store the user ID in the session variable

            // Redirect to the desired page after successful login (e.g., products.php)
            header("Location: products.php");
            echo "welcome";
            exit();
        } else {
            // Password does not match, show an error message
            echo "Invalid email or password.";
        }
    } else {
        // User not found, show an error message
        echo "Invalid email or password.";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login - Aarshiya automobiles and spare parts</title>
    <link rel="stylesheet" href="style/login.css">
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
<style>
    .password-container {
        position: relative;
    }

    #togglePassword {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
<style>
    .account-page{
    padding: 50px 0;
    background: radial-gradient(#fff,#ffd6d6);
}

.form-container{
    background: #ffd6d6;
    width: 300px;
    height: 400px;
    position: relative;
    text-align: center;
    padding: 20px 0;
    margin: auto;
    box-shadow: 0 0 20px 0px rgba(32, 5, 5, 0.1);
    overflow: hidden;
}

.form-container span{
    font-weight: bold;
    padding: 0 10px;
    color: #555;
    cursor: pointer;
    width: 100px;
    display: inline-block;
}

.form-btn{
    display: inline-block; 
}

.form-container form{
    max-width: 300px;
    height: 80vh;
    padding: 0 20px;
    position: absolute;
    top: 100px;
}
form input{
    width: 100%;
    height: 20px;
    margin: 8px 0;
    padding: 0 10px;
    border: 1px solid #ccc;

}

form .btn{
    width: 100%;
    border: none;
    cursor: pointer;
    margin: 30px 0;
}
form .btn:focus{
    outline: none;
}

#LoginForm{
    left: 25px;
}

form a{
    font-size: 12px;
}

#Indicator{
    width: 100px;
    border: none;
    background: #ff523b;
    height: 3px;
    margin-top: 8px;
   
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
                        <span onclick="Login()">Login</span>
                         <hr id="Indicator">
                    </div>
                    <form id="LoginForm" method="POST" action="login.php">

                        <input type="Email" placeholder="Email" name="email" oninput="this.value = this.value.toLowerCase()">
                     <div class="password-container">
                        <input type="Password" placeholder="password" name="Password" id="password-input" onkeyup="checkCapsLock()">
                        <i class="fa fa-eye" id="togglePassword" onclick="togglePasswordVisibility()"></i>
                     </div>
                        <a href="#"><button type="submit" class="btn">Login</button></a>
                        <a href="register.php">Forgot Password?</a><br>
                        <a href="register.php">Have not registered yet?</a>
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

<!----------------password visibility-------->
<script>
    // JavaScript function to toggle password visibility
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password-input");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }

    // JavaScript function to check if Caps Lock is on
    function checkCapsLock() {
        var passwordInput = document.getElementById("password-input");
        var capsLock = event.getModifierState && event.getModifierState("CapsLock");
        if (capsLock) {
            // Show a message to indicate Caps Lock is on (you can modify this behavior)
            // For example, you can display a message next to the password field.
            console.log("Caps Lock is ON");
        }
    }
</script>



</body>
</html>