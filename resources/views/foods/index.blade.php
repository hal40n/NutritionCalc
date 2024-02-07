<x-app-layout> <x-slot name='title'> 食材一覧 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="flex flex-wrap -mx-4">
			<div class="w-full px-4">
				<div class="text-center mx-auto max-w-[510px]">
					@isset($seachFood)
					<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] mb-4">{{ $searchFood }}の検索結果一覧</h2>
					<p class="font-semibold text-lg text-body-color block">検索結果は以下の通りです。</p>
					@else
					<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] mb-4">食材一覧</h2>
					<p class="font-semibold text-lg block">現在データベースに登録されている食材の一覧です。</p>
					@endisset
				</div>
			</div>
		</div>
		<div class="flex flex-col mt-6">
			<form action="" method="GET">
				<div class="p-4">
					<label for="table-search" class="sr-only">Search</label>
					<div class="relative mt-1">
						<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
							<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            						<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            					</svg>
						</div>
						<div class="flex justfy-between">
							<input type="text" name="searchFood"
								class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-700"
								placeholder="Search for items"> <input type="submit" value="検索" class="p-2 bg-gray-500 text-white max-w-xs hover:bg-gray-700 transiton-colors ml-3 rounded-lg">
						</div>
					</div>
				</div>
			</form>
			<div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
				<div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
					<div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg mb-4">
						<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
							<thead class="bg-gray-50 dark:bg-gray-800">
								<tr>
									<th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">No.</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">食材名</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">エネルギー<br>（kcal）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">水分<br>（g）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">たんぱく質<br>（g）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">脂質<br>（g）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">食物繊維<br>（g）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">炭水化物<br>（g）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">ナトリウム<br>（mg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">カルシウム<br>（mg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">マグネシウム<br>（mg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">ビタミンD<br>（μg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">ビタミンB₁<br>（mg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">ビタミンB₂<br>（mg）
									</th>
									<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap">ビタミンC<br>（mg）
									</th>
									<th scope="col" class="relative py-3.5 px-4"><span class="sr-only">全表示</span></th>
								</tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
								@foreach($foods as $food)
								<tr>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<a href="{{ route('foods.show', ['food_code' => $food->food_code]) }}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
												<span class="text-gray-500 dark:text-gray-400">{{ $food->food_code }}</span>
											</a>
										</div>
									</td>
									<td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
										<div>
											<h2 class="font-medium text-gray-800 dark:text-white ">{{ $food->food_name }}</h2>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->ENERC_KCAL }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->WATER }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->PROT }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->FAT }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->FIB }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->CHOCDF }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->NA }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->CA }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->MG }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->VITD }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->THIA }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->RIBF }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<div>
											<p class="text-gray-500 dark:text-gray-400">{{ $food->VITC }}</p>
										</div>
									</td>
									<td class="px-4 py-4 text-sm whitespace-nowrap">
										<form action="{{ route('foods.destroy', ['food' => $food->food_code]) }}" method="post">
											@csrf @method('DELETE')
											<x-button class="bg-red-600 hover:bg-red-500 active:bg-red-700 focus:border-red-700"> 削除 </x-button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					{{ $foods->links() }}
				</div>
			</div>
					<p class="text-base mt-3 leading-loose text-right">食品成分値は日本食品標準成分表2020年版（八訂）のデータを使用しています。</p>
		</div>
	</div>
</section>
</x-app-layout>