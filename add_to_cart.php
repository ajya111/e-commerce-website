
<?php
include 'config.php';
session_start();

// Function to add a product to the cart
function addToCart($productId, $conn) {
    $sql = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $productName = $row["productname"];
        $productImage = $row["productimage"];
        $price = $row["price"];

        // Add the product to the cart_items table
        $userId = $_SESSION['user_id']; // Assuming you have a user authentication system
        $sqlInsert = "INSERT INTO cart_items (user_id, product_id, productname, productimage, price, quantity) VALUES ($userId, $productId, '$productName', '$productImage', $price, 1)";
        $conn->query($sqlInsert);

        // Respond with a success message (you can customize this as per your requirements)
        echo "Product added to cart successfully!";
    } else {
        // Respond with an error message if the product ID is not valid
        echo "Invalid product ID!";
    }
}

// Check if the 'add_to_cart' parameter is set in the URL
if (isset($_GET['add_to_cart'])) {
    $productId = $_GET['add_to_cart'];
    addToCart($productId, $conn);
}
?>
