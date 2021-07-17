<?php 
include "adminHeader.php";
?>
        <?php

        include "config.php";
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="container-fluid col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['pid']; ?></td>
                                <td><img src="./images/<?php echo $row['pmimg'];?>" alt="" class="cart-image-dim"></td>
                                <td><?php echo $row['pname']; ?></td>
                                <td><?php echo $row['pprice']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['psprice']; ?></td>
                                <td><?php echo $row['pstatus']; ?></td>
                                <td>
                                    <a href="updatePro.php?id= <?php echo $row["pid"]; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                    <a href="deletepro.php?id= <?php echo $row["pid"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
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