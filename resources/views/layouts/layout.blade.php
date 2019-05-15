<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')| add billboard</title>

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="admin-body bg-dark">
        <div class='header'>
            @section('header')
            @show
        </div>



        <div class='sidebar'>
            @section('sidebar')
            @show
        </div>

        <div class='main'>
            @section('main')
            @show
        </div>

        <div class='footer'>
            @section('footer')
            @show
        </div>
    </body>
</html>