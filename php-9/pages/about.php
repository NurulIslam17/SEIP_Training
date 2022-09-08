
<?php include 'include/header.php'?>

<section class="abtSec">
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-us"></div>
            <div class="col-md-6">
                <h1 class="text-uppercase mt-5 pt-2">Express the <span class="clr-red fw-bold"> Idea <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Explore</span> The Universe</h1>
                <p class="text-justify fs-18 my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dignissimos, distinctio doloribus dolorum eius, eveniet impedit minus nesciunt numquam provident quod repellendus reprehenderit saepe vero voluptate. Ipsum, odio, similique! Amet culpa dicta distinctio dolor doloribus eos est eum facilis harum in mollitia nisi nostrum quia repellendus repudiandae sit, soluta voluptates?</p>

                <a href="#" class="btn rounded-0 border-0 exlBtn"> Explore </a>
            </div>
        </div>
    </div>
</section>

<section class="team my-3">
    <div class="container">

        <div class="row">
            <h1 class="text-center clr-red fw-bold fs-32">Our Team</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet distinctio enim explicabo magni minima nostrum optio perspiciatis quas quasi voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur doloribus eum excepturi fugit libero omnis quibusdam soluta ullam vel!</p>
        </div>

        <div class="row">
            <?php foreach ($members as $val){ ?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/aboutImg/<?php echo $val['image']?>" class="card-img-top" style="width: 100%; height:200px" alt="Img_Not_Found"/>
                            <h4 class="text-center pb-0 mb-0"> <?php echo $val['name']?>  </h4>
                            <p class="text-center">  <?php echo $val['position']?>      </p>
                            <a href="action.php?page=aboutDetails&&id=<?php echo $val['id']?>" class="btn bg-red text-light rounded-0">About</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php include 'include/footer.php'?>
