<?php include 'include/header.php'?>
    <div class="container">
        <div class="row">
            <div class="col-md-11 mt-4 mx-auto">

                <?php foreach ($singleOne as $val){ ?>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center"> About <?php echo $val['name']?> </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/aboutImg/<?php echo $val['image']?>" alt="Not_Found" style="width: 100%; height: 350px"/>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-justify"><span class="pe-3"> <i class="fa-solid fa-1x clr-red fa-user-tie"></i>  </span>  <?php echo $val['description']?>    </p>
                                    <p> <span class="pe-3">  <i class="fa-solid fa-1x clr-red fa-code"></i></span>  <?php echo $val['position']?>     </p>
                                    <p> <span class="pe-3">  <i class="fa-solid fa-1x clr-red fa-graduation-cap"></i> </span>  <?php echo $val['education']?>     </p>
                                    <p> <span class="pe-3">  <i class="fa-solid fa-1x clr-red fa-globe"></i> </span>  <?php echo $val['website']?>     </p>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
<?php include 'include/footer.php'?>