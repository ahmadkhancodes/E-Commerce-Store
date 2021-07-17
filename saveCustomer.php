<?php

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$inputEmail4= $_POST['inputEmail4'];
$inputPassword4= md5($_POST['inputPassword4']);
$inputAddress= $_POST['inputAddress'];
$inputAddress2= $_POST['inputAddress2'];
$inputCity=$_POST['inputCity'];
$inputState=$_POST['inputState'];
$inputZip=$_POST['inputZip'];

include "config.php";
$sql = "INSERT INTO customer(cus_fname,cus_lname,cus_email,cus_pass,cus_add1,cus_add2,cus_city,cus_state,cus_zip)
        VALUES ('{$fname}','{$lname}','{$inputEmail4}','{$inputPassword4}','{$inputAddress}','{$inputAddress2}',
        '{$inputCity}','{$inputState}','{$inputZip}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: {$myhost}/signin.php");

mysqli_close($conn);


?>
