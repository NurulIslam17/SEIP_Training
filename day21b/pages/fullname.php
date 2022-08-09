<?php include 'includes/header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/products/slider1.jpg" height="400" >
                </div>
                <div class="col-md-6">
                    <div class="card p-5 pt-3" style="height: 400px">
                        <div class="card-header">
                            <h3 class="text-center">Fullname</h3>
                        </div>
                        <form action="action.php" method="post">
                            <div class="mt-3">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter Firstname" class="form-control" name="first_name"/>
                            </div>
                            <div class="mt-3">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Lastname" class="form-control" name="last_name"/>
                            </div>
                            <div class="mt-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control" value=" <?php echo isset($result)? $result :' ' ?> "/>
                            </div>
                            <div class="mt-3 text-center">
                                <input type="submit"  class="btn btn-success" name="fullname_btn"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php include 'includes/footer.php' ?>