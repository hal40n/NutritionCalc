@extends('layouts.app')

@section('title', 'Home')
@section('keywords', 'Nutrition Calc')
@section('description', 'This page is Home.')

@include('layouts.header')

@section('content')
    <div>
        <h1 class="text-3xl">
        	食材一覧
        </h1>
        <p>あなたが今週購入した商品です</p>
    </div>
    
@endsection

@include('layouts.footer')
