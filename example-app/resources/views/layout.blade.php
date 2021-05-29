<html>
    <head>
        <title>App Name - @yield('title')</title>
        @include('meta')
    </head>
    <body>
    @include('header')
        @section('sidebar')
           
        @show

        <div class="container">
            @yield('content')
        </div>
        @include('foorter')
    </body>
</html>