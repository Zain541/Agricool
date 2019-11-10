<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Famie - Farm Services &amp; Organic Food Store Template | Home</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/core-img/favicon.ico')}}">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--font-->


    <!--scss-->
    <link rel="stylesheet" href="{{asset('scss/backtotop.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/blog.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/breadcrumb.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/buttons.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/contact.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/footer.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/header.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/heading.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/hero.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/homepage.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/preloader.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/robot.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/shop.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/spacing.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/style.scss')}}">
    <link rel="stylesheet" href="{{asset('scss/widget.scss')}}">

    <style>
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    </style>
    @yield('styles')
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
@include('includes.partials.head')
@yield('content')


@include('includes.partials.footer')
@yield('scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Owl Carousel js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Classynav -->
<script src="{{asset('js/classynav.js')}}"></script>
<!-- Wow js -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Sticky js -->
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<!-- Magnific Popup js -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Scrollup js -->
<script src="{{{asset('js/jquery.scrollup.min.js')}}}"></script>
<!-- Jarallax js -->
<script src="{{asset('js/jarallax.min.js')}}"></script>
<!-- Jarallax Video js -->
<script src="{{asset('js/jarallax-video.min.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>

</body>

</html>
