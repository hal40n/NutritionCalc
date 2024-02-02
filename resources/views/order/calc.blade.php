<x-app-layout> <x-slot name='title'> 栄養価計算 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="text-center mx-auto max-w-[510px]">
			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">栄養価計算結果</h2>
			<p class="font-semibold text-lg text-body-color block">{{ Auth::user()->name }}さんに不足している栄養素は以下の通りです。</p>
		</div>

		<div class="mt-6 overflow-x-auto">
			<!-- sm size：縦並び -->
			<table class="w-full md:hidden divide-y divide-gray-200 dark:divide-gray-700">
				<thead class="bg-gray-50 dark:bg-gray-800">
					<tr>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-2/5"></th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/5">基準値</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/5">摂取値</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/5">不足値</th>
					</tr>
				</thead>
				@foreach($intakeStandardProperties as $intakeStandardProperty)
				<tr>
					<th scope="col" class="bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-2/5">{{ $intakeStandardProperty[0] }}</th>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
						<div>
							<p class="text-gray-500 dark:text-gray-400">{{ $userStandardValue[$intakeStandardProperty[1]] }}</p>
						</div>
					</td>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
						<div>
							<p class="text-gray-500 dark:text-gray-400">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] }}</p>
						</div>
					</td>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/5">
						<div>
							<p class="text-gray-500 dark:text-gray-400">{{ $userStandardValue[$intakeStandardProperty[1]] - $intakeNutritionsTotal[$intakeStandardProperty[1]] }}</p>
						</div>
					</td>
				</tr>
				@endforeach
			</table>
			<!-- sm size -->

			<!-- other size -->
			<div class="min-w-full hidden md:block">
				<table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
					<thead class="bg-gray-50 dark:bg-gray-800">
						<tr>
							<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"></th> 
							@foreach($intakeStandardProperties as $intakeStandardProperty)
								<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">{{ $intakeStandardProperty[0] }}</th>
							@endforeach
						</tr>
					</thead>
					<tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
						<tr>
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">目標値</p>
								</div>
							</td> @foreach($intakeStandardProperties as $intakeStandardProperty)
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">{{ $userStandardValue[$intakeStandardProperty[1]] }}</p>
								</div>
							</td> @endforeach
						</tr>
						<tr>
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">摂取値</p>
								</div>
							</td> @foreach($intakeStandardProperties as $intakeStandardProperty)
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] }}</p>
								</div>
							</td> @endforeach
						</tr>
						<tr>
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">不足値</p>
								</div>
							</td> @foreach($intakeStandardProperties as $intakeStandardProperty)
							<td class="px-4 py-4 text-sm whitespace-nowrap">
								<div>
									<p class="text-gray-500 dark:text-gray-400">{{ $userStandardValue[$intakeStandardProperty[1]] - $intakeNutritionsTotal[$intakeStandardProperty[1]]  }}</p>
								</div>
							</td> @endforeach
						</tr>
					</tbody>
				</table>
			</div>
			<!-- other size -->
		</div>

		<p class="mt-4 text-base text-body-color leading-loose text-right　w-[1vw]">食品成分値は日本食品標準成分表2020年版（八訂）のデータを使用しています。</p>
	</div>
</section>
</x-app-layout>
