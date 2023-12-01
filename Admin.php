

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/Admin.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-motorcycle" aria-hidden="true"></i> <span>Aarshiya automobile and spare parts</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="addproducts.php"><i class="fa fa-desktop"></i> <span>Add products</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Customers</span></a></li>
                <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> <span>Serviving</span></a></li>
                <li><a href="orders.php"><i class="fa fa-file-pdf-o"></i> <span>Orders</span></a></li>
                <li><a href="#"><i class="fa fa-money"></i> <span>Income</span></a></li>
                <li><a href="catalog.php"><i class="fa fa-file"></i> <span>Parts catalog</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Account</span></a></li><br><br><br><br><br><br><br><br>
            <div class="logout">
               <ul>
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
               </ul>
            </div>
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa fa-bars"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-search">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            
            <div class="header-left header-profile">
                <img src="images/user.png" class="img-responsive" />
                <h3>Welcome</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">130</h2>
                <p>Customers</p>
            </div>
            <div class="card">
                <a href="productlist.php">
                <h2 class="cus-num cus-pro">250</h2>
                <p>Products</p></a>
            </div>
            <div class="card">
                <a href="catalog.php">
                <h2 class="cus-num cus-ord">3 Brands</h2>
                <p>Catalog</p></a>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">100k</h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Recent Orders</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Order</th>
                        <th>Brand</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Ntorq tire</td>
                        <td>Tvs Ntorq</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Ntorq carburator</td>
                        <td>Ntorq</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                    <tr>
                        <td>Apache-200 side light</td>
                        <td>Tvs Apache</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>jupiter side mirror</td>
                        <td>jupiter</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Apache disc-plate</td>
                        <td>Apache</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                    <tr>
                        <td>Wego battery</td>
                        <td>wego</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>jazz-visor</td>
                        <td>jazz</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Ntorq air filter</td>
                        <td>Ntorq</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                    <tr>
                        <td>Apache-200 mobil</td>
                        <td>Tvs Apache</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>jupiter side panel/td>
                        <td>jupiter</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Ntorq tire</td>
                        <td>Tvs Ntorq</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Ntorq carburator</td>
                        <td>Ntorq</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                    <tr>
                        <td>Apache-200 side light</td>
                        <td>Tvs Apache</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>jupiter side mirror</td>
                        <td>jupiter</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    <tr>
                        <td>Apache disc-plate</td>
                        <td>Apache</td>
                        <td><span class="progress-span"></span>In Progress</td>
                    </tr>
                    
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>All Customers</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Suzeet b.k</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Ashish dhakal</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Umes rana</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Prabesh thapa</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Prabin gaire</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>Sujan gautam</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>krishna bhandari</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>kamal raj</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>pukar sahani</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>rajendra khadka</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td>baibhav thapa</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    
                </table>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>




    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>
