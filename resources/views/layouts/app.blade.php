<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
            <title>@yield('title')｜Nutrition Calc.</title>
            <meta name="description" itemprop="description" content="@yield('description')">
            <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
            <script src="https://cdn.tailwindcss.com"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
	<body class="flex flex-col min-h-[100vh] bg-amber-50 text-green-700">
        @yield('header')
        <div class="contents">
            <!-- コンテンツ -->
            <main class="grow">
                @yield('content')
            </main>
        </div><!-- contents -->
        @yield('footer')
    </body>
</html>