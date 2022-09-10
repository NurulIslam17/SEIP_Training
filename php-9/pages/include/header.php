<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


    <title>Document</title>
</head>

<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-md bg-warning sticky-top">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand"> <h4 class="fw-bold text-dark"> nW/3</h4></a>

        <div>
            <ul class="navbar-nav ms-auto">
                <li> <a href="action.php?page=home" class="nav-link text-dark"> Home </a></li>
                <li> <a href="action.php?page=about" class="nav-link text-dark"> About Us </a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown">
                        Products
                    </a>
                    <ul class="dropdown-menu bg-warning border-0 rounded-0">
                        <?php foreach ($allCategory as $data) { ?>
                            <li class="bg-warning "><a class="dropdown-item" href="action.php?page=category&cate_is=<?php echo $data['id']?>"> <?php echo $data['name']?> </a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li> <a href="action.php?page=gallery" class="nav-link text-dark"> Gallery </a></li>
                <li> <a href="action.php?page=calculator" class="nav-link text-dark"> Calculator </a></li>
                <li> <a href="action.php?page=contact" class="nav-link text-dark"> Contact Us </a></li>
            </ul>
        </div>
    </div>
</nav>