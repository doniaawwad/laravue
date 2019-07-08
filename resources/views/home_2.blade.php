<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CMS</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
    <nav class="navbar nav-dark navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="/">
                <img src="images/logo-dark.png" alt="logo">
            </a>

        </div>
    </nav>
    <header class="header2 hvector2 valign" data-scroll-index="0">

        <div class="container mt-50">
            <div class="row">
                <div class="col-lg-6 caption valign">
                    <div>


                        @yield('content')




                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="home-img">
                        <img src="images/4.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
