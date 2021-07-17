    <?php include "header.php"; ?>
    <!-- Banners Div  -->

    <div class="container-fluid row my-3">

        <div class="col-9">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $asset;?>/laptop.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lead the Era with 10th Generation</h5>
                            <p>See our Latest Generation Laptops Collection in Affordable Prices</p>
                            <span><a href="products.php?comingname='Laptops'"><button type="button" class="btn btn-success">Shop Now</button></a>
                            <a href="products.php?comingname='Laptops'"><button type="button" class="btn btn-info">More Info</button></a></span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $asset;?>/headphone.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>High Base with Super Noice Cancellation</h5>
                            <p>See our Brand New Imported Headphone Collection with super discounts and Awesome finishes</p>
                            <span><a href="products.php?comingname='Headphones'"><button type="button" class="btn btn-success">Shop Now</button></a>
                            <a href="products.php?comingname='Headphones'"><button type="button" class="btn btn-info">More Info</button></a></span>
                        </div>
                    </div>
                    <div class="carousel-item">
             
                        <img src="<?php echo $asset;?>/iphone.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Trust me Apple Bionic is Blaster</h5>
                            <p>See Our Super Big Iphone Collection, with elegent and Customize Designs</p>
                            <span><a href="products.php?comingname='Phones'"><button type="button" class="btn btn-success">Shop Now</button></a>
                            <a href="products.php?comingname='Phones'"><button type="button" class="btn btn-info">More Info</button></a></span>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

        <!-- Collection Section -->

        <div class="col-3" id="collection">
            <div class="card mb-3" style="width: 18rem;">
                <img src="<?php echo $asset;?>/watch2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Smart Watch Collection</h5>
                    <a href="products.php?comingname='Watches'"><button type="button" class="btn btn-success">Shop Now</button></a>
                    <a href="products.php?comingname='Watches'"><button type="button" class="btn btn-info">Visit Collection</button></a>
                </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $asset;?>/buds2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Latest Bud Collection</h5>
                    <a href="products.php?comingname='Accessories'"><button type="button" class="btn btn-success">Shop Now</button></a>
                    <a href="products.php?comingname='Accessories'"><button type="button" class="btn btn-info">Visit Collection</button></a>
                </div>
            </div>
        </div>

    </div>


    <!-- Featured Products section  -->

    <div class="container-fluid row my-5">
        <div class="col-4">
            <hr>
        </div>
        <div class="col-4 text-center">
            <p class="hero-text">Featured Products</p>
        </div>
        <div class="col-4">
            <hr>
        </div>
    </div>

    <div class="container-fluid row my-2">
        <?php

        include "config.php";
        $sql = "SELECT * FROM product  limit 8";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['pstatus'] == 'Yes' && $row['pprice'] > '0') {
        ?>
                    <div class="col-3 d-inline-block product-div my-1">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $images;?>/<?php echo $row['pmimg']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="attribute-text">Featured</p>
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
            }
        } ?>

    </div>

    <?php
    mysqli_close($conn);
    ?>
    <!-- Products on Sale  -->


    <div class="container-fluid row my-5">
        <div class="col-4">
            <hr>
        </div>
        <div class="col-4 text-center">
            <p class="hero-text">Products on Sale</p>
        </div>
        <div class="col-4">
            <hr>
        </div>
    </div>

    <div class="container-fluid row my-2">
        <?php
        include "config.php";
        $sql1 = "SELECT * FROM product  limit 4";
        $result1 = mysqli_query($conn, $sql) or die("Query Unsuccessful");
        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row1['psprice'] > '0' && $row1['pprice'] > '0') {
        ?>
                    <div class="col-3 d-inline-block product-div my-1">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $images;?>/<?php echo $row1['pmimg']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="attribute-text">On Sale</p>
                                <h4 class="card-title"><?php echo $row1['pname']; ?></h4>
                                <strong>RS <?php echo $row1['psprice']; ?> - <del>RS <?php echo $row1['pprice']; ?></del></strong>
                                <p id="category-text"><?php echo $row1['category']; ?></p>
                                <a href="addToCart.php?pid='<?php echo $row1['pid']; ?>'"><button type="button" id="add-to-cart">Add to Cart</button></a>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item text-center">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" id="add-to-cart-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong id="short-des">Short Description</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $row1['psdes']; ?>
                                                <a href="viewDetails.php?pid='<?php echo $row1['pid']; ?>'"><button type="button" id="add-to-cart">View More</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        <?php }
            }
        } ?>

    </div>

    <?php
    mysqli_close($conn);
    ?>

    <!-- Icons Section  -->

    <div class="container-fluid row my-3 icon-section">
        <div class="col-4 text-center">
            <i class="fas fa-truck"></i>
            <p>Free Shipping all products above 10,000Rs</p>
        </div>
        <div class="col-4 text-center">
            <i class="far fa-heart"></i>
            <p>New products added everyday</p>
        </div>
        <div class="col-4 text-center">
            <i class="far fa-star"></i>
            <p>We Belive in Customer Care</p>
        </div>
    </div>






    <!-- New Arrivals Products section  -->

    <div class="container-fluid row my-5">
        <div class="col-4">
            <hr>
        </div>
        <div class="col-4 text-center">
            <p class="hero-text">New Arrivals</p>
        </div>
        <div class="col-4">
            <hr>
        </div>
    </div>

    <div class="container-fluid row">
        <?php
        include "config.php";
        $sql2 = "SELECT * FROM product limit 8";
        $result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful");
        if (mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_assoc($result2)) {
                if ($row2['pprice'] > '0') {
        ?>
                    <div class="col-3 d-inline-block product-div my-1">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $images;?>/<?php echo $row2['pmimg']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="attribute-text">New Arrivals</p>
                                <h4 class="card-title"><?php echo $row2['pname']; ?></h4>
                                <strong>RS <?php echo $row2['pprice']; ?></strong>
                                <p id="category-text"><?php echo $row2['category']; ?></p>
                                <a href="addToCart.php?pid='<?php echo $row2['pid']; ?>'"><button type="button" id="add-to-cart">Add to Cart</button></a>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item text-center">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" id="add-to-cart-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong id="short-des">Short Description</strong>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?php echo $row2['psdes']; ?>
                                                <a href="viewDetails.php?pid='<?php echo $row2['pid']; ?>'"><button type="button" id="add-to-cart">View More</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        <?php }
            }
        } ?>

    </div>
    <?php
    mysqli_close($conn);
    ?>

    <!-- Categories -->

    <div class="container-fluid row my-4">
        <div class="col-4">
            <hr>
        </div>
        <div class="col-4 text-center">
            <p class="hero-text">Popular Categories</p>
        </div>
        <div class="col-4">
            <hr>
        </div>


        <div class="container-fluid row category">
            <a href="products.php?comingname='Laptops'" id="laptop-cat" class="col">
                <p>Laptops</p>
            </a>
            <a href="products.php?comingname='Watches'" class="col" id="watch-cat">
                <p>Watches</p>
            </a>
            <a href="products.php?comingname='Headphones'" class="col" id="headphone-cat">
                <p>Headphones</p>
            </a>
            <a href="products.php?comingname='Mobiles'" class="col" id="mobile-cat">
                <p>Mobiles</p>
            </a>
        </div>
    </div>



    <!-- Blog section  -->
    <div class="container-fluid blog">
        <div class="text-center bg-white">
            <h1>Blog Section</h1>
        </div>
        <nav>
            <div class="nav nav-tabs border justify-content-center my-3" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Latest Techonology</a>
                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Customer Care</a>
                <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Visit to Our Store</a>
                <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Happy Customers</a>
                <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Community</a>

            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p style="color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deseruntdolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deserunt harum eligendi esse, architecto
                    sapiente, eveniet eos itaque officiis, reiciendis iusto nobis reprehenderit error voluptatem.</p>
                <br>
                <div class="text-center my-2">
                    <img src="<?php echo $asset;?>/buds2.jpg" alt="">
                    <img src="<?php echo $asset;?>/headphone2.jpg" alt="">
                    <img src="<?php echo $asset;?>/laptop2.jpg" alt="">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p style="color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deseruntdolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deserunt harum eligendi esse, architecto
                    sapiente, eveniet eos itaque officiis, reiciendis iusto nobis reprehenderit error voluptatem.</p>
                <br>
                <div class="text-center my-2">
                    <img src="<?php echo $asset;?>/watch2.jpg" alt="">
                    <img src="<?php echo $asset;?>/laptop2.jpg" alt="">
                    <img src="<?php echo $asset;?>/iphone2.jpg" alt="">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p style="color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deseruntdolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deserunt harum eligendi esse, architecto
                    sapiente, eveniet eos itaque officiis, reiciendis iusto nobis reprehenderit error voluptatem.</p>
                <br>
                <div class="text-center my-2">
                    <img src="<?php echo $asset;?>/iphone2.jpg" alt="">
                    <img src="<?php echo $asset;?>/laptop2.jpg" alt="">
                    <img src="<?php echo $asset;?>/watch2.jpg" alt="">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p style="color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deseruntdolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deserunt harum eligendi esse, architecto
                    sapiente, eveniet eos itaque officiis, reiciendis iusto nobis reprehenderit error voluptatem.</p>
                <br>
                <div class="text-center my-2">
                    <img src="<?php echo $asset;?>/watch2.jpg" alt="">
                    <img src="<?php echo $asset;?>/iphone2.jpg" alt="">
                    <img src="<?php echo $asset;?>/laptop2.jpg" alt="">
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p style="color:white;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deseruntdolor sit, amet consectetur adipisicing elit. Corporis fuga magni quaerat dicta perspiciatis deserunt harum eligendi esse, architecto
                    sapiente, eveniet eos itaque officiis, reiciendis iusto nobis reprehenderit error voluptatem.</p>
                <br>
                <div class="text-center my-2">
                    <img src="<?php echo $asset;?>/laptop2.jpg" alt="">
                    <img src="<?php echo $asset;?>/buds2.jpg" alt="">
                    <img src="<?php echo $asset;?>/watch2.jpg" alt="">
                </div>
            </div>

        </div>

    </div>


    <!-- Social Media Share Section -->

    <!-- News Letter -->


    <div class="container-fluid text-center" id="newsletter">
        <h3>SIGNUP FOR NEWSLETTER TODAY</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <form class="d-flex">
            <input class="form-control me-2" type="email" placeholder="email" aria-label="email">
            <button class="btn btn-outline-success" type="submit">Subscribe</button>
        </form>
    </div>

    <?php
    include "footer.php";
    ?>