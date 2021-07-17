<?php

            $cus_id = $_POST['cus_id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $inputEmail4 = $_POST['inputEmail4'];
            $inputPassword4 = md5($_POST['inputPassword4']);
            $inputAddress = $_POST['inputAddress'];
            $inputAddress2 = $_POST['inputAddress2'];
            $inputCity = $_POST['inputCity'];
            $inputState = $_POST['inputState'];
            $inputZip = $_POST['inputZip'];

            include "config.php";
            $sql22 = " UPDATE customer SET cus_fname='{$fname}',cus_lname='{$lname}',cus_pass='{$inputPassword4}',cus_email='{$inputEmail4}',cus_add1='{$inputAddress}',cus_add2='{$inputAddress2}',
        cus_city='{$inputCity}',cus_state='{$inputState}',cus_zip='{$inputZip}' WHERE cus_id={$cus_id}";
            mysqli_query($conn, $sql22) or die("Query Unsuccessful");

            header("Location: {$myhost}/myaccount.php");
?>