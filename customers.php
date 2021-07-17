<?php 
include "adminHeader.php";
?>
        <?php

        include "config.php";
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        if (mysqli_num_rows($result) > 0) {
        ?>
            <div class="container-fluid col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">State</th>
                            <th scope="col">Postal Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['cus_id']; ?></td>
                                <td><?php echo $row['cus_fname'].' '.$row['cus_lname'];?></td>
                                <td><?php echo $row['cus_email']; ?></td>
                                <td><?php echo $row['cus_add1'].' '.$row['cus_add2']; ?></td>
                                <td><?php echo $row['cus_city']; ?></td>
                                <td><?php echo $row['cus_state']; ?></td>
                                <td><?php echo $row['cus_zip']; ?></td>
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