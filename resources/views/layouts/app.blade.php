<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.

        @show

        <div id="app" class="container">
            <p>hello</p>
            <example></example>
        </div>

        <script src="/js/app.js"></script>

    </body>
</html>
