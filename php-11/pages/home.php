<?php include 'include/header.php'?>

    <section class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="text-center"> Registrstion </h3>
                        </div>

                        <div class="card-body rounded-0">
                            <form action="action.php" method="post">

                                <div class="row mb-2">
                                    <label class="col-md-4"> Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="student_name" class="form-control rounded-0" placeholder="Enter Name" />
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-md-4"> Student ID</label>
                                    <div class="col-md-8">
                                        <input type="number" name="student_id" class="form-control rounded-0" placeholder="Enter Id" />
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-md-4"> Student Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="student_email" class="form-control rounded-0" placeholder="Enter Email" />
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-md-4"> Student Department</label>
                                    <div class="col-md-8">
                                        <input type="text" name="student_department" class="form-control rounded-0" placeholder="Enter Department" />
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-md-4"> Student Address</label>
                                    <div class="col-md-8">
                                        <input type="text" name="student_address" class="form-control rounded-0" placeholder="Enter Address" />
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <label class="col-md-4"> </label>
                                    <div class="col-md-8">
                                        <input type="submit" name="addStudent" value="Add Student" class="btn btn-success rounded-0"  />
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