<?php include 'include/header.php'?>
    <section class="mt-5">
        <div class="container">
            <div class="col-md-5 mx-auto">
                <div class="card rounded-0">
                    <div class="card-header">
                        <h4 class="text-center">Contact Form</h4>
                    </div>
                    <div class="card-body bg-info">
                        <form action="action.php" method="post">

                            <div class="row mb-3">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" placeholder="Enter First Name" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"><strong> Full Name </strong></label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($fullName) ?  $fullName:' ' ?>" placeholder="Full Name" class="form-control  rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btnFullName" value="Full name" class="btn btn-warning text-dark fw-bold rounded-0" />
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'include/footer.php'?>
