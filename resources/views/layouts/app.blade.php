<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
            <title>@yield('title')｜Nutrition Calc.</title>
            <meta name="description" itemprop="description" content="@yield('description')">
            <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
            <script src="https://cdn.tailwindcss.com"></script>
    </head>
	<body>
        @yield('header')
        <div class="contents">
            <!-- コンテンツ -->
            <div class="main">
                @yield('content')
            </div><!-- main -->
        </div><!-- contents -->
        @yield('footer')
    </body>
</html>