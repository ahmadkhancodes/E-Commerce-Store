<?php
$cart_id= $_GET['id'];

include "config.php";
$sql = "DELETE from cart where caid={$cart_id}";
mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: {$myhost}/cart.php");

mysqli_close($conn);
?>