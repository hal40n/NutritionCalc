<x-app-layout> <x-slot name="title"> 食材詳細 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="text-center mx-auto">
			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">栄養価詳細</h2>
			<p class="font-semibold text-[2vw] md:text-lg text-body-color block">{{ $food->food_name }}の栄養価です。</p>
		</div>

		<div class="mt-6 overflow-x-auto">
			<!-- sm size：縦並び -->
			<table class="w-1/2  divide-y divide-gray-200 dark:divide-gray-700 mx-auto my-0 text-center">
				<thead class="bg-gray-50 dark:bg-gray-800">
					<tr>
						<th scope="col" class="text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-2/5">栄養素名</th>
						<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
							<div>
								<p class="text-gray-500 dark:text-gray-400">栄養価</p>
							</div>
						</td>
					</tr>
				</thead class="text-center">
				<tbody>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">エネルギー（kcal）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->ENERC_KCAL }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">水分（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->WATER }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">タンパク質（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->PROT }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">コレステロール（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CHOLE }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">脂質（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->FAT }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">食物繊維（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->FIB }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">糖アルコール（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->POLYL }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">炭水化物（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CHOCDF }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">有機酸（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->OA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">灰分（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->ASH }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ナトリウム（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->NA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">カリウム（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->K }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">カルシウム（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">マグネシウム（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->MG }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">リン（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->P }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">鉄（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->FE }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">亜鉛（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->ZN }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">銅（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CU }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">マンガン（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->MN }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ヨウ素（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->ID }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">セレン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->SE }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">クロム（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CR }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">モリブデン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->MO }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">レチノール（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->RETOL }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">αカロテン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CARTA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">βカロテン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CARTB }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">βクリプトキサンチン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CRYPXB }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">βカロテン当量（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->CARTBEQ }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">レチノール活性当量（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITA_RAE }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンD（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITD }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">αトコフェロール（mg ）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->TOCPHA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">βトコフェロール（mg ）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->TOCPHB }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">γトコフェロール（mg ）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->TOCPHG }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">δトコフェロール（mg ）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->TOCPHD }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンK（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITK }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンB1（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->THIA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンB2（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->RIBF }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ナイアシン（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->NIA }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ナイアシン当量（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->NE }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンB6（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITB6A }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンB12（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITB12 }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">葉酸（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->FOL }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">パントテン酸（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->PANTAC }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビオチン（μg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->BIOT }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">ビタミンC（mg）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->VITC }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">アルコール（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->ALC }}</p>
							</div></td>
					</tr>
					<tr>
						<th scope="col" class="w-1/2 text-center bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 ">食塩相当量（g）</th>
						<td class="w-1/2 bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap "><div>
								<p class="text-gray-500 dark:text-gray-400">{{ $food->NACL_EQ }}</p>
							</div></td>
					</tr>

				</tbody>
			</table>
			<div class="flex between w-1/2 mx-auto my-0">
				<button type="submit" name="addExec"
					class="w-1/3 block mt-3 mx-auto text-base font-semibold text-white bg-green-700 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-green-900 hover:border-green-700 transition">
					<a href="{{ route('foods.index') }}"><span class="block text-[2vw]">食材一覧</span></a>
				</button>
				<button type="submit" name="addExec"
					class="w-1/3 block mt-3 mx-auto text-base font-semibold text-white bg-gray-500 border border-[#D4DEFF] rounded-md text-center p-4 hover:bg-gray-700 hover:border-gray-500 transition">
					<a href="{{ route('order.index') }}"><span class="block text-[2vw]">購入食材一覧</span></a>
				</button>
			</div>
		</div>
	</div>
</section>
</x-app-layout>