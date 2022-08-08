<?php include "includes/header.php"; ?>
    <h3 class="text-center pt-3">Product Details</h3>
    <section class="py-4">
        <div class="container">
            <div class="row">

                <div class="col-md-6 pe-0">
                    <div class="card" style="height: 450px">
                        <img src="assets/products/<?php echo $detailsProduct['image']?>" class="img-fluid" style="height: 100%"/>
                    </div>
                </div>
                <div class="col-md-6 ps-0">
                    <div class="card" style="height: 450px">

                            <div class="card-body border-red-0 ">
                                <h3><?php echo $detailsProduct['name']?></h3>
                                <p><strong>Price</strong> <?php echo $detailsProduct['price']?> TK</p>
                                <div>
                                    <p><?php echo $detailsProduct['description']?></p>
                                </div>


                            </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-secondary text-light btn-outline-success float-end">Order Now</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
<?php include "includes/footer.php"; ?>
