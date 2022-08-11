<?php include 'includes/header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pe-0">
                    <img src="assets/products/calculator.jpg" height="100%" width="100%" >
                </div>
                <div class="col-md-6 ps-0">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Series</h1>
                        </div>

                        <div class="card-body">

                            <form action="action.php" method="post">
                                <div class="row mt-3">
                                    <label class="col-md-4">Start Number</label>
                                    <div class="col-md-8 ">
                                        <input type="number" name="strat" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Ending Number</label>
                                    <div class="col-md-8 ">
                                        <input type="number" name="end" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label class="col-md-4">Result</label>
                                    <div class="col-md-8 ">
                                        <textarea class="form-control" rows="5" cols="43"><?php echo isset($serieRes)?$serieRes : " " ?></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3 text-center">
                                    <input class="btn btn-success form-control" name="resultSeries" type="submit" value="Result">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'?>
