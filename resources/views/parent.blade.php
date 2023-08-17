<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ secure_asset('css/sanitize.css') }}">
    @yield('pageCss')
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ secure_asset('images/lead_favicon.ico') }}">
    <title>@yield('title')</title>
</head>
<header>
    <!-- elements at the top -->
    <div class="humburger-menu">
        <input type="checkbox" id="menu-btn-check">
        <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <div class="menu-content">
            <ul class="list">
                @yield('sub')
            </ul>
        </div>
    </div>
    <!-- elements in the top -->
</header>
<body>
    @yield('main')
</body>
<footer>
    <div style="height:400px;"></div>
</footer>
</html>