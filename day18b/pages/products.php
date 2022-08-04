<?php include 'includes\header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">

                <?php foreach ($product as $val) { ?>

                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="assests/products/<?php echo $val['image']?>" height="400px" alt="productNotFound" class="card-img-top" />
                        <div class="card-body">
                            <h3><?php echo $val['name']?></h3>
                            <p> <strong>Price  : </strong><?php echo $val['price']?></p>

                            <a href="" class="btn btn-outline-dark float-end" >Order Now</a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </section>

<?php include 'includes\footer.php'?>
