<?php include 'includes/header.php'?>
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 pe-0" >
                    <img src="assets/products/cal2.jpg" alt="imgNotFound" width="100%" height="100%">
                </div>

                <div class="col-md-6 ps-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Even an Odd Checker</h4>
                        </div>

                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row pt-3">
                                    <label class="col-md-4">Enter Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="number" class="form-control" placeholder="Enter Number">
                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <label class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <textarea cols="45" rows="6" class="form-control"> <?php echo isset($evenOddRes)?$evenOddRes : " " ?> </textarea>
                                    </div>
                                </div>

                                <div class="row pt-3">
                                    <input type="submit" name="evenOddBtn" class="btn btn-success" value="Check Now">
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
<?php include 'includes/footer.php'?>