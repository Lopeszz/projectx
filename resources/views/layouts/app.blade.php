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

    <title>@yield('title')</title>
</head>

<body>
    @yield('content')

</body>

</html>
