<?php
$order_id= $_GET['oid'];

include "config.php";
$sql = " UPDATE orders SET order_status='Cancelled' WHERE order_id={$order_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: {$myhost}/pendingOrders.php");

mysqli_close($conn);
?>