<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Home｜Nutrition Calc.</title>
        <meta name="description" itemprop="description" content="Home page">
        <meta name="keywords" itemprop="keywords" content="home">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
	<body class="md:flex md:flex-col w-full min-h-[100vh] sm:relative bg-amber-50 text-green-700">
    	<header>
			<div class="max-w-7xl mx-auto px-4 sm:px-6">
				<div class="py-4">
					<p class="text-[6vw] md:text-[3vw]">Nutrition<br>Calc.</p>
				</div>
			</div>
		</header>
        <main class="md:grow md:relative">
            <div class="md:flex absolute w-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="title-area w-full md:w-1/2 relative">
                	<p class="text-[5vw] md:text-2xl text-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">今日は何をしますか？</p>
                </div><!-- title-area -->
                <div class="menu-area md:w-1/2 md:text-center md:relative hidden md:inline-block">
                	<div class="menu-area_list text-left md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
                		<ul>
                			<li class="mb-4"><a href="{{ route('order.create')}} ">食材を登録する</a></li>
                			<li class="mb-4"><a>栄養を計算する</a></li>
                			<li><a>食材の詳細を見る</a></li>
                		</ul>
                	</div><!-- menu-area_list -->
                </div><!-- menu-area -->
	        </div>
        </main>
        <footer class="absolute bottom-0">
			<div class="max-w-7ml mx-atuo px-4 sm:px-6">
				<div class="py-4 text-left">
					<p class="text-center text-[3vw] md:text-base">Copyright© Hal40n All rights reserved.
				</div>
			</div>
		</footer>
    </body>
</html>