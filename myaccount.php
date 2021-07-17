<?php
include "config.php";
session_start();
if ($_SESSION['email'] == "") {
    header("Location: {$myhost}/signin.php");
} else {

?>


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


        <title>Customer Dashboard</title>



    </head>

    <body>



        <!-- Navbar Top Section -->

        <div class="container-fluid bg-dark top-2nd">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="index.php"><img src="./asset/logo.png" alt="logo" class="logo img-fluid mt-2"></a>
                    </div>
                    <div class="col">
                        <h3 style="color:aliceblue;" class="my-4 text-center">Customer Dashboard</h3>
                    </div>
                    <div class="col cart-section text-end my-4">
                        <span>
                            <a href="signin.html">Hello, <?php echo $_SESSION['name']; ?></a> |
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
                <ul class="my-5">
                    <p>Account Managment</p>
                    <a href="myaccount.php">
                        <li>Account Details</li>
                    </a>
                    <a href="updateprofile.php">
                        <li>Update Profile</li>
                    </a>
                    <a href="cusorders.php">
                        <li>My Orders</li>
                    </a>
                    <a href="logut.php">
                        <li>Logut</li>
                    </a>

                </ul>

            </div>

            <div class="col-10">
                <?php
                include "config.php";
                $sql1 = "SELECT * FROM customer where cus_email='{$_SESSION['email']}'";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
                while ($row = mysqli_fetch_assoc($result1)) {
                    include "links.php";
                ?>
                    <div class="card mb-3">
                        <img src="<?php echo $asset;?>/profile_back.jpg" height="200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Name : </strong><?php echo $row['cus_fname']." ".$row['cus_lname'] ?></h5>
                            <p class="card-text"><strong>Email : </strong><?php echo $row['cus_email'] ?></p>
                            <p class="card-text"><strong>Address 1 : </strong><?php echo $row['cus_add1'] ?></p>
                            <p class="card-text"><strong>Address 2 : </strong><?php echo $row['cus_add2'] ?></p>
                            <p class="card-text"><strong>City : </strong><?php echo $row['cus_city'] ?></p>
                            <p class="card-text"><strong>Postal Code : </strong><?php echo $row['cus_zip'] ?></p>
                            <p class="card-text"><small class="text-muted">Happy Shopping !</small></p>
                        </div>
                    </div>



            <?php
                    mysqli_close($conn);
                }
            }
            ?>
            </div>

            <!-- Jquery JS-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <!-- Vendor JS-->
            <script src="vendor/select2/select2.min.js"></script>
            <script src="vendor/datepicker/moment.min.js"></script>
            <script src="vendor/datepicker/daterangepicker.js"></script>

            <!-- Main JS-->
            <script src="js/global.js"></script>
    </body>

    </html>