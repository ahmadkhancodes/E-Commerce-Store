<?php
include "config.php";
session_start();
if ($_SESSION['email'] == "") {
    header("Location: {$myhost}/signin.php");
    mysqli_close($conn);
}

include "config.php";

$pid = $_GET['pid'];

$sql0 = "SELECT * FROM cart where cart.pid={$pid}";
$result0 = mysqli_query($conn, $sql0) or die("Query Unsuccessful");
$sqlp = "SELECT * FROM product where pid={$pid}";
$resultp = mysqli_query($conn, $sqlp) or die("Query Unsuccessful");
$rowp = mysqli_fetch_assoc($resultp);
$priceToBeAdded=$rowp['pprice'];
if($rowp['psprice']>'0'){
    $priceToBeAdded=$rowp['psprice'];
}
if (mysqli_num_rows($result0) == 0) {
    $sql1 = "INSERT INTO cart(pid,cid,cquantity,cart_amount) VALUES ({$pid},{$_SESSION['cus_id']},1,{$priceToBeAdded})";
    mysqli_query($conn, $sql1) or die("Query Unsuccessful 2");
} else {
    $row = mysqli_fetch_assoc($result0);
    $caid = $row["caid"];
    $cquantity = $row["cquantity"];
    $cart_amount = $row["cart_amount"];
    $cquantity = $cquantity + 1;
    $sql = " UPDATE cart SET cid={$_SESSION['cus_id']},cquantity={$cquantity},cart_amount={$priceToBeAdded} * {$cquantity} WHERE caid={$caid}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
}

header('Location: ' . $_SERVER["HTTP_REFERER"] );

mysqli_close($conn);
