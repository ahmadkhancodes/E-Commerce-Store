<?php
include "header.php";
?>



<div class="container-fluid text-center my-3">
    <h2>Thanks For Shopping With Us!</h2>
    <p>Your Order is in Pending Status, You can check your Order Status in your Profile Section</p>
    <h4 style="color:brown;">Here are your Order Details</h4>
</div>

<div class="container-fluid text-center col-9">
    <?php
    $cart_ids = $_GET['caids'];
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $row = mysqli_fetch_assoc($result);
            ?>
            <tr>
                <?php
                include "config.php";
                $caid_array = explode(",", $cart_ids);
                $total_amount = 0;
                $con = 0;
                foreach ($caid_array as $cart_id) {
                    $con = $con + 1;
                    $sql4 = "SELECT * From product join cart where cart.pid=product.pid";
                    $result4 = mysqli_query($conn, $sql4) or die("Query Unsuccessful 2");
                    $row4 = mysqli_fetch_assoc($result4);
                    $sql5 = "SELECT * From cart where caid={$cart_id}";
                    $result5 = mysqli_query($conn, $sql5) or die("Query Unsuccessful 2");
                    $row5 = mysqli_fetch_assoc($result5);
                    $total_amount = $row5['cart_amount'] + $total_amount;
                ?>
                    <th scope="row"><?php echo $con; ?></th>
                    <td><?php echo $row4["pname"]; ?></td>
                    <td>
                        <?php echo $row5["cquantity"]; ?>

                    </td>
                    <td><?php echo $row5["cart_amount"]; ?></td>
            </tr>
        <?php
                }
        ?>
        </tbody>
    </table>
</div>
<div class="container-fluid col-8 text-end my-5">
<?php
echo "<strong>Subtotal : {$total_amount}</strong>";
mysqli_query($conn, "TRUNCATE TABLE cart");
mysqli_close($conn);

?>


</div>




<?php
include "footer.php";
?>