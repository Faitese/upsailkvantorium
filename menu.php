
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
/*
module.exports = {
    plugins: [
        require('tailwindcss-inset')({
            insets: {
                full: '100%'
            }
        })
    ]
};
*/
.inset-l-full {
    left: 100%;
}

</style>
<div class=" w-full fixed	z-40">
    <div class="py-3 px-5 bg-white shadow-xl">
        <div class="-mx-1">
            <ul class="flex w-full flex-wrap items-center h-10">
                <li class="block relative pr-2" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/"><img src="img/logo.jpg" alt="" srcset=""></a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/catalog.php?what=Яхты" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " >
                        <span>Яхты</span>
                    </a>
                </li>
                <li class="block relative">
                    <a href="/catalog.php?what=Катера" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 ">
                        <span>Катера</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/catalog.php" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " @click.prevent="showChildren=!showChildren">
                        <span>Услуги</span>
                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                        <div class="bg-white rounded w-full relative z-10 py-1">
                            <ul class="list-reset">
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Аренда яхт и катеров на свадьбу" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Аренда яхт и катеров на свадьбу</span>
                                        
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=День рождения" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">День рождения</span>
                                    
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Мальчишник/Девичник" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                        <span class="flex-1">Мальчишник/Девичник</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Прогулка на яхте для двоих" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Прогулка на яхте для двоих</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Дайвинг" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Дайвинг</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Каякинг" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Каякинг</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Фотосессия" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Фотосессия</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Прокат инвентаря" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Прокат инвентаря</span>
                                    </a>
                                </li>
                                <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                    <a href="/catalog.php?what=Экскурсия" class="px-4 py-2 flex w-full items-start  no-underline hover:no-underline transition-colors duration-100 cursor-pointer"> 
                                        <span class="flex-1">Экскурсия</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1" @click.prevent="showChildren=!showChildren">
                        <span>Маршруты</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/map.php?what=Отели" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 ">
                        <span>Отели</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/map.php?what=Рестораны" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " >
                        <span>Рестораны</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="#" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " @click.prevent="showChildren=!showChildren">
                        <span>Публичный чат</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/#aboutUs" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " >
                        <span>О нас</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/#partners" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " >
                        <span>Партнеры</span>
                    </a>
                </li>
                <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                    <a href="/#FAQ" class="text-white bg-indigo-500 flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 " >
                        <span>FAQ</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>