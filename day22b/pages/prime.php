<?php include 'includes/header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-0" style=" height: 350px">
                    <img src="assets/products/cal1.jpg" width="100%" height="100%">
                </div>

                <div class="col-md-6 ps-0" style=" height: 350px">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Prime Number</h3>
                            </div>

                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <div class="row mt-3">
                                        <label class="col-md-4">User Number</label>
                                        <div class="col-md-8">
                                            <input type="number" name="number" class="form-control" placeholder="Number">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <label class="col-md-4">Result</label>
                                        <div class="col-md-8">
                                           <textarea class="form-control" cols="45" rows="5"> <?php echo isset($res)? $res : " "?> </textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3 text-center">
                                        <div class="col-md-12">
                                            <input type="submit" name="primeBtn" class="btn btn-success form-control" value="Result">
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ?>