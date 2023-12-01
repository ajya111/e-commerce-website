
<!DOCTYPE html>
<html>
<head>
  <title>Admin Order Viewing Page</title>
  <link rel="stylesheet" type="text/css" href="style/orders.css">
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

  <div class="container">
    <h1>Admin Order Viewing Page</h1>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Order Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="orderList"><script>
      // Sample order data (replace this with your real data)
const orders = [
    { id: 1, customer: "asish dhakal", status: "Processing" },
    { id: 2, customer: "prabesh thapa", status: "In Progress" },
    { id: 3, customer: "suzeet b.k", status: "Complete" },
    { id: 4, customer: "umes rana", status: "Cancelled" },
  ];
  
  // Function to generate the dynamic table rows
  function generateOrderRows() {
    const orderList = document.getElementById("orderList");
  
    // Clear any previous rows
    orderList.innerHTML = "";
  
    // Loop through each order and create a table row
    orders.forEach((order) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${order.id}</td>
        <td>${order.customer}</td>
        <td>${order.status}</td>
        <td class="actions">
          <button class="complete" onclick="changeStatus(${order.id}, 'Complete')">Complete</button>
          <button class="processing" onclick="changeStatus(${order.id}, 'Processing')">Processing</button>
          <button class="inprogress" onclick="changeStatus(${order.id}, 'In Progress')">In Progress</button>
          <button class="cancelled" onclick="changeStatus(${order.id}, 'Cancelled')">Cancelled</button>
        </td>
      `;
      orderList.appendChild(row);
    });
  }
  
  // Function to change the order status
  function changeStatus(orderId, newStatus) {
    const order = orders.find((o) => o.id === orderId);
    if (order) {
      order.status = newStatus;
      generateOrderRows();
    }
  }
  
  // Initial table generation
  generateOrderRows();
  </script>
  
      </tbody>
    </table>
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
