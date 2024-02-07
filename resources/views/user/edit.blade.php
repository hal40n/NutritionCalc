<x-app-layout> <x-slot name='title'> ユーザー情報入力 </x-slot>

<section class="pt-20 pb-12 relative z-20 overflow-hidden">
	<div class="container">
		<div class="text-center mx-auto">
			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] mb-4">登録情報変更</h2>
			<p class="font-semibold text-[2vw] md:text-lg block">{{ Auth::user()->name }}さんの情報を変更します</p>
		</div>
		<form action="{{ route('user.update', ['user' => Auth::user()]) }}" method="POST">
			@csrf <input type="hidden" name="_method" value="PUT"> <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			<div class="flex h-screen items-center justify-center mb-5">
				<div class="grid bg-white rounded-lg shadow-xl w-3/4 py-4">
					<div class="grid grid-cols-1 mt-5 mx-7 px-2">
						<label class="md:text-sm text-xs text-gray-500 font-semibold">氏名</label> <input
							class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" type="text" name="name" value="{{ Auth::user()->name }}" />
					</div>
					<div class="grid grid-cols-1 mt-5 mx-7 px-2">
						<label class="md:text-sm text-xs text-gray-500 font-semibold">メールアドレス</label> <input
							class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" type="text" name="email"
							value="{{ Auth::user()->email }}" />
					</div>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7 px-2">
						<div class="grid grid-cols-1">
							<label class="md:text-sm text-xs text-gray-500 font-semibold">年齢</label> <input
								class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-2 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" type="text" name="age" value="{{ Auth::user()->age }}" />
						</div>
						<div class="grid grid-cols-1">
							<label class="md:text-sm text-xs text-gray-500 font-semibold">性別</label> <select
								class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" name="sex">
								<option value="MAN">男</option>
								<option value="WOMAN">女</option>
							</select>
						</div>
					</div>
					<div class="grid grid-cols-1 mt-5 mx-7 px-2">
						<label class="md:text-sm text-xs text-gray-500 font-semibold">活動レベル</label> <select
							class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" name="activeLevel">
							<option value="LOW">低い</option>
							<option value="NORMAL">普通</option>
							<option value="HIGH">高い</option>
						</select>
					</div>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7 px-2">
						<div class="grid grid-cols-1">
							<label class="md:text-sm text-xs text-gray-500 font-semibold">身長</label> <input
								class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" type="text" name="height"
								value="{{ Auth::user()->height }}" />
							<p>cm</p>
						</div>
						<div class="grid grid-cols-1">
							<label class="md:text-sm text-xs text-gray-500 font-semibold">体重</label> <input
								class="py-2 px-3 rounded-lg border-2 border-gray-700 mt-1 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent text-gray-500" type="text" name="weight"
								value="{{ Auth::user()->weight }}" />
							<p>kg</p>
						</div>
					</div>
					<div class='flex items-center justify-center  md:gap-8 gap-4 mt-3 pt-5 pb-5'>
						<button type="submit" name="updateExec" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>更新</button>
						<button  type="button" onclick="window.location='{{ route('home') }}'" class='w-auto bg-white rounded-lg shadow-xl font-medium text-gray-500 px-4 py-2 border border-gray-500'>
							戻る
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>
</x-app-layout>