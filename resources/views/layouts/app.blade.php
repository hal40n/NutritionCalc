<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title }}</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Scripts -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script src="/js/app.js" defer></script>
</head>
<body class="font-serif text-white antialiased bg-[url('/images/pizza-2589577_1280.jpg')] bg-fixed">
	<div class="min-h-screen flex flex-col">
		@include('layouts.navigation')

		<!-- Page Content -->
		<main class="flex-grow overflow-y-auto">{{ $slot }}</main>
	</div>
	<footer class="fixed bottom-0 w-full bg-white z-50 border-t">
		<div class="max-w-7ml mx-atuo px-4 sm:px-6">
			<div class="py-4 text-left">
				<p class="text-center text-[3vw] md:text-base text-body-color">Copyright© Hal40n All rights reserved.</p>
			</div>
		</div>
	</footer>
</body>
</html>
