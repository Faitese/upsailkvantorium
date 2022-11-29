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
<body  class="bg-gray-100">
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
    <div class=" border-gray-300 text-indigo-600 text-2xl px-4 h-96 ">
        <p class="indent-16 text-justify">
        Мы группа амбициозных студентов, решившая создать решение проблемы путешествий на Яхте в Балаклаве. В Балаклаве обширный выбор катеров и яхт для морских прогулок, однако для туристов может возникнуть проблема аренды, так как таких сайтов мало, мы же решили упростить для них эту задачу что бы отдыхающие смогли полноценно расслабиться и не испытывать неудобств во время отдыха.
        Собственными силами мы создали сайт – проводник который поможет арендовать катер или яхту без особых трудностей. Здесь собран полный каталог предлагаемых яхт в бухте, маршруты, услуги, а также сети отелей и ресторанов. 
        Сегодня мы с оптимизмом смотрим в будущее. Верим в создание в Балаклаве в ближайшие годы яхтенной марины с инфраструктурой мирового класса и процветание яхтенного бизнеса на юге России!

        </p>
    </div>


    <div class="text-indigo-600 text-center text-[24pt] font-bold">
        Партнеры
    </div>
    <div class=" border-gray-300 text-indigo-600 w-full text-2xl px-4 h-96 flex">
        <img src="img/kvantorium_logo.png" class="w-1/4 h-[60%] flex" alt="">
        <img src="img/sevgulogo.png" class="w-[20%] h-[60%] flex  right-0" alt="">
    </div>
    
    <a name="FAQ">
    <div id="FAQ" class="text-indigo-600 text-center text-[24pt] font-bold">
        FAQ
    </div>
    <div class=" mb-24 border-gray-300 text-indigo-600 text-2xl px-4 h-auto">
        <p class="underline underline-offset-8 mt-16 decoration-1">
            Какую яхту Вы мне посоветуете?<br>
            Сколько пассажиров может принять яхта на борт?<br>
            Что включено в стоимость аренды яхт?<br>
            Какие могут быть дополнительные платежи?<br>
            Как заказать яхту?<br>
            Как производится бронирование яхты и окончательная оплата аренды?<br>
            Как организованно питание на яхте?<br>
            Есть ли на яхте холодильник и другое кухонное оборудование?<br>
            Есть ли на яхте посуда?<br>
            Есть ли на яхте пресная вода?<br>
            Что такое кейтеринг?<br>
            Маршрут круиза<br>
            Возможны ли заходы в города Крыма для осуществления экскурсии по городу, шопинга и посещения развлекательных заведений?<br>
            Где производится посадка и высадка с яхты?<br>
            Возможен ли трансфер?<br>
            Какие документы неоходимо иметь с собой?<br>
            Где яхта останавливается на ночевку?<br>
            Можно ли брать на яхту детей?<br>
            Что делать если меня «укачивает»?<br>
            Одежда и обувь, необходимые вещи на яхте<br>
            Есть ли на яхте питание 220 В?<br>

        </p>
    </div>
    
    <?php
    include('footer.php');
    ?>
</body>
</html>