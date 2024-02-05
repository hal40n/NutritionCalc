@extends('layouts.app') @section('title', 'Register') @section('keywords', 'Nutrition Calc') @section('description', 'This page is Register page.') @include('layouts.header') @section('content')
<x-app-layout> <x-slot name='title'>購入食材登録</x-slot>
<section class="bg-amber-50 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<h1 class="text-3xl">食材登録</h1>
		<p>あなたが今週購入した食材を教えてください</p>
		<form action="#" method="POST" class="mt-10">
			@csrf
			<div class="flex flex-col items-center">
				<label class="w-full max-w-3xl mx-auto"> <input
					class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
					placeholder="にんじん" type="text" name="food_name" />
				</label>
				<button type="submit" class="mt-8 p-4 bg-slate-800 text-white w-full max-w-xs hover:bg-slate-900 transiton-colors">追加する</button>
			</div>
		</form>
	</div>
	<!-- container -->
</section>
</x-app-layout>
