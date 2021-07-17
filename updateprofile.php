<?php
session_start();
if ($_SESSION['email'] == "") {
    include "config.php";
    header("Location: {$myhost}/signin.php");
}

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
                            <a href="logut.php">Logut</a>
                        </span>
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
                    <a href="cusOrders.php">
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
                ?>
                    <div class="container" id="checkout">
                        <h1 class="my-4">Update Your Profile</h1>
                        <form method="POST" action="saveUpdatedProfile.php" class="row g-3 my-1" id="myform" onsubmit="" novalidate autocomplete="off">

                            <div class="col-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="hidden" value="<?php echo $row['cus_id'];?>" name="cus_id">
                                <input type="text" value="<?php echo $row['cus_fname'] ?>" class="" id="ifname" name="fname" aria-label="First name">
                                <span id="fnameerror" class="text-danger font-weight-bolder"></span>
                            </div>
                            <div class="col-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" value="<?php echo $row['cus_lname'] ?>" class="" name="lname" id="ilname" aria-label="Last name">
                                <span id="lnameerror" class="text-danger font-weight-bolder"></span>
                            </div>

                            <div class="col-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" value="<?php echo $row['cus_email'] ?>" class="" name="inputEmail4" id="iinputEmail4">
                                <span id="inputEmail4error" class="text-danger font-weight-bolder"></span>
                            </div>

                            <div class="col-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="" name="inputPassword4" id="iinputPassword4">
                                <span id="inputPassword4error" class="text-danger font-weight-bolder"></span>
                            </div>

                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Address 1</label>
                                <input type="text" value="<?php echo $row['cus_add1'] ?>" name="inputAddress" id="iinputAddress">
                                <span id="inputAddresserror" class="text-danger font-weight-bolder"></span>

                            </div>
                            <div class="col-6">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="" value="<?php echo $row['cus_add2'] ?>" name="inputAddress2" id="iinputAddress2">
                                <span id="inputAddress2error" class="text-danger font-weight-bolder"></span>

                            </div>
                            <div class="col-3">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="" value="<?php echo $row['cus_city'] ?>" id="iinputCity" name="inputCity">
                                <span id="inputCityerror" class="text-danger font-weight-bolder"></span>

                            </div>
                            <div class="col-3">
                                <label for="inputState" class="form-label">State</label>
                                <select name="inputState" id="iinputState" class="extramargin">
                                    <option selected><?php echo $row['cus_state'] ?></option>
                                    <option>Punjab</option>
                                    <option>Sindh</option>
                                    <option>KPK</option>
                                    <option>Islamabad</option>
                                    <option>Balochistan</option>
                                    <option>Gilgit Baltistan</option>
                                    <option>Azad Kashmir</option>
                                </select>
                                <span id="inputStateerror" class="text-danger font-weight-bolder"></span>

                            </div>
                            <div class="col-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" value="<?php echo $row['cus_zip'] ?>" class="form-control" name="inputZip" id="inputZip">
                                <span id="inputZiperror" class="text-danger font-weight-bolder"></span>

                            </div>
                            <div class="col-4 text-center">
                                <input id="add-product" class="create-profile-margin" type="submit" value="Update My Profile" class="btn btn-primary"></input>
                            </div>
                        </form>
                    </div>
            <?php
                    mysqli_close($conn);
                }
            ?>
            </div>
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