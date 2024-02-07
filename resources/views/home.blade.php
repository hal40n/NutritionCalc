<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Home｜Nutrition Calc.</title>
<meta name="description" itemprop="description" content="Home page">
<meta name="keywords" itemprop="keywords" content="home">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
</head>
<body class="overflow-hidden font-serif md:flex md:flex-col w-full min-h-[100vh] sm:relative text-white drop-shadow-[1px_1px_2px_rgba(0, 0, 0, 0.8)] bg-[url('/images/pizza-2589577_1280.jpg')]">
	<header class="fixed top-0" id="header">
		<div class="max-w-7xl mx-auto px-4 sm:px-6">
			<div class="py-4">
				<p class="text-[6vw] md:text-[3vw] drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
					Nutrition<br>Calc.
				</p>
			</div>
		</div>
	</header>
	<main class="md:grow md:relative ">
		@auth
		<div class="md:flex md:absolute w-full md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 drop-shadow-xl">
			<div class="title-area w-full md:w-1/2 md:relative">
				<div class="md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 mb-5">
					<p class="text-[3vw] md:text-xl text-center drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">こんにちは、{{ Auth::user()->name }}さん</p>
					<p class="text-[5vw] md:text-2xl text-center drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">今日は何をしますか？</p>
				</div>
			</div>
			<!-- title-area -->
			<div class="menu-area md:w-1/2 md:text-center md:relative md:inline-block">
				<div class="menu-area_list text-center md:text-left md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">
					<ul>
						<li class="mb-4 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] hb-scale"><a href="{{ route('order.create')}}">今週買った食材を登録する</a></li>
						<li class="mb-4 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] hb-scale"><a href="{{ route('order.index')}}">今週買った食材を見る</a></li>
						<li class="mb-4 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] hb-scale"><a href="{{ route('calc')}}">計算結果を見る</a></li>
						<li class="mb-4 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] hb-scale"><a href="{{ route('foods.index')}}">食材の一覧を見る</a></li>
						<li class="mb-4 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)] hb-scale"><a href="{{ route('user.show', ['user' => Auth::user()]) }}">登録情報を変更する</a></li>
						<li>
							<form action="{{ route('logout') }}" method="post">
								@csrf
								<button class="hb-scale">ログアウトする</button>
							</form>
						</li>
					</ul>
				</div>
				<!-- menu-area_list -->
			</div>
			<!-- menu-area -->
		</div>
		@else
		<div class="title-area w-full">
			<div class="md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2">
				<p class="text-[4vw] md:text-2xl text-center mb-5">ようこそ</p>
				<p class="text-[3vw] md:text-xl text-center">
					<a href="{{ route('login') }}">ログイン</a>
				</p>
				<p class="text-[3vw] md:text-xl text-center mt-3">
					<a href="{{ route('register') }}">新規登録</a>
				</p>
			</div>
		</div>
		<!-- title-area -->
		@endauth
	</main>
	<footer class="bottom-0 fixed">
		<div class="max-w-7ml mx-atuo px-4 sm:px-6">
			<div class="py-4 text-left">
				<p class="text-center text-[3vw] md:text-base">Copyright© Hal40n All rights reserved.
			
			</div>
		</div>
	</footer>
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            var headerHeight = document.getElementById('header').offsetHeight;
            document.querySelector('main').style.marginTop = headerHeight + 'px';
        });
		</script>
</body>
</html>