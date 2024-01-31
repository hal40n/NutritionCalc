<x-app-layout>
    <x-slot name="title">
        食材選択
    </x-slot>
	
    <section class="bg-amber-50 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
       <div class="container">
          <div class="flex flex-wrap -mx-4">
             <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                   <span class="font-semibold text-lg text-body-color mb-2 block">{{ $inputVal }}の検索結果です</span>
                   <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">
                      食材を選択してください
                   </h2>
                   <p class="text-base text-body-color">
                      個数を入力後、追加してください。
                   </p>
                </div>
             </div>
          </div>
          <div class="flex flex-wrap justify-center -mx-4">
             	@foreach($foods as $food)
                 <div class="w-full md:w-1/2 lg:w-1/3 px-4">
		         	<form action="{{ route('order.store') }}" method="POST">
        		 		@csrf
         				<input type="hidden" name="food_code" value="{{ $food->food_code }}">
					<div class="bg-white rounded-xl relative z-10 overflow-hidden border border-green-900 border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10">
						<span class="text-body-color font-semibold text-lg block mb-4"> {{ $food->food_code }} </span>
						<p class="font-bold text-green-700 mb-5 text-[4vw] md:text-[2vw]">{{ $food->food_name }}</p>
						<p class="text-base text-body-color pb-8 mb-8 border-b border-[#F2F2F2]">「{{ $food->food_name }}」の主な栄養価は以下の通りです。</p>
						<div class="mb-7">
							<p class="text-base text-body-color leading-loose mb-1">エネルギー：{{ $food->ENERC_KCAL }}kcal</p>
							<p class="text-base text-body-color leading-loose mb-1">水分：{{ $food->WATER }}g</p>
							<p class="text-base text-body-color leading-loose mb-1">タンパク質：{{ $food->PROT0 }}g</p>
							<p class="text-base text-body-color leading-loose mb-1">脂質：{{ $food->FAT0 }}g</p>
							<p class="text-base text-body-color leading-loose mb-1">炭水化物：{{ $food->CHOCDF0 }}</p>
							<p class="text-xl text-green-700 leading-loose mb-1">
								<a href="">more...</a>
							</p>
						</div>
						<div class="flex items-center mb-5">
							<p class="text-base text-body-color leading-loose mb-1">追加数：</p>
							<input name="quantity" type="text" class="w-3/4 border border-[#D4DEFF] rounded-md">
							<p class="text-base text-body-color leading-loose mb-1 ml-2">個</p>
						</div>
						<button type="submit" name="addExec"
							class="w-full block text-base font-semibold text-green-700 bg-transparent border border-[#D4DEFF] rounded-md text-center p-4 hover:text-white hover:bg-green-700 hover:border-green-700 transition">
							追加する</button>
						<div>
							<span class="absolute right-0 top-7 z-[-1]"> <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                       <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="rgb(21 128 61)" stop-opacity="0.09" />
                                          <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                       </linearGradient>
                                    </defs>
                                 </svg>
							</span> <span class="absolute right-4 top-4 z-[-1]"> <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="rgb(21 128 61)" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="rgb(21 128 61)" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="rgb(21 128 61)" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="rgb(21 128 61)" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="rgb(21 128 61)" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="rgb(21 128 61)" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="rgb(21 128 61)" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="rgb(21 128 61)" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="rgb(21 128 61)" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="rgb(21 128 61)" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="rgb(21 128 61)" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="rgb(21 128 61)" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="rgb(21 128 61)" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="rgb(21 128 61)" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="rgb(21 128 61)" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="rgb(21 128 61)" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="rgb(21 128 61)" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="rgb(21 128 61)" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="rgb(21 128 61)" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.41963)" fill="rgb(21 128 61)" />
                                 </svg>
							</span>
						</div>
					</div>
				</form>
                 </div>
            @endforeach
          </div>
       </div>
    </section>
</x-app-layout>
