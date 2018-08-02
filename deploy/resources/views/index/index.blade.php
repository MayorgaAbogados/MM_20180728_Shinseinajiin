<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>&lt jl &gtcd | Engennering, Development, Science and more.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
               <span>&lt</span> jl <span>&gt</span>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">developer</a>
                    <a href="https://laracasts.com">A.I.</a>
                    <a href="https://laravel-news.com">control systems</a>
                    <a href="https://forge.laravel.com">robotic</a>
                    <a href="https://github.com/laravel/laravel">portfolio</a>
                </div>
                <div id="app">
                        <example-component></example-component>

                </div>
                
            </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
