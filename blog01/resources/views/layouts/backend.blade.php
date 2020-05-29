<!DOCTYPE html>
<html>
<head>
    <title>Admin: @yield('tieu_de')</title>
    <style>
        header{ color: red; font-size: 25px;}
        footer{ color: blue; font-size: 25px;}
    </style>
</head>
<body>
    <header> Đầu trang @yield('block_them') </header>
    <hr>
        @yield('noi_dung')
    <hr>
    <footer>Cuối trang</footer>
</body>
</html>
