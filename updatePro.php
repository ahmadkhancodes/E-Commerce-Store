<?php 
include "adminHeader.php";
?>

        <?php
        $pro_id = $_GET['id'];
        include "config.php";
        $sql = "SELECT * FROM product where pid={$pro_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <div class="col-10">
                <div>
                    <form action="updateform.php" id="productform" class="" onsubmit="" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="row my-2 mb-1">
                                    <div class="col-6">
                                        <label for="pname">Product Name<span>*</span></label>
                                        <input class="form-input" type="hidden" name="pid" id="pname" value="<?php echo $row['pid']; ?>">
                                        <input class="form-input" type="text" name="pname" id="pname" value="<?php echo $row['pname']; ?>">
                                    </div>

                                    <div class="col-3">
                                        <label for="categ">Category<span>*</span></label><br>
                                            <?php
                                            $sql1 = "SELECT * FROM category";
                                            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
                                            if (mysqli_num_rows($result1) > 0) {
                                                echo "<select name='cat' id='categ' class='extrapadding'>";
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    if ($row['category'] == $row1['cid']) {
                                                        $select = 'selected';
                                                    } else {
                                                        $select = '';
                                                    }
                                                echo "<option {$select} value='{$row1['cname']}'>{$row1['cname']}</option>";
                                                }
                                                echo '</select>';
                                            } ?>    
                                    
                                    </div>
                                    <div class="col-3">
                                        <label for="price">Price<span>*</span></label>
                                        <input class="form-input" type="number" name="pprice" id="price" value="<?php echo $row['pprice']; ?>">
                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class="col-3">
                                        <label for="sale-price">Sale Price</label>
                                        <input class="extramargin" type="number" name="psrice" id="sale-price" placeholder="Optional" value="<?php echo $row['psprice']; ?>">
                                    </div>
                                    <div class="col-3">
                                        <label for="feature">Feature Status<span>*</span></label><br>
                                        <?php
                                        $sql2 = "SELECT * FROM featured";
                                            $result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful");
                                            if (mysqli_num_rows($result2) > 0) {
                                                echo "<select name='pstatus' class='extramarginx2'>";
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    if ($row['pstatus'] == $row2['fname']) {
                                                        $selec = 'selected';
                                                    } else {
                                                        $selec = '';
                                                    }
                                                echo "<option {$selec} value='{$row2['fname']}'>{$row2['fname']}</option>";
                                                }
                                                echo '</select>';
                                            } ?> 
                                        
                                    </div>
                                    <div class="col-6">
                                        <label for="S-descrip">Short Description<span>*</span></label>
                                        <input class="extrapadding" type="text" name="psdes" id="S-descrip" value="<?php echo $row['psdes']; ?>">
                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class="col-12">
                                        <label for="L-descrip">Long Description<span>*</span></label><br>
                                        <textarea name="pldes" id="L-descrip" cols="30" rows="5" value="<?php echo $row['pldes']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class="row my-1">
                                    <div class="col-4">
                                        <label for="crt-pass">Cover Image<span>*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="pmimg" id="main-img" value="./images/<?php echo $row['pmimg'];?>">
                                            <label for="" class="custom-file-label">Choose File</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="cnf-pass">Second Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="pgimg" id="gallery-img" value="<?php echo $row['pgimg']; ?>">
                                            <label for="" class="custom-file-label">Choose File</label>
                                        </div>
                                    </div>
                                    <div class="col-4 text-right my-4">
                                        <input type="submit" id="add-product" value="Update Product">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>
                <?php
            }
                ?>
                </div>
            </div>


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