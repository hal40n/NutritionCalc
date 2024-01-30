<x-app-layout>
<x-slot name='title'>
	追加
</x-slot>
 <section class="bg-amber-50 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
       <div class="container">
          <div class="flex flex-wrap -mx-4">
             <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                   <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-green-700 mb-4">
                      下記の食材を保存しました。
                   </h2>
                   <p class="text-base text-body-color">
                   <span class="font-semibold text-lg text-body-color mb-2 block">{{ $food_name }}</span>
                   </p>
                </div>
             </div>
          </div>
</x-app-layout>