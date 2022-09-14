<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-md bg-warning">

        <div class="container">
            <a href="/" class="navbar-brand"> <i class="fa-solid fa-code fa-2x text-danger"></i> </a>

            <ul class="navbar-nav ms-auto">
                <li> <a href="{{ route('home') }}" class="nav-link text-dark fw-bold"> Home</a> </li>
                <li> <a href="" class="nav-link text-dark fw-bold"> About</a> </li>
                <li> <a href="" class="nav-link text-dark fw-bold"> Gallery</a> </li>
                <li> <a href="" class="nav-link text-dark fw-bold"> Contact</a> </li>
                <li> <a href="{{ route('home') }}" class="nav-link text-dark fw-bold"> Login</a> </li>
            </ul>
        </div>

    </nav>


    @yield('body')


    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/lightbox-plus-jquery.js')}}"></script>

    <section class="bg-dark mt-auto">
        <p class="text-center text-light my-3"> &copy; All Right Reserved. Designed and Developed <i class="fa-solid fa-heart clr-red px-2"></i>by Nurul</p>
    </section>
</body>
</html>
