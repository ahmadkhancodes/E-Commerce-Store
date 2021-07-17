<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="./asset/favicon.png" />


    <title>Admin Dashboard</title>



</head>

<body>


    <!-- Navbar Top Section -->

    <div class="container-fluid bg-dark top-2nd">

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="index.php"><img src="./asset/logo.png" alt="logo" class="logo img-fluid mt-2"></a>
                </div>
                <div class="col">
                    <h3 style="color:aliceblue;" class="my-4 text-center">Admin Dashboard</h3>
                </div>
                <div class="col cart-section text-end my-4">
                    <a href="logut.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logut</a>

                </div>

            </div>

        </div>

    </div>



    <!-- Mian Section  -->


    <div class="row container-fluid">


        <div class="col-2" id="dashLeftDiv">
            <ul>
                <p>Products Managment</p>
                <a href="adminDash.php">
                    <li>Add Product</li>
                </a>
                <a href="displaypro.php">
                    <li>View All Products</li>
                </a>
            </ul>

            <ul>
                <p>Orders Managment</p>
                <a href="pendingOrders.php">
                    <li>Pending Orders</li>
                </a>
                <a href="completedOrders.php">
                    <li>Completed Orders</li>
                </a>
                <a href="cancelledOrders.php">
                    <li>Cancelled Orders</li>
                </a>
            </ul>

            <ul>
                <p>Customers</p>
                <a href="customers.php">
                    <li>See All Customers</li>
                </a>
            </ul>
        </div>