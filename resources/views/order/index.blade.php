<x-app-layout> <x-slot name='title'> 購入食材一覧 </x-slot>

<section class="container pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="flex flex-wrap -mx-4">
			<div class="w-full px-4">
				<div class="text-center mx-auto max-w-[510px]">
					<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">購入食材一覧</h2>
					<p class="font-semibold text-lg text-body-color block">今週買った食材は以下の通りです。</p>
				</div>
			</div>
		</div>
		<div class="flex flex-col mt-6">
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
										<a href="{{ route('foods.show', ['food_code' => $food->food_code]) }}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
												<span class="text-gray-500 dark:text-gray-400">{{ $food->food_code }}</span>
											</a>
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
										<button class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100">
											<a href="{{ route('foods.show', ['food_code' => $food->food_code]) }}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100"> <svg
													xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
													<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010-1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
												</svg>
											</a>
										</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<p class="text-base text-body-color leading-loose text-right">食品成分値は日本食品標準成分表2020年版（八訂）のデータを使用しています。</p>
				</div>
			</div>
		</div>
	</div>
</section>
</x-app-layout>