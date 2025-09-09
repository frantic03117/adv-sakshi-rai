<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Advocate Sakshi Rai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('public/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="{{ url('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('public/assets/css/responsive.css') }}" rel="stylesheet">
    {{-- <link href="css/responsive.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="wrapper">
        @include('layout.header')
        @include('layout.navbar')
        @yield('content')
        @include('layout.footer')
    </div>
    <!-- JavaScript Libraries -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('public/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('public/assets/js/main.js') }}"></script>
</body>

</html>
