<x-app-layout> <x-slot name="title"> 食材詳細 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="text-center mx-auto">
			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] mb-4">栄養価詳細</h2>
			<p class="font-semibold text-[2vw] md:text-lg block">{{ $food->food_name }}の栄養価です。</p>
		</div>

		<div class="mt-6 overflow-y-auto">
			<!-- sm size：縦並び -->
			<table class="w-3/4 mx-auto md:hidden divide-y divide-gray-200 dark:divide-gray-700">
				<thead class="bg-gray-50 dark:bg-gray-800">
					<tr>
						<th scope="col" class="text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-2/5">栄養素名</th>
						<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
							<div>
								<p class="text-gray-500 dark:text-gray-400 text-center">栄養価</p>
							</div>
						</td>
					</tr>
				</thead class="text-center">
				<tbody>
				@foreach($properties as $property)
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 text-center">{{ $property[0] }}<br>{{ $property[2] }}</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400 text-center">{{ $food[$property[1]] }}</p>
							</div></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- other size -->
		<div class="mt-6 overflow-x-auto">
			<div class="min-w-full sm:hidden md:block">
				<table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
					<thead class="bg-gray-50 dark:bg-gray-800">
						<tr>
							<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">栄養素名</th> @foreach($properties as $property)
							<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">{{ $property[0] }}</th> @endforeach
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
						<tr>
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">栄養価</p>
								</div>
							</td> @foreach($properties as $property)
							<td class="px-4 py-4 text-sm whitespace-nowrap text-center">
								<div>
									<p class="text-gray-500 dark:text-gray-400 text-center">
										{{ $food[$property[1]] }}<br>{{ $property[2] }}
									</p>
								</div>
							</td> @endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="flex between w-1/2 mx-auto my-0">
		<button type="submit" name="addExec"
			class="w-1/3 block mt-5 mx-auto mr-3 text-base font-semibold text-white bg-gray-500 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-green-900 hover:border-green-700 transition">
			<a href="{{ route('foods.index') }}"><span class="block text-[2vw]">食材一覧</span></a>
		</button>
		<button type="submit" name="addExec"
			class="w-1/3 block mt-5 mx-auto mr-3 text-base font-semibold text-white bg-gray-700 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-gray-700 hover:border-gray-500 transition">
			<a href="{{ route('order.index') }}"><span class="block text-[2vw]">購入一覧</span></a>
		</button>
		<button type="submit" name="addExec" class="w-1/3 block mt-5 mx-auto mr-3 text-base font-semibold text-gray-500 bg-white border border-[#D4DEFF] rounded-md text-center p-4">
			<a onClick="history.back();"><span class="block text-[2vw]">戻る</span></a>
		</button>
	</div>
</section>
</x-app-layout>