<?php
$pro_id= $_GET['id'];

include "config.php";
$sql = "DELETE from product where pid={$pro_id}";
mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: {$myhost}/displaypro.php");

mysqli_close($conn);
?>