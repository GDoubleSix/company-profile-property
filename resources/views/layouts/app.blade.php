<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>@yield('title')</title>

</head>

<body>
    @include('partials.mobileMenu')
    @yield('mobileMenu')

    @include('partials.navbar')
    @yield('navbar')

    @include('partials.hero')
    @yield('hero')
    
    @include('partials.section')
    @yield('section')
    
    @include('partials.features-1')
    @yield('features-1')

    @include('partials.testimonials')
    @yield('testimonials')

    @include('partials.section-4')
    @yield('section-4')

    <!--footer-->
    @include('partials.footer.section-footer')
    @yield('section-footer')

    @include('partials.footer.section-5-footer')
    @yield('section-5-footer')
    
    @include('partials.footer.site-footer')
    @yield('site-footer')

    <!--loader-->
    @include('partials.preloader.loader')
    @yield('loader')

    @include('services')
    @yield('content')
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>