<?php include  'include/header.php'?>
    <section class="mt-2">
        <div class="container">
            <h3 class="text-center mb-0 pb-0">My Gallery</h3>
            <h3 class="text-center mt-0 pt-0">---------------</h3>
            <div class="row">
                <div class="col-md-10 mx-auto">
                        <div class="row ">
                            <?php foreach ($galleryImg as $x) { ?>
                                <div class="col-md-4  gallery mb-3">
                                    <a href="assets/gallery/<?php echo $x['name']?>" data-lightbox="models" data-title="<?php echo $x['caption']?>">
                                        <img src="assets/gallery/<?php echo $x['name']?>" class="border border-info"  style="height: 220px; width: 100%;">
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                </div>
            </div>
        </div>

    </section>
<?php include  'include/footer.php'?>
