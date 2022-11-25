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
<body>
    <div class="pt-24"></div>
    <div class="pb-10 text-indigo-600 text-center text-[24pt] font-bold">
        <?php
            echo $_GET['what']; 
        ?>
    </div>
    <div class="grid grid-cols-4 gap-4 pb-12">
        <?php
            function Card($name, $people, $price, $photo)
            {
            echo "    <div class='grid h-auto py-6 items-start justify-start px-8'>
            <div class='text-indigo-600 max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl'>
            <img src='img/boats/$photo' alt='plant' class='h-[256px] w-[384px] w-full' />
                <div class='p-5'>
                    <p class='text-medium mb-5 bold'><strong>$name</strong></p>
                    <p class='text-medium mb-5 '><strong>Вместимость:</strong> до $people человек</p>
                    <p class='text-medium mb-5 '><strong>Стоимость:</strong> $price руб./час</p>
    
                    <div class='flex'>
                        <a href='/more.php' class='w-1/2 mr-5 rounded-md bg-indigo-600   text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75'><button class='w-full py-2 text-center'>Подробнее</button></a>
                        <a href='/buy.php'  class='w-1/2 rounded-md bg-indigo-600  text-indigo-100 hover:bg-indigo-500 hover:shadow-md duration-75'><button class='w-full py-2 text-center'>Заказать</button></a>
                    </div>
                </div>
            </div>
        </div> ";
            }
        ?>

        <?php card('Яхта Carver 60 Miami', 15, 15000, '1.jpg');
        card('Яхта Meridian 381', 10, 12000, '2.jpg');
        card('Яхта лимузин Veneto', 11, 10000, '3.jpg');
        card('Яхта Azimut 43', 10, 11000, '4.jpg');
        card('Яхта Galeon 440', 10, 13000, '5.jpg');
        card('Яхта Mochi Craft 51', 10, 14000, '6.jpg');
        card('Яхта «Св. Митрофан»', 16, 22000, '7.jpg');
        card('Яхта Dominator 68', 12, 25000, '8.jpg');?>
    </div>

    <?php
        include('footer.php');
    ?>
</body>
</html>