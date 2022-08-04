<?php include 'includes\header.php'?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive table-striped">
                        <thead>
                            <tr class="bg-primary text-light text-center">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mejor</th>
                                <th>City</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($students as $student) { ?>

                            <tr class="text-center">
                                <td> <?php echo $student['name']?> </td>
                                <td> <?php echo $student['email']?> </td>
                                <td> <?php echo $student['Mejor']?> </td>
                                <td> <?php echo $student['city']?> </td>
                            </tr>

                        <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes\footer.php'?>

