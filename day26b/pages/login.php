<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <section class="my-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-5 mx-auto">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="text-center">Login</h3>
                       </div>

                       <div class="card-body">
                           <form action="action.php" method="post">

                              <p class="text-danger text-center"> <?php echo isset($logAuth)?$logAuth:" " ?></p>

                               <div class="row my-4">
                                   <label for="" class="col-md-4">User Email</label>
                                   <div class="col-md-8">
                                       <input type="email" name="email" class="form-control" placeholder="Enter Email"/>
                                   </div>
                               </div>

                               <div class="row my-4">
                                   <label for="" class="col-md-4">User Password</label>
                                   <div class="col-md-8">
                                       <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
                                   </div>
                               </div>

                               <div class="row my-4">
                                   <label for="" class="col-md-4"></label>
                                   <div class="col-md-8">
                                       <input type="submit" name="login" class="btn btn-success" value="Login"/>
                                   </div>
                               </div>

                           </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>

    </section>

    <script src="assets/js/bootstrap.bundle.js">

    </script>
</body>
</html>