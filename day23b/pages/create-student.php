<?php include 'includes/header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/image/create (3).png" alt="createImage" height="100%" width="100%" >
                </div>

                <div class="col-md-6 ps-0">

                    <div class="card">

                        <div class="card-header">
                            <h2 class="text-center">Save Student Info</h2>
                        </div>

                        <div class="card-body">

                            <form action="action.php" method="post" enctype="multipart/form-data">

                                <div class="row mt-2">
                                    <label class="col-md-4">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Student Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Student Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Student Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4"> Student <br> Description</label>
                                    <div class="col-md-8">
                                        <textarea rows="3" cols="44" name="desc" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <input type="submit" name="saveInfo" class="btn btn-success" value="Save Information">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php include 'includes/footer.php'?>
