<?php 

     include "header.php";
     ?>

    <div class="container-fluid row my-3">

        <!-- Cart  -->


        <div class="container-fluid col-9">
            <h1>Shopping Cart</h1>
            <?php
            include "config.php";
            $sql = "SELECT * FROM product JOIN cart ON product.pid=cart.pid";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cart_ids=[];
                        while ($row = mysqli_fetch_assoc($result)) {
                            array_push($cart_ids,$row['caid']);
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["caid"]; ?></th>
                                <td><img src="<?php echo $images;?>/<?php echo $row['pmimg'];?>" class="cart-img-dim" alt=""></td>
                                <td><?php echo $row["pname"]; ?></td>
                                <td>
                                <?php echo $row["cquantity"]; ?>

                                </td>
                                <td><?php echo $row["cart_amount"]; ?></td>
                                <td>
                                    <a href="delcartitem.php?id= <?php echo $row["caid"]; ?>"><button type="button" class="btn btn-danger">Remove</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                 <?php
                 $cart_ids_string=implode(",",$cart_ids)
                 ?>
                <div class="container text-end">
                    <a href="index.php"><button type="button" class="btn btn-info">Continue Shopping</button></a>
                    <a href="saveorder.php?caid=<?php echo $cart_ids_string?>"><button type="button" class="btn btn-success">Checkout</button></a>
                </div>

            <?php
            } else { 
                
                echo "<div class='text-center' style='margin-top:200px;'><h4>Oops! Your Cart is Still Empty</h4>
                    <a href='index.php'><button type='button' class='btn btn-info'>Continue Shopping</button></a>
                    </div>
                    ";
            }
            ?>
        </div>







        <!-- Collection Section -->

        <div class="col-3" id="collection">
            <h3>Also Checkout these Amazing</h3>
            <div class="card" style="width: 18rem;">
                <img src="./asset/watch2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smart Watch Collection</h5>
                    <button type="button" class="btn btn-success">Buy Now</button>
                    <button type="button" class="btn btn-info">Add to Cart</button>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="./asset/buds2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">New Bud Collection</h5>
                    <button type="button" class="btn btn-success">Buy Now</button>
                    <button type="button" class="btn btn-info">Add to Cart</button>
                </div>
            </div>
        </div>

    </div>


    <?php 
     include "footer.php";
     ?>