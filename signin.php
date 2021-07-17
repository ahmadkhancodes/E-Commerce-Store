<!doctype html>
<html lang="en">

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
    <title>Sign In</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/jpg" href="./asset/favicon.png" />
</head>




<body>

    <?php
    // echo '<script language="javascript">';
    // echo "document.getElementById('inputEmail3error').innerText = ''";
    // echo "document.getElementById('inputPassword3error').innerText = ''";
    // echo '</script>';
    include "config.php";
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == "admin@admin.com" && $password == "admin@admin.com") {
            header("Location: {$myhost}/adminDash.php");
        } else {
            $password = md5($_POST['password']);
            $sql1 = "SELECT * FROM customer where cus_email='{$email}' and cus_pass='{$password}'";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
            $row = mysqli_fetch_assoc($result1);
            if ($row > 0) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['cus_fname'] . " " . $row['cus_lname'];
                $_SESSION['cus_id'] = $row['cus_id'];
                header("Location: {$myhost}/index.php");
            }
        }
    }


    ?>

    <!-- Banners Div  -->

    <div class="container-fluid row my-5">


        <!-- Sign In  -->

        <div class="container-fluid col-9" id="signin">
            <h1 style="margin-left: 290px; padding-bottom:50px;">Sign In To Your Account</h1>
            <div class="container-fluid text-center">
            </div>
            <div class="container-fluid page">
                <form action="" method="POST" onsubmit="return validation()" id="myform" novalidate autocomplete="off">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email">
                            <span id="inputEmail3error" class="text-danger font-weight-bolder" value=""></span>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                            <span id="inputPassword3error" class="text-danger font-weight-bolder" value=""></span>
                        </div>

                    </div>


                    <div class="container row justify-content-end">
                        <div class="col-5">
                            <button type="submit" id="add-to-cart" name="submit" class="my-2">Sign In</button>
                        </div>
                        <div class="col-5">
                            <a href="signup.php"><button type="button" id="add-to-cart" class="my-2">Sign Up</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    



    <script>
        function validation() {
            document.getElementById("inputEmail3error").innerText = "";
            document.getElementById("inputPassword3error").innerText = "";
            var email = document.getElementById("inputEmail3").value;
            var password = document.getElementById("inputPassword3").value;
            if ((email == "") && (password == "")) {
                document.getElementById("inputEmail3error").innerText = "*Email Cannot be Empty";
                document.getElementById("inputPassword3error").innerText = "*Password Cannot be Empty";
                document.getElementById("inputPassword3").style = "border: 1px solid red !important; ";
                document.getElementById("inputEmail3").style = "border: 1px solid red !important; ";
                return false;

            } 
            else if ((email == "admin@admin.com") && (password == "admin@admin.com")) {
                return true;
            } 
            
            else {



                if (email.indexOf("@") > 0 == false | email.indexOf(".") > 0 == false) {
                    document.getElementById("inputEmail3error").innerText = "*Please Enter a Valid Email";
                    document.getElementById("inputEmail3").style = "border: 1px solid red !important; ";
                    return false;
                } else if (password.length < 2) {
                    document.getElementById("inputPassword3error").innerText = "*Please Enter a Valid 8-Digit Password";
                    document.getElementById("inputPassword3").style = "border: 1px solid red !important; ";
                    return false;
                }

                <?php
                $sqli = "SELECT * FROM customer where cus_email='{$email}'";
                $resulti = mysqli_query($conn, $sqli) or die("Query Unsuccessful");
                $rowi = mysqli_fetch_assoc($resulti);
                if ($rowi > 0 == false) {
                ?>

                    document.getElementById("inputEmail3error").innerText = "*This Email Does't Exist";
                    document.getElementById("inputEmail3").style = "border: 1px solid red !important; ";
                    return false;

                <?php
                }
                $sqlj = "SELECT * FROM customer where cus_email='{$email}' and cus_pass='{$password}'";
                $resultj = mysqli_query($conn, $sqlj) or die("Query Unsuccessful");
                $rowj = mysqli_fetch_assoc($resultj);
                if ($rowj > 0 == false) {
                ?>
                    document.getElementById("inputPassword3error").innerText = "*Incorrect Password";
                    document.getElementById("inputPassword3").style = "border: 1px solid red !important; ";
                    return false;
                <?php
                }
                ?>


            }

        };
    </script>

</body>

<?php
mysqli_close($conn);
?>