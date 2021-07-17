<?php 
include "adminHeader.php";
?>
            <div class="container-fluid col-10">

        <?php

        include "config.php";
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        if (mysqli_num_rows($result) > 0) {
        ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Order Amount</th>
                            <th scope="col">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            if($row['order_status']=='Cancelled'){
                        ?>
                            <tr>
                                <td><?php echo $row['order_id']; ?></td>
                                <td><?php echo $row['cid']; ?></td>
                                <td><?php echo $row['order_amount']; ?></td>
                                <td><?php echo "<strong style='color:red;'>{$row['order_status']}</strong>"; ?></td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            <?php } 
            else {
                echo "<h3 class='text-center mt-5'>No Orders Yet!</h3>";
            }
            ?>
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