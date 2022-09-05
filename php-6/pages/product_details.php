<?php include 'include/header.php'?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">

            <?php foreach ($onlySingleProd as $x) { ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"> <?php echo $x['product_name'] ?> Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo $x['product_img'] ?> " style="height: 300px;width: 100%">
                            </div>

                            <div class="col-md-6">
                                <h4> <strong>Product Name :</strong> <?php echo $x['product_name'] ?> </h4>
                                <p> <?php echo $x['Product_description'] ?></p>
                                <p><strong>  Price : </strong> <?php echo $x['Product_Price'] ?> TK</p>
                                <p><strong>  Brand Name : </strong> <?php echo $x['product_company'] ?></p>
                                <a href="#" class="btn btn-success position-relative bottom-0"> Buy Now</a>
                            </div>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
<?php include 'include/footer.php'?>

