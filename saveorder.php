<?php
session_start();
if ($_SESSION['email'] == "") {
    include "config.php";
    header("Location: {$myhost}/signin.php");
}
include "config.php";
$caid = $_GET['caid'];
$caid_array=explode(",",$caid);
$order_amount=0;
$order_qua="";
$order_pid="";
$pid_array=[];
$quantity_array=[];
foreach($caid_array as $cart_id){
$sql="SELECT * From cart where caid={$cart_id}";
$result=mysqli_query($conn, $sql) or die("Query Unsuccessful");
$row = mysqli_fetch_assoc($result);
$order_amount= $row['cart_amount']+$order_amount;
array_push($pid_array,$row['pid']);
array_push($quantity_array,$row['cquantity']);
}
$order_pid=implode(",",$pid_array);
$order_qua=implode(",",$quantity_array);
    $sql1 = "INSERT INTO orders(cid,order_amount,order_status,order_qua,order_pid) VALUE ({$_SESSION['cus_id']},{$order_amount},'Pending',
    '{$order_qua}','{$order_pid}')";
    mysqli_query($conn, $sql1) or die("Query Unsuccessful 2");

header("Location: {$myhost}/thankyou.php?caids= $caid");

mysqli_close($conn);
?>
