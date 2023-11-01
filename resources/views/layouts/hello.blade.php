<html>

<head>
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>@yield('title')</h1>
        <ul>
            <li>@yield('menuber')</li>
        </ul>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>

</html>
