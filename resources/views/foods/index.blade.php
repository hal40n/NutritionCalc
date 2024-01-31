<x-app-layout>
	<x-slot name='title'>
		食材一覧
	</x-slot>
	
	<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
		<div class="container">
        	<div class="flex flex-wrap -mx-4">
            	<div class="w-full px-4">
                	<div class="text-center mx-auto max-w-[510px]">
                	@isset($seachFood)                		
            			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">{{ $searchFood }}の検索結果一覧</h2>
            			<p class="font-semibold text-lg text-body-color block">検索結果は以下の通りです。</p>
            		@else
            			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">食材一覧</h2>
            			<p class="font-semibold text-lg text-body-color block">現在DBに登録されている食材の一覧です。</p>
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
            					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
            						xmlns="http://www.w3.org/2000/svg">
            						<path fill-rule="evenodd"
            							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            							clip-rule="evenodd"></path>
            					</svg>
            				</div>
            				<div class="flex justfy-between">
                				<input type="text" name="searchFood" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                				<input type="submit" value="検索" class="p-2 bg-green-800 text-white max-w-xs hover:bg-green-900 transiton-colors ml-3 rounded-lg">
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
                                        <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <button class="flex items-center gap-x-3 focus:outline-none">
                                                <span>No.</span>
                                            </button>
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">食材名</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">エネルギー（kcal）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">水分（g）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">たんぱく質（g）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">脂質（g）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">食物繊維（g）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">炭水化物（g）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">ナトリウム（mg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">カルシウム（mg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">マグネシウム（mg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">ビタミンD（μg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">ビタミンB₁（mg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">ビタミンB₂（mg）</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">ビタミンC（mg）</th>
                                        <th scope="col" class="relative py-3.5 px-4"><span class="sr-only">全表示</span></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    @foreach($foods as $food)
                                        <tr>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">{{ $food->food_code }}</p>
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
                                                    <p class="text-gray-500 dark:text-gray-400">{{ $food->PROT0 }}</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">{{ $food->FAT0 }}</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">{{ $food->FIB0 }}</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <p class="text-gray-500 dark:text-gray-400">{{ $food->CHOCDF0 }}</p>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $foods->links() }}
                        <p class="text-base text-body-color leading-loose text-right">食品成分値は日本食品標準成分表2020年版（八訂）のデータを使用しています。</p>
                    </div>
                </div>
            </div>
    	</div>
	</section>
</x-app-layout>