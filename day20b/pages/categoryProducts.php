<?php include 'includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($categoryProducts as $categoryProducts) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/products/<?php echo $categoryProducts['image']?>" height="300" alt="NotFound" class="card-img-top img-hover-effect">
                        <div class="card-body">
                            <h4><?php echo $categoryProducts['name']?></h4>
                            <p><strong>Price : </strong> <?php echo $categoryProducts['price']?> TK</p>
                            <a href="" class="btn btn-outline-primary float-end">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section>

<?php include  'includes/footer.php'?>

