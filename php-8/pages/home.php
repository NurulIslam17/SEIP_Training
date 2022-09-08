<?php include 'include/header.php'?>
    <section class="mt-3">
        <div class="container">
            <div class="row mb-2">
                <h3 class="text-center"> All Products</h3>
            </div>
            <div class="row">

                <?php foreach ($allProducts as $val){ ?>

                    <div class="col-md-4 mb-3">
                        <div class="card card-body">
                            <img src="assets/products/<?php echo $val['product_image']?>" class="card-img-top" style="width: 100%;height: 200px" alt="imgMissing" />
                            <h5 class="mt-2"> <strong>Product Name : </strong>   <?php echo $val['name']?>    </h5>
                            <h6>  <strong>Product price : </strong>  <?php echo $val['price']?> TK   </h6>
                            <h6>  <strong>Company Name : </strong>  <?php echo $val['company_name']?>   </h6>

                            <div class="row">
                                <div class="col-md-3 ms-auto">
                                    <a href="action.php?page=product_details&&id=<?php echo $val['id']?>" class="btn bg-red text-light rounded-0">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>


        </div>

    </section>
<?php include 'include/footer.php'?>


