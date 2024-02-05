<x-app-layout> <x-slot name='title'> ユーザー詳細 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="flex flex-wrap -mx-4">
			<div class="w-full px-4">
				<div class="text-center mx-auto max-w-[510px]">
					<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">ユーザー詳細</h2>
					<p class="font-semibold text-lg text-body-color block">現在登録されている{{ Auth::user()->name }}さんの情報です。</p>
				</div>
			</div>
		</div>
		<div class="mt-6 overflow-x-auto">
			<table class="w-1/2  divide-y divide-gray-200 dark:divide-gray-700 mx-auto my-0 text-center">
				<thead class="bg-gray-50 dark:bg-gray-800">
					<tr>
						<th scope="col" class="text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-2/5"></th>
						<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
							<div>
								<p class="text-gray-500 dark:text-gray-400">登録情報</p>
							</div>
						</td>
					</tr>
				</thead class="text-center">
				<tbody>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ユーザーID</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->id }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">氏名</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->name }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">メールアドレス</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">年齢</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->age }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">性別</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->sex }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">活動レベル</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->activeLevel }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">身長</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->height }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">体重</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ Auth::user()->weight }}</p>
							</div></td>
					</tr>
				</tbody>
			</table>
			<div class="flex between w-1/2 mx-auto my-0">
				<button type="submit" name="addExec"
					class="w-1/3 block mt-3 mx-auto text-base font-semibold text-white bg-green-700 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-green-900 hover:border-green-700 transition">
					<a href="{{ route('foods.index') }}"><span class="block text-[2vw]">編集する</span></a>
				</button>
				<button type="submit" name="addExec"
					class="w-1/3 block mt-3 mx-auto text-base font-semibold text-white bg-gray-500 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-gray-700 hover:border-gray-500 transition">
					<a href="{{ route('home') }}"><span class="block text-[2vw]">戻る</span></a>
				</button>
			</div>
		</div>
	</div>
</section>
</x-app-layout>