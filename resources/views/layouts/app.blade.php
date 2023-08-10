<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/jquery-ui.min.css') }}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery.lineProgressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/aos.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script> --}}

    <title>@yield('title')</title>
</head>

<body>
    @yield('content')
</body>

</html>
