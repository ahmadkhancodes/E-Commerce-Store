<?php
$pid=$_POST['pid'];
$pname= $_POST['pname'];
$pprice= $_POST['pprice'];
$psprice= $_POST['psrice'];
$psdes= $_POST['psdes'];
$pldes= $_POST['pldes'];
$pmimg= $_POST['pmimg'];
$pgimg= $_POST['pgimg'];
$pstatus= $_POST['pstatus'];
$category=$_POST['cat'];

include "config.php";
$sql = " UPDATE product SET pid='{$pid}',pname='{$pname}',pprice='{$pprice}',psprice='{$psprice}',pstatus='{$pstatus}',psdes='{$psdes}',pldes='{$pldes}',
        pmimg='{$pmimg}',pgimg='{$pgimg}',category='{$category}' WHERE pid={$pid}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: {$myhost}/displaypro.php");

mysqli_close($conn);

?>