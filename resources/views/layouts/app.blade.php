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
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
      <script src="/js/app.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-amber-50">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="absolute bottom-0">
    		<div class="max-w-7ml mx-atuo px-4 sm:px-6">
    			<div class="py-4 text-left">
    				<p class="text-center text-[4vw] md:text-base">Copyright© Hal40n All rights reserved.</p>
    			</div>
    		</div>
		</footer>
    </body>
</html>
