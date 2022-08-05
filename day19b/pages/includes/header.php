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

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="text-uppercase navbar-brand fw-bolder">Logo</a>

        <div>
            <ul class="navbar-nav">
                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=about" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($categoryName as $val) { ?>

                            <li><a href="action.php?page=category&&id=<?php echo $val['id']?>" class="dropdown-item"><?php echo $val['Name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="action.php?page=contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>