<?php
include "header.php";
?>

<!-- Products  -->

<?php
$pid = $_GET['pid'];
?>
<div class="container-fluid product-div row my-4">
    <?php
    include "config.php";
    $sql = "SELECT * FROM product where pid= {$pid}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <div class=" row container-fluid">
                <div class="col-6">
                <img src="<?php echo $images;?>/<?php echo $row['pmimg'];?>" width="100%" height="450px">
                </div>
                <div class="col-6">
                <h1 style="color:grey !important;font-size:50px !important;"><?php echo $row['pname'];?></h1>
                <h4>Short Description</h4>
                <p><?php echo $row['psdes'];?></p>
                <h4>Long Description</h4>
                <p><?php echo $row['pldes'];?></p>
                <a href="addToCart.php?pid='<?php echo $row['pid']; ?>'"><button type="button" id="add-to-cart-p">Add to Cart</button></a>
                </div>

            </div>



    <?php }
    }
    ?>
    <?php
    mysqli_close($conn);
    ?>

</div>

<?php
include "footer.php";
?>