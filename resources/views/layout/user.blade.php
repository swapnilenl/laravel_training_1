<html>
    <head>
        <!--Page title append here-->
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        @yield('css_content')
    </head>
    <body>
        <div class="container">
            <!--Main HTML contain append here-->
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('js_content')
</html>