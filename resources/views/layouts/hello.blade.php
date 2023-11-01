<html>

<head>
    <title>@yield('title')</title>
    <style>
        th{
            background-color: gray;
            color: white;
        }
        table,th,td{
            border: 1px solid black;
        }
        input[name="send"]{
            float: right;
        }
        form{
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>@yield('title')</h1>
        <h3>@yield('menuber')</h3>
        <ul>
            <li><a href="/book">表示ページ</a></li>
            <li><a href="/book/add">追加ページ</a></li>
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
