<!doctype html>
<html lang="en">
<?php
include "links.php";
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <!-- Style.css  -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- fontawesome cdn -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <!-- Title -->
    <title>EStore</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="./asset/favicon.png" />
</head>

<body>
    <!-- Top Bar -->
    <div class="top-1st">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <span><i class="fa fa-phone" aria-hidden="true"></i> Phone: +92 123456 789</span>
            </div>
            <div class="col-4 text-center">
                <span><i class="fa fa-envelope" aria-hidden="true"></i> Email: contact@estore.com</span>
            </div>
            <div class="col-4 text-end">
                <span>
                    <a href="#"><i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#"><i class="fab fa-whatsapp-square"></i>
                    </a>
                    <a href="#"><i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"><i class="fab fa-linkedin"></i>
                    </a>
                </span>
            </div>
        </div>
        </div>
    </div>

    <!-- Navbar Top Section -->

    <div class="container-fluid bg-dark top-2nd">

        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a href="index.php"><img src="./asset/logo.png" alt="logo" class="logo img-fluid"></a>
                </div>
                <div class="col-5 row">
                    <form class="form-inline my-2 row" method="POST" action="search.php">
                        <input class="form-control col-9" type="search" placeholder="Search Products" name="search" aria-label="Search">
                        <input class="col-3" type="submit" id="search-button" value="Search">
                    </form>
                    

                </div>

                <div class="col cart-section mt-3">
                    <span><a href="myaccount.php">My Account</a>
                        | CART/<strong>Rs
                            <?php
                            include "config.php";
                            $order_amount = 0;
                            $sql = "SELECT * From cart";
                            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $order_amount = $row['cart_amount'] + $order_amount;
                            }
                            echo $order_amount;
                            ?>
                        </strong>
                        <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                        <?php
                        $cart_quan = 0;
                        $sql1 = "SELECT * From cart";
                        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            $cart_quan = $row1['cquantity'] + $cart_quan;
                        }
                        echo "<h6>{$cart_quan}</h6>";
                        mysqli_close($conn);
                        ?>
                    </span>
                </div>

            </div>

        </div>

    </div>


    <!-- Navbar -->

    <div class="container-fluid" id="nav-container">
        <nav class="navbar container navbar-expand-lg navbar-light">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php?comingname='Laptops'">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php?comingname='Phones'">Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php?comingname='Headphones'">Headphones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php?comingname='Watches'">Watches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php?comingname='Accessories'">Accessories</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>