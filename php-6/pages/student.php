<?php include 'include/header.php'?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card mt-3">
                    <div class="card-header">
                        <h2 class="text-center"> <span> <i class="fa-sharp fa-solid fa-users me-3 text-danger"></i></span> Students Info</h2>
                    </div>

                    <div class="card-body">
                        <table class=" table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th class="text-center"> <span> <i class="fa-regular fa-id-badge text-danger"></i> </span> Id</th>
                                    <th class="text-center"> <span> <i class="fa-solid fa-user text-danger"></i></span> Name</th>
                                    <th class="text-center"> <span> <i class="fa-solid fa-envelope text-danger"></i></span> Email</th>
                                    <th class="text-center"> <span> <i class="fa-solid fa-phone text-danger"></i> </span>Phone</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($students  as $val){ ?>
                                    <tr>
                                        <td> <?php echo $val['id']  ?> </td>
                                        <td> <?php echo $val['name']  ?> </td>
                                        <td> <?php echo $val['email']  ?> </td>
                                        <td> <?php echo $val['phone']  ?> </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'include/footer.php'?>