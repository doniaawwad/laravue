<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CMS</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>

        <div id="app">

             <div class="container-fluid">
                 <div class="col-md-12">
                     <admin-menu></admin-menu>
                 </div>

                    </div>


            <div class="container" style="padding: 20px;">
                <div class="row">

                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
    </body>
</html>
