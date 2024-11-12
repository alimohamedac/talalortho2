<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/img/main-logo.png') }}">

    <title>@yield('pageTitle')</title>
    <meta name="description" content="@yield('pageDescription')">
    <meta name="keywords" content="@yield('pageKeywords')">
    <meta name="author" content="@yield('pageTitle')">
    <meta property='og:title' content='@yield('pageTitle')'>
    <meta property="og:description" content="@yield('pageDescription')">
    <meta property="og:site_name" content="@yield('pageTitle')"/>
    <meta property="og:type" content="article" />
    <meta property="og:image" content="@yield('pageImage')">
    <meta property="og:image:secure_url" content="@yield('pageImage')">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/normalize.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}" />

    <!-- for AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css.map') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}" />
    <!-- Tajawal Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
</head>
