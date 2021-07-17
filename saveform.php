<?php

$pname= $_POST['pname'];
$pprice= $_POST['pprice'];
$psprice= $_POST['psrice'];
$psdes= $_POST['psdes'];
$pldes= $_POST['pldes'];
$pstatus= $_POST['pstatus'];
$category=$_POST['cat'];

//Image

$errors=array();
$mainImage_name=$_FILES['pmimg']['name'];
$mainImage_tmpname=$_FILES['pmimg']['tmp_name'];
$mainImage_type=$_FILES['pmimg']['type'];
$mainImage_size=$_FILES['pmimg']['size'];
$exp = explode('.' , $mainImage_name);
$mainImage_extension=end($exp);

$extensions=array('jpg','jpeg','png');
// if(in_array($mainImage_extension,$extensions) === false){
//         $errors[]="This extension of Main Image is not allowed. Please select jpg/png image !";
// }
if($mainImage_size > 2097152){
        $errors[]="File size must be 2mb or lower !";
}
if(empty($errors)){
        move_uploaded_file($mainImage_tmpname,"images/".$mainImage_name);
}else{
        print_r($errors);
        die();
}

include "config.php";
$sql = "INSERT INTO product(pname,pprice,psprice,pstatus,psdes,pldes,pmimg,pgimg,category)
        VALUES ('{$pname}','{$pprice}','{$psprice}','{$pstatus}','{$psdes}','{$pldes}',
        '{$mainImage_name}','{$mainImage_name}','{$category}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: {$myhost}/adminDash.php");

mysqli_close($conn);
