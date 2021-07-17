
<?php 
include "adminHeader.php";
?>

        <div class="col-10">
            <div>
                <form action="saveform.php" id="productform" class="" onsubmit="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="row my-2 mb-1">
                                <div class="col-6">
                                    <label for="pname">Product Name<span>*</span></label>
                                    <input class="form-input" type="text" name="pname" id="pname">
                                </div>
                                <div class="col-3">
                                    <label for="categ">Category<span>*</span></label><br>
                                    <select id="categ" name="cat" class="extrapadding">
                                        <option value="select" class="category" selected disabled>Select Category</option>
                                        <?php

                                        include "config.php";
                                        $sql = "SELECT * FROM category";
                                        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <option value="<?php echo $row['cname'] ?>" class="category"><?php echo $row['cname'] ?></option>

                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="price">Price<span>*</span></label>
                                    <input class="form-input" type="number" name="pprice" id="price">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-3">
                                    <label for="sale-price">Sale Price</label>
                                    <input class="extramargin" type="number" name="psrice" id="sale-price" placeholder="Optional">
                                </div>
                                <div class="col-3">
                                    <label for="feature">Feature Status<span>*</span></label><br>
                                    <select name="pstatus" id="feature" class="extramarginx2">
                                        <option value="select" class="category" selected disabled>Select</option>
                                        <?php

                                        include "config.php";
                                        $sql1 = "SELECT * FROM featured";
                                        $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                        ?>

                                            <option value="<?php echo $row1['fname'] ?>"><?php echo $row1['fname'] ?></option>

                                        <?php
                                        } ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="S-descrip">Short Description<span>*</span></label>
                                    <input class="extrapadding" type="text" name="psdes" id="S-descrip">
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-12">
                                    <label for="L-descrip">Long Description<span>*</span></label><br>
                                    <textarea name="pldes" id="L-descrip" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col-4">
                                    <label for="pro-image">Product Image<span>*</span></label>
                                    <div class="custom-file">
                                        <input type="file" name="pmimg" id="pro-image">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="prog-image">Second Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="pgimg" id="prog-image">
                                    </div>
                                </div>
                                <div class="col-4 text-right my-4">
                                    <input type="submit" id="add-product" value="Add Product" class="btn secondary-bg-color deal-btn w-25">
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>

        </div>
        <?php
        mysqli_close($conn);
        ?>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>