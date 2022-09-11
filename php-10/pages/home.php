<?php include 'include/header.php'?>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="text-center"> Register Student</h3>
                        </div>
                        <div class="card-body">

                            <form action="action.php" method="post">

                                <div class="row mb-3">
                                    <label class="col-md-4" for=""> Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="student_name" placeholder="Enter Student Name" class=" rounded-0 form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4" for=""> Student SEID</label>
                                    <div class="col-md-8">
                                        <input type="number" name="student_seid" placeholder="Enter Student SEID" class=" rounded-0 form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4" for=""> Student Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" placeholder="Enter Student Email" class=" rounded-0 form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4" for=""> Student Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" placeholder="Enter Student phone" class=" rounded-0 form-control"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4" for=""> </label>
                                    <div class="col-md-8">
                                        <input type="submit" name="addStudent" value="Add Student" class="btn btn-success rounded-0"/>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php include 'include/footer.php'?>