<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include('layout.php')
    ?>
</head>
<body class="bg-gray-100">
    <div class="pt-5"></div>
    <div id="gallery" class="w-full text-white ">
        <h3 class="text-center font-semibold text-dark text-xl sm:text-[30px] md:text-xl lg:text-[30px] xl:text-xl 2xl:text-[30px] mb-4 block hover:text-primary">
            Галерея
        </h3>
        <div id="default-carousel gallery" class="relative" data-carousel="static">
            <div class="overflow-hidden relative h-[40rem]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="img/gallery/1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/gallery/2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/gallery/3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/gallery/4.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/gallery/5.webp" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            

            <div id="aboutUs" class=" flex absolute bottom-8 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="4"></button>
            </div>


            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900/25 dark:bg-gray-900/75 group-hover:bg-gray-900/75 dark:group-hover:bg-gray-900/75 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Предыдущий</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-900/25 dark:bg-gray-900/75 group-hover:bg-gray-900/75 dark:group-hover:bg-gray-900/75 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Слудующий</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    <div class="pt-6 text-indigo-600 text-center text-[24pt] font-bold">
        О нас
    </div>
    <a name="partners"></a>
    <div class="border-y-2 border-gray-300 text-indigo-600 text-2xl px-4 h-96 ">
        <p>
            Какая-то информация "о нас" (нет в тз:] )
        </p>
    </div>


    <div class="text-indigo-600 text-center text-[24pt] font-bold">
        Партнеры
    </div>
    <div class="border-y-2 border-gray-300 text-indigo-600 text-2xl px-4 h-96 ">
        <p>
            Какие-то партнеры (нет в тз :] )
        </p>
    </div>
    
    <a name="FAQ">
    <div id="FAQ" class="text-indigo-600 text-center text-[24pt] font-bold">
        FAQ
    </div>
    <div class="border-y-2 mb-24 border-gray-300 text-indigo-600 text-2xl px-4 h-96">
        <p>
            Какой-то "FAQ" (нет в тз :], видимо не FAQ а Fuck You )
        </p>
    </div>
    
    <?php
    include('footer.php');
    ?>
</body>
</html>