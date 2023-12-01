<?php
@include 'config.php';

if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_ratings = $_POST['product_ratings']; // Added product ratings
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image) || empty($product_ratings)) {
        
    } else {
        $insert = "INSERT INTO products(name, price, ratings, image) VALUES('$product_name', '$product_price', '$product_ratings', '$product_image')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'New product added successfully';
        } else {
            $message[] = 'Could not add the product';
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE id = $id");
    header('location:productlist.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- ... (existing head content) ... -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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


  

   <?php
   $select = mysqli_query($conn, "SELECT * FROM products");
   ?>

   <div class="product-display">
      <table class="product-display-table">
         <thead>
            <tr>
               <th>Product Image</th>
               <th>Product Name</th>
               <th>Product Price</th>
               <th>Product Ratings</th>
               <th>Action</th>
            </tr>
         </thead>
         <?php while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
               <td><img src="images/<?php echo $row['productimage']; ?>" height="100" alt=""></td>
               <td><?php echo $row['productname']; ?></td>
               <td>Rs<?php echo $row['price']; ?>/-</td>
               <td><?php echo $row['ratings']; ?></td>
               <td>
                  <a href="product_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a>
                  <a href="productlist.php?delete=<?php echo $row['id']; ?>"" class="btn"> <i class="fas fa-trash"></i> Delete </a>
               </td>
            </tr>
         <?php } ?>
      </table>
   </div>
</body>
</html>
