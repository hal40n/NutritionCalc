@php
  $tableVisibility = [
    'default' => 'block',
    'mineral' => 'none',
    'vitamin' => 'none',
    'all' => 'none',
  ];
  $initialChecked = old('btn', 'default'); // 初期表示のラジオボタン
  $selectedOption = old('btn', $selectedOption); // 選択されたオプション
@endphp

<x-app-layout> <x-slot name='title'> 栄養価計算 </x-slot>

<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
	<div class="container">
		<div class="text-center mx-auto max-w-[510px]">
			<h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] mb-4">栄養価計算結果</h2>
			<p class="font-semibold text-[2.5vw] md:text-lg block">{{ Auth::user()->name }}さんに不足している栄養素は以下の通りです。</p>
		</div>

		<div class="max-w-screen-xl mx-auto p-8 pb-0 flex-col items-center">
			<form action="{{ route('calcRequest') }}" method="POST" class="w-full">
				@csrf
				<div class="flex w-full relative justify-around">
					 <input type="radio" id="default" name="btn" value="default" class="appearance-none border-transparent focus:border-transparent focus:ring-0" {{ $selectedOption == 'default' ? 'checked' : '' }} />
					 <label for="default" class="checked-label cursor-pointer md:w-1/6 flex grow items-center justify-center truncate select-none font-semibold md:text-lg rounded-full py-2 {{ old('btn') == 'default' ? 'checked-label' : '' }}">三大栄養</label>
					 <input type="radio" id="mineral" name="btn" value="mineral" class="appearance-none border-transparent focus:border-transparent focus:ring-0" {{ $selectedOption == 'mineral' ? 'checked' : '' }} />
					 <label for="mineral" class="cursor-pointer md:w-1/6 flex grow items-center justify-center truncate select-none font-semibold md:text-lg rounded-full py-2 {{ old('btn') == 'mineral' ? 'checked-label' : '' }}">ミネラル</label>
					<input type="radio" id="vitamin" name="btn" value="vitamin" class="appearance-none border-transparent focus:border-transparent focus:ring-0" {{ $selectedOption == 'vitamin' ? 'checked' : '' }} />
					<label for="vitamin" class="cursor-pointer md:w-1/6 flex grow items-center justify-center truncate select-none font-semibold md:text-lg rounded-full py-2  {{ old('btn') == 'vitamin' ? 'checked-label' : '' }}">ビタミン</label>
					<input type="radio" id="all" name="btn" value="all" class="appearance-none border-none border-transparent focus:border-transparent focus:ring-0" {{ $selectedOption == 'all' ? 'checked' : '' }} />
					<label for="all" class="cursor-pointer md:w-1/6 flex grow items-center justify-center truncate select-none font-semibold md:text-lg rounded-full py-2 {{ old('btn') == 'all' ? 'checked-label' : '' }}">全表示</label>
					<input type="submit" name="additionalInput" id="additionalInput" value="success" class="appearance-none border-none border-transparent focus:border-transparent focus:ring-0 hidden" />
					<div class="appearance-none border-none border-transparent focus:border-transparent focus:ring-0 w-1/4 flex items-center justify-center truncate select-none font-semibold text-lg rounded-full p-0 h-full bg-gray-500 absolute transform transition-transform tabAnim "></div>
				</div>
			</form>
		</div>

		<div class="mt-6 overflow-x-auto">
			<!-- sm size：縦並び -->
			<table class="w-4/5 md:hidden divide-y divide-gray-200 dark:divide-gray-700 mx-auto">
				<thead class="bg-gray-50 dark:bg-gray-800">
					<tr>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/4 text-center"></th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/4 text-center">基準値</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/4 text-center">摂取値</th>
						<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/4 text-center">不足値</th>
					</tr>
				</thead>
				@foreach($intakeStandardProperties as $intakeStandardProperty)
				<tr>
					<th scope="col" class="bg-gray-50 dark:bg-gray-800 px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 w-1/4 text-center">{{ $intakeStandardProperty[0] }}</th>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/4">
						<div>
							<p class="text-gray-500 dark:text-gray-400 text-center">{{ $userStandardValue[$intakeStandardProperty[1]] }}</p>
						</div>
					</td>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/4">
						<div>
							<p class="text-gray-500 dark:text-gray-400 text-center">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] }}</p>
						</div>
					</td>
					<td class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900 px-4 py-4 text-sm whitespace-nowrap w-1/4">
						<div>
							<p class="text-gray-500 dark:text-gray-400 text-center {{ $intakeNutritionsTotal[$intakeStandardProperty[1]] - $userStandardValue[$intakeStandardProperty[1]] < 0 ? 'negative-value' : '' }}">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] - $userStandardValue[$intakeStandardProperty[1]] }}</p>
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
							<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap"></th> @foreach($intakeStandardProperties as
							$intakeStandardProperty)
							<th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 whitespace-nowrap text-center text-center">{{ $intakeStandardProperty[0] }}</th> @endforeach
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
									<p class="text-gray-500 dark:text-gray-400 text-center">{{ $userStandardValue[$intakeStandardProperty[1]] }}</p>
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
									<p class="text-gray-500 dark:text-gray-400 text-center">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] }}</p>
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
									<p class="text-gray-500 dark:text-gray-400 text-center {{ $intakeNutritionsTotal[$intakeStandardProperty[1]] - $userStandardValue[$intakeStandardProperty[1]] < 0 ? 'negative-value' : '' }}">{{ $intakeNutritionsTotal[$intakeStandardProperty[1]] - $userStandardValue[$intakeStandardProperty[1]] }}</p>
								</div>
							</td> @endforeach
						</tr>
					</tbody>
				</table>
			</div>
			<!-- other size -->
		</div>

		<p class="mt-4 text-base leading-loose text-right　w-[1vw]">食品成分値は日本食品標準成分表2020年版（八訂）のデータを使用しています。</p>
	</div> 
	<script>
	document.addEventListener('DOMContentLoaded', function () {
	    // ページ読み込み時に選択されたラジオボタンに.checked-labelクラスを付与
	    const tableVisibility = {!! json_encode($tableVisibility) !!};
	    const initialChecked = {!! json_encode($initialChecked) !!};
	    const selectedOption = {!! json_encode($selectedOption) !!};

	    const initialCheckedInput = document.querySelector(`input[name="btn"][value="${initialChecked}"]`);
	    const selectedOptionInput = document.querySelector(`input[name="btn"][value="${selectedOption}"]`);

	    // すべてのラベルから.checked-labelクラスを一旦削除
	    document.querySelectorAll('.checked-label').forEach(function (label) {
	        label.classList.remove('checked-label');
	    });

	    if (selectedOptionInput) {
	        const label = document.querySelector(`label[for="${selectedOptionInput.id}"]`);
	        if (label) {
	            label.classList.add('checked-label');
	        }
	    } else if (initialCheckedInput) {
	        const label = document.querySelector(`label[for="${initialCheckedInput.id}"]`);
	        if (label) {
	            label.classList.add('checked-label');
	        }
	    }

	    // ラジオボタンが変更されたときに.checked-labelクラスを更新
	    const radioButtons = document.querySelectorAll('input[name="btn"]');
	    radioButtons.forEach(function (radioButton) {
	        radioButton.addEventListener('change', function () {
	            // すべてのラベルから.checked-labelクラスを一旦削除
	            document.querySelectorAll('.checked-label').forEach(function (label) {
	                label.classList.remove('checked-label');
	            });

	            // 選択されたラジオボタンに対応するラベルに.checked-labelクラスを追加
	            const label = document.querySelector(`label[for="${this.id}"]`);
	            if (label) {
	                label.classList.add('checked-label');
	            }
	        });
	    });

	    // 新たなラジオボタンが選択されたときにJavaScriptで追加したinputタグをクリック
	    document.querySelectorAll('input[name="btn"]').forEach(function (radio) {
	        radio.addEventListener('change', function () {
	            document.getElementById('additionalInput').click();
	        });
	    });

	    document.querySelectorAll('.negative-value').forEach(function (cell) {
	        const value = parseInt(cell.textContent.trim());
	        if (value < 0) {
	            cell.style.color = 'red';
	        }
	    });
	});
</script>

</section>
</x-app-layout>
