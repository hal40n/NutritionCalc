<x-app-layout>
	<x-slot name="title">
    	add foods
	</x-slot>
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full">
            <p class="text-2xl font-bold text-center mb-8">今週購入した食材を教えてください</p>
            <form action="{{ route('selectFoods') }}" method="POST" class="md:w-full md:max-w-3xl mx-auto">
                @csrf
                <div class="flex flex-col items-center">
                    <!-- 入力ユーザー名 -->
                	<input type="hidden" name="name" value="{{ Auth::user()->name }}">
                    
                    <!-- 食材名のラベルと入力欄 -->
                    <div class="mb-4 w-[35vw]">
                        <label class="block text-sm mb-2" for="food_name">食材名</label>
                        <input class="placeholder:italic placeholder:text-gray-500 text-gray-500 block bg-white w-full md:w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-green-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="にんじん" type="text" id="food_name" name="food_name" />
                    </div>
            		<div class="flex between w-1/2">
                        <button type="submit" name="insertExce" class="mt-8 p-4 bg-gray-500 text-white w-full max-w-xs hover:bg-gray-700 transiton-colors mr-3">検索</button>
                        <button type="button" onclick="window.location='{{ route('home') }}'"  class="mt-8 p-4 bg-white text-gray-500 w-full max-w-xs">戻る</button>
            		</div>
                </div>
            </form>
    	</div>
    </div>
</x-app-layout>
