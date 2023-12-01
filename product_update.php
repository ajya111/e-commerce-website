<?php
@include 'config.php';

$message = array();

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
} else {
    // Handle the case when 'edit' parameter is not present in the URL
    // For example, you can redirect the user to an error page or the admin_page.php
    header('Location: admin_update.php');
    // exit;
}

if (isset($_POST['update_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_ratings = $_POST['product_ratings']; // Added product ratings
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image) || empty($product_ratings)) {
        $message[] = 'Please fill out all fields';
    } else {
        $update_data = "UPDATE products SET productname='$product_name', price='$product_price', ratings='$product_ratings', productimage='$product_image' WHERE id = '$id'";
        $upload = mysqli_query($conn, $update_data);

        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location: productlist.php');
            exit;
        } else {
            $message[] = 'Failed to update product';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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

    
        </div>
        
    </div>

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>
<div class="container">
    <div class="admin-product-form-container centered">
        <?php
        $select = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
        while ($row = mysqli_fetch_assoc($select)) {
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="title">Update the product</h3>
                <input type="text" class="box" name="product_name" value="<?php echo $row['productname']; ?>"
                       placeholder="Product Name">
                <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>"
                       placeholder="Enter the product price">
                <input type="number" step="0.1" min="0" class="box" name="product_ratings"
                       value="<?php echo $row['ratings']; ?>" placeholder="Product Ratings"> <!-- Added product ratings field -->
                <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg">
                <input type="submit" value="Update Product" name="update_product" class="btn">
                <a href="productlist.php" class="btn">Go back!</a>
            </form>
            <?php
        };
        ?>
    </div>
</div>
</body>
</html>
