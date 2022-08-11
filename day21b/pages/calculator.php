<?php include 'includes/header.php' ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/products/calculator.jpg" height="400px" />
                </div>
                <div class="col-md-6">
                    <div class="card card-body" style="height: 400px">

                        <form action="action.php" method="post">
                            <div class="card-header">
                                <h3 class="text-center">Simple Calculator</h3>
                            </div>
                            <div class="mt-2">
                                <label>Nnmber 1</label>
                                <input type="number" class="form-control" name="n1"  />
                            </div>

                            <div class="mt-2">
                                <label>Nnmber 2</label>
                                <input type="number" class="form-control" name="n2"  />
                            </div>
                            <div class="mt-2">
                                <label> Operation : </label>
                                <select name="operations">
                                    <option> --Select Operation-- </option>
                                    <option class="text-center" name="add" value="+"> + </option>
                                    <option class="text-center" name="sub" value="-"> - </option>
                                    <option class="text-center" name="mult" value="*"> * </option>
                                    <option class="text-center" name="div" value="/"> / </option>
                                    <option class="text-center" name="mod" value="%"> % </option>
                                </select>

                            </div>

                            <div class="mt-2">
                                <label>Result</label>
                                <input type="text" class="form-control" name="" value="<?php echo isset($result)? $result : '' ?>" />
                            </div>
                            <div class="mt-2">
                                <input type="submit" class="btn btn-outline-primary float-end" name="result"  /  >
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>
<?php include 'includes/footer.php' ?>