@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Nutrition Calc')
@section('description', 'This page is Home.')

@include('layouts.header')

@section('content')
    <div class="container">
        <p class="text-2xl font-bold text-center">あなたが今週購入した食材を教えてください</p>
        <form action="<?php echo route('order.store') ?>" method="POST" class="mt-10">
        	@csrf
        	<div class="flex flex-col items-center">
        		<label class="md:w-full md:max-w-3xl mx-auto">
        			<input class="placeholder:italic placeholder:text-slate-400 block bg-white md:w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-green-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="にんじん" type="text" name="food_name" />
        			<input class="placeholder:italic placeholder:text-slate-400 block bg-white md:w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-green-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="1" type="text" name="quantity" />
                 </label>
                 <button type="submit" class="mt-8 p-4 bg-green-800 text-white w-full max-w-xs hover:bg-green-900 transiton-colors">追加する</button>
        	</div>
        </form>
    </div><!-- container -->
@endsection

@include('layouts.footer')
