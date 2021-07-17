<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

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
    <!-- Banners Div  -->

    <div class="container-fluid row my-3">


        <!-- Sign Up  -->

        <div class="container-fluid col-10">
            <div class="container" id="checkout">
                <h1 class="my-4">Create Your Customer Profile</h1>
                <form method="POST" action="saveCustomer.php" class="row g-3 my-1" onsubmit="" novalidate autocomplete="off">

                    <div class="col-6">
                        <label for="ifname" class="form-label">First Name</label>
                        <input type="text" class="" id="ifname" name="fname" aria-label="First name">
                        <span id="fnameerror" class="text-danger font-weight-bolder"></span>
                    </div>
                    <div class="col-6">
                        <label for="ilname" class="form-label">Last Name</label>
                        <input type="text" class="" name="lname" id="ilname" aria-label="Last name">
                        <span id="lnameerror" class="text-danger font-weight-bolder"></span>
                    </div>

                    <div class="col-6">
                        <label for="iinputEmail4" class="form-label">Email</label>
                        <input type="email" class="" name="inputEmail4" id="iinputEmail4">
                        <span id="inputEmail4error" class="text-danger font-weight-bolder"></span>
                    </div>

                    <div class="col-6">
                        <label for="iinputPassword4" class="form-label">Password</label>
                        <input type="password" class="" name="inputPassword4" id="iinputPassword4">
                        <span id="inputPassword4error" class="text-danger font-weight-bolder"></span>
                    </div>

                    <div class="col-6">
                        <label for="iinputAddress" class="form-label">Address 1</label>
                        <input type="text" class="" name="inputAddress" id="iinputAddress">
                        <span id="inputAddresserror" class="text-danger font-weight-bolder"></span>

                    </div>
                    <div class="col-6">
                        <label for="iinputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="" name="inputAddress2" id="iinputAddress2">
                        <span id="inputAddress2error" class="text-danger font-weight-bolder"></span>

                    </div>
                    <div class="col-3">
                        <label for="iinputCity" class="form-label">City</label>
                        <input type="text" class="" id="iinputCity" name="inputCity">
                        <span id="inputCityerror" class="text-danger font-weight-bolder"></span>

                    </div>
                    <div class="col-3">
                        <label for="iinputState" class="form-label">State</label>
                        <select name="inputState" id="iinputState" class="extramargin">
                            <option selected>Choose...</option>
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
                        <label for="iinputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" name="inputZip" id="iinputZip">
                        <span id="inputZiperror" class="text-danger font-weight-bolder"></span>

                    </div>
                    <div class="col-4 text-center">
                        <input id="add-product" class="create-profile-margin" type="submit" value="Create My Profile" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <script>
        // function validation2() {
        //     alert("Hello Kese Ho Yawwr");
        //     document.getElementById("inputEmail4error").innerText = "";
        //     document.getElementById("inputPassword4error").innerText = "";
        //     document.getElementById("fnameerror").innerText = "";
        //     document.getElementById("lnameerror").innerText = "";
        //     document.getElementById("inputAddresserror").innerText = "";
        //     document.getElementById("inputAddress2error").innerText = "";
        //     document.getElementById("inputcityerror").innerText = "";
        //     document.getElementById("inputstateerror").innerText = "";
        //     document.getElementById("inputziperror").innerText = "";

        //     var email = document.getElementById("iinputEmail4").value;
        //     var password = document.getElementById("iinputPassword4").value;
        //     var fname = document.getElementById("ifname").value;
        //     var lname = document.getElementById("ilname").value;
        //     var add1 = document.getElementById("iinputAddress").value;
        //     var add2 = document.getElementById("iinputAddress2").value;
        //     var city = document.getElementById("iinputcity").value;
        //     var state = document.getElementById("iinputstate").value;
        //     var state = document.getElementById("iinputzip").value;

        //     if ((email == "") && (password == "") && (fname == "") && (lname == "") && (add1 == "") && (add2 == "") && (city == "") && (state == "") && (zip == "")) {
        //         document.getElementById("iinputEmail4").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputPassword4").style = "border: 1px solid red !important; ";
        //         document.getElementById("ifname").style = "border: 1px solid red !important; ";
        //         document.getElementById("ilname").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputAddress").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputAddress2").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputcity").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputstate").style = "border: 1px solid red !important; ";
        //         document.getElementById("iinputzip").style = "border: 1px solid red !important; ";

        //         document.getElementById("inputEmail4error").innerText = "*Please Enter an Email";
        //         document.getElementById("inputPassword4error").innerText = "*Please Enter a Password";
        //         document.getElementById("fnameerror").innerText = "*Enter Your First Name";
        //         document.getElementById("lnameerror").innerText = "*Enter Your Last Name";
        //         document.getElementById("inputAddresserror").innerText = "*Enter Your Address";
        //         document.getElementById("inputAddress2error").innerText = "*Enter Your Address 2";
        //         document.getElementById("inputcityerror").innerText = "*Enter City";
        //         document.getElementById("inputstateerror").innerText = "*Choose a State";
        //         document.getElementById("inputziperror").innerText = "*Enter a Postal/Zip Code";
        //         return false;

        //     } else {



        //         if (email.indexOf("@") > 0 == false | email.indexOf(".") > 0 == false) {
        //             document.getElementById("inputEmail4error").innerText = "*Please Enter a Valid Email";
        //             document.getElementById("iinputEmail4").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (password.length < 8) {
        //             document.getElementById("inputPassword4error").innerText = "*Please Enter a Valid 8-Digit Password";
        //             document.getElementById("iinputPassword4").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (fname = "") {
        //             document.getElementById("fnameerror").innerText = "*Enter Your First Name";
        //             document.getElementById("ifname").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (lname = "") {
        //             document.getElementById("lnameerror").innerText = "*Enter Your Last Name";
        //             document.getElementById("ilname").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (add1 = "") {
        //             document.getElementById("inputAddresserror").innerText = "*Enter Your Address";
        //             document.getElementById("iinputAddress").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (add2 = "") {
        //             document.getElementById("inputAddress2error").innerText = "*Enter Your Address2";
        //             document.getElementById("iinputAddress2").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (city = "") {
        //             document.getElementById("inputcityerror").innerText = "*Enter City";
        //             document.getElementById("iinputcity").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (state = "") {
        //             document.getElementById("inputstateerror").innerText = "*Choose a State";
        //             document.getElementById("iinputstate").style = "border: 1px solid red !important; ";
        //             return false;
        //         } else if (zip = "") {
        //             document.getElementById("inputziperror").innerText = "*Enter a Postal/Zip Code";
        //             document.getElementById("iinputzip").style = "border: 1px solid red !important; ";
        //             return false;
        //         }
        //         <?php
        //         $email="<script>document.writeln(email);</script>";
        //         include "config.php";
        //         $sqli = "SELECT * FROM customer where cus_email='{$email}'";
        //         $resulti = mysqli_query($conn, $sqli) or die("Query Unsuccessful");
        //         $rowi = mysqli_fetch_assoc($resulti);
        //         if ($rowi > 0) {
        //         ?>
        //             document.getElementById("inputEmail4error").innerText = "*This Email Already Exist, Please Enter Another";
        //             document.getElementById("iinputEmail4").style = "border: 1px solid red !important; ";
        //             return false;
        //         <?php
        //         }
        //         ?>


        //     }

        // };
    </script>

</body>

<?php
// mysqli_close($conn);
?>