<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/all.css">
</head>
<body>

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

    <script src="../assests/js/bootstrap.bundle.js"></script>
</body>
</html>