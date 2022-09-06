<?php include 'include/header.php'?>
    <section class="my-5">
        <div class="container">
            <div class="row">

                <?php foreach ($singleProd as $val) { ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center"> <?php echo $val['name']?> Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/products/<?php echo $val['product_image']?>" style="height: 350px;width: 100%">
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                    <p> <span> <i class="fa-solid fa-file-pen clr-red pe-2"></i> </span> <?php echo $val['description']?></p>
                                    <p> <span> <i class="fa-sharp fa-solid fa-dollar-sign clr-red pe-2"></i> </span> <?php echo $val['price']?> TK</p>
                                    <p> <span> <i class="fa-brands fa-product-hunt clr-red pe-2"></i> </span> <?php echo $val['company_name']?></p>

                                    <a href="#" class="btn btn-success rounded-0">Buy Now</a>

                                </div>>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

    </section>
<?php include 'include/footer.php'?>