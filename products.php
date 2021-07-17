<?php
include "header.php";
?>

<!-- Products  -->

<?php
$name = $_GET['comingname'];
?>
<div class="container-fluid product-div row my-4">
    <?php
    include "config.php";
    $sql = "SELECT * FROM product where category= {$name} and pprice>0";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    if (mysqli_num_rows($result) > 0) {
        echo "<h2 class='text-center mb-4'>Showing Products from Category {$name}</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <div class="col-3  d-inline-block product-div my-1">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $images;?>/<?php echo $row['pmimg']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                        <strong>RS <?php echo $row['pprice']; ?></strong>
                        <p id="category-text"><?php echo $row['category']; ?></p>
                        <a href="addToCart.php?pid='<?php echo $row['pid']; ?>'"><button type="button" id="add-to-cart">Add to Cart</button></a>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item text-center">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" id="add-to-cart-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     <strong id="short-des">Short Description</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $row['psdes']; ?>
                                    <a href="viewDetails.php?pid='<?php echo $row['pid']; ?>'"><button type="button" id="add-to-cart">View More</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>



    <?php }
    } else {
        echo "<p class='text-center'>No Products Found In This Category</p>";
    }
    ?>
    <?php
    mysqli_close($conn);
    ?>

</div>

<div class="container-fluid text-center my-5">
    <button class="btn btn-outline-secondary">1</button>
    <button class="btn btn-outline-secondary">2</button>
    <button class="btn btn-outline-secondary">3</button>
    <button class="btn btn-outline-secondary"><i class="fa fa-arrow-right" aria-hidden="true"></i>
    </button>
</div>

<?php
include "footer.php";
?>