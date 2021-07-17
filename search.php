<?php
include "header.php";
?>

<!-- Products  -->

<?php
$name = $_POST['search'];
?>
<div class="container-fluid product-div row my-4">
    <?php
    include "config.php";
    $sql = "SELECT * FROM product where pname like '%{$name}%' or pname like '{$name}%' or pname like '%{$name}'
        or pname like '_{$name}%' or pname like '{$name}_%' or pname like '{$name}__%'";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    if ((mysqli_num_rows($result) > 0) && $name != "") {
        echo "<h2 class='text-center'>Search Results on '{$name}'</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

            <div class="col-3 d-inline-block product-div my-1">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $images; ?>/<?php echo $row['pmimg']; ?>" class="card-img-top" alt="...">
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
        echo "<p class='text-center'>Oops, Result not Found</p>";
    }
    ?>

    <?php
    mysqli_close($conn);
    ?>



    <?php
    include "footer.php";
    ?>