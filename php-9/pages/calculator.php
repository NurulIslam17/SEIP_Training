<?php include 'include/header.php'?>
<section class="mt-5">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="card rounded-0">
                <div class="card-header">
                    <h4 class="text-center">Calculator</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="post">

                        <div class="row mb-3">
                            <label class="col-md-4">First Number</label>
                            <div class="col-md-8">
                                <input type="number" name="n1" placeholder="Enter First Number" class="form-control rounded-0" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4">Last Number</label>
                            <div class="col-md-8">
                                <input type="number" name="n2" placeholder="Enter Last Number" class="form-control rounded-0" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4">Operations</label>
                            <div class="col-md-8">
                                <input type="radio" name="operation" value=" + " />add
                                <input type="radio" name="operation" value=" - "/>Sub
                                <input type="radio" name="operation" value=" * "/>Mult
                                <input type="radio" name="operation" value=" / "/>Div
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4"><strong> Result </strong></label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo isset($res)? $res : '' ?>" class="form-control  rounded-0" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" name="btnRes" value="Result" class="btn btn-info text-dark fw-bold rounded-0" />
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'?>
