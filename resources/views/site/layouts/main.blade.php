<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('global/feathericon-release')}}/css/feathericon.min.css">

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="icon" href="{{ asset('global') }}/img/iconheader.png" type="image/icon type" style="width: 20%" />

    <title>ColdWheels | @yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('global/cyborg-1.0.0') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="{{ asset('global/cyborg-1.0.0') }}/assets/css/fontawesome.css">
        <link rel="stylesheet" href="{{ asset('global/cyborg-1.0.0') }}/assets/css/templatemo-cyborg-gaming.css">
        <link rel="stylesheet" href="{{ asset('global/cyborg-1.0.0') }}/assets/css/owl.css">
        <link rel="stylesheet" href="{{ asset('global/cyborg-1.0.0') }}/assets/css/animate.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>

    @include('site.layouts.header')

    @yield('content')

    <br>

    <br>

    @include('site.layouts.footer')

    @include('sweetalert::alert')



    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('global/cyborg-1.0.0') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('global/cyborg-1.0.0') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ asset('global/cyborg-1.0.0') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('global/cyborg-1.0.0') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('global/cyborg-1.0.0') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('global/cyborg-1.0.0') }}/assets/js/popup.js"></script>
    <script src="{{ asset('global/cyborg-1.0.0') }}/assets/js/custom.js"></script>

    <script>
        feather.replace()
    </script>

</body>

</html>
