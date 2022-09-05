<?php include 'include/header.php'?>
    <section class="mt-3">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $x) { ?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo $x['product_img']?>" style="width: 100%; height: 200px" class="card-img-top img-fluid"/>
                            <h5 class="mt-3"><strong> Product Name : </strong> <?php echo $x['product_name']?> </h5>
                            <p class="my-0 py-0"><strong> Price : </strong> <?php echo $x['Product_Price']?> TK</p>
                            <p><strong> Company : </strong> <?php echo $x['product_company']?></p>
                            <a href="action.php?page=Product_details&&id=<?php echo $x['id'] ?>" class="btn btn-success ms-auto"> Details</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

    </section>
<?php include 'include/footer.php'?>