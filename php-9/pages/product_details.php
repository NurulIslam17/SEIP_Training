<?php include 'include/header.php'?>
    <section class="my-5">
        <div class="container">
            <div class="row">


                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center"> <?php echo $singleProd['name']?> Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/products/<?php echo $singleProd['product_image']?>" style="height: 350px;width: 100%">
                                </div>
                                <div class="col-md-6">
                                    <p></p>
                                    <p> <span> <i class="fa-solid fa-file-pen clr-red pe-2"></i> </span> <?php echo $singleProd['description']?></p>
                                    <p> <span> <i class="fa-sharp fa-solid fa-dollar-sign clr-red pe-2"></i> </span> <?php echo $singleProd['price']?> TK</p>
                                    <p> <span> <i class="fa-brands fa-product-hunt clr-red pe-2"></i> </span> <?php echo $singleProd['brand_id']?></p>
                                    <p> <span> <i class="fa-solid fa-gear clr-red pe-2"></i> </span> <?php echo $singleProd['category_id']?></p>

                                    <a href="#" class="btn btn-success rounded-0">Buy Now</a>

                                </div>>
                            </div>
                        </div>
                    </div>


            </div>
        </div>

    </section>
<?php include 'include/footer.php'?>