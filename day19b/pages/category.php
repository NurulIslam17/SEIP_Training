<?php include 'includes/header.php'?>
    <h3 class="text-center pt-4">All Product</h3>

<section class="py-2">
    <div class="container">
        <div class="row mb-3">
            <?php foreach ($products as $item) { ?>

                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="assests/products/<?php echo $item['image'] ?>" height="250" class="img-hover-effect card-img-top"/>

                        <div class="card-body">
                            <h3><?php echo $item['name'] ?></h3>
                            <p><strong>Price : </strong> <?php echo $item['pricr'] ?></p>
                            <a href="" class="btn btn-outline-primary float-end">Buy Now</a>
                        </div>
                    </div>
                </div>
            <?php  } ?>

        </div>
    </div>

</section>
<?php include 'includes/footer.php'?>
