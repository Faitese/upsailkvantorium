<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include('layout.php');
    ?>
</head>
<body>
    <div id="FAQ" class="text-indigo-600 pt-20 text-center text-[24pt] font-bold">
        Аренда парусной яхты "Николаев"
    </div>
    <div class="grid grid-cols-2 gap-4 w-full h-full">

        <div class="grid">
            <div class="h-full ml-10 ">
            <div id="gallery" class="w-full text-white ">
        <div id=" default-carousel gallery" class="pt-10 w-[93%] relative" data-carousel="static">
            <div class="border-2 border-gray-200 overflow-hidden relative h-[32rem]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="img/boats/more/1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/boats/more/2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/boats/more/3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>
            

            <div id="aboutUs" class=" flex absolute bottom-8 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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
</div>
        
        </div>
        <div class="grid text-indigo-600 text-[16pt]">
            <div>
                <p class="pt-4 text-center text-[18pt] font-bold"> Характеристики </p>
                
                <p class="pb-6">
                    
                    Год постройки	 2012<br>
                    Длина	24 м<br>
                    Ширина	 7 м<br>
                    Осадка 	3,2 м<br>
                    Мах скорость	 9 узлов<br>
                    Пассажировместимость	12 чел<br>
                    Количество кают для гостей	 3<br>
                    Количество спальных мест	 6<br>
                </p>
        
                <p class="pb-14">
                    цена за час 35 000 руб<br>
                    цена за световой день 350 000 руб<br>
                    цена за сутки 400 000 руб<br>
                </p>

                <a href="/buy.php" class="text-center px-32  text-white bg-indigo-500  py-4 text-[20pt]  px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 ">
                        <span class="">Заказать</span>
                </a>

            </div>
        </div>

    </div>

    
    <div class="text-indigo-600 text-[16pt] w-full px-6 mt-12 mb-24">
        <p class="text-center text-[18pt] pb-4 font-bold"> В стоимость аренды входит</p>
        <ol>
            <li>	&sdot; Услуги экипажа<br></li>
            <li>	&sdot; Подготовка яхты к плаванию<br></li>
            <li>	&sdot; Топливо<br></li>
            <li>	&sdot; Бункеровка пресной водой<br></li>
            <li>	&sdot; Постельное белье, полотенца<br></li>
            <li>	&sdot; Кухонная посуда и принадлежности<br></li>
            <li>	&sdot; Камбузное оборудование<br></li>
            <li>	&sdot; Стоянка в домашней марине<br></li>
            <li>	&sdot; Удочки и рыболовные принадлежности<br></li>
            <li>	&sdot; Резиновая лодка с мотором (если входит в комплектацию яхты)<br></li>
            <li>	&sdot; Спасательные средства<br></li>
            <li>	&sdot; Аптечка<br></li>
            <li>	&sdot; Уборка яхты<br></li>
            <li>	&sdot; Информационные услуги</li>
        </ol>

        <p class="pt-8 text-center pb-4 text-[18pt] font-bold">Услуги за доп. оплату</p>
        <ol>
            <li>	&sdot; Услуги повара<br></li>
            <li>	&sdot; Продукты<br></li>
            <li>	&sdot; Кейтеринг<br></li>
            <li>	&sdot; Дайвинг<br></li>
            <li>	&sdot; Праздничное оформление яхты<br></li>
        </ol>

        <p class="pt-8 pb-4 text-center text-[18pt] font-bold">Описание</p>
        Парусно-моторная яхта “Николаев” построена с применением новейших разработок в области судостроения, соединив в себе новаторство конструкции с опытом судостроения. Судно условно можно назвать “гибридом”: в его конструкции совмещен комфорт и уют моторной яхты с парусным вооружением.<br><br>
        Дайвинг, купание и рыбалка в открытом море, прогулки по морю к историческим достопримечательностям и живописным уголкам Крымского побережья- вот далеко не полный перечень услуг, которые мы предлагаем своим клиентам<br><br>
        Школа дайвинга TEAM NIKOLAEV предлагает широкий спектр учебных программ от мировых лидеров индустрии , проводимый истинными профессионалами в области подводного плавания, они с радостью передадут свой опыт и дадут почувствовать себя неотъемлемой частью подводного мира. Программы обучения клуба TEAM NIKOLAEV включают в себя курсы как для сертифицированных дайверов, желающих получить навыки и опыт более высокого уровня, так и для новичков, которые только мечтали о покорении морских глубин.

    </div>

    <?php
        include('footer.php');
    ?>
</body>
</html>