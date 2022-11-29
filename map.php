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
        <?php echo $_GET['what']?>
    </div>
    <div class="pb-32" style=" position:relative;overflow:hidden; h-screen">
    <iframe src="https://yandex.ru/map-widget/v1/-/CCUjEOss-C" class="px-96 w-full h-[40rem]" frameborder="1" allowfullscreen="true" style="position:relative;">
    </iframe></div>
    <?php
        include('footer.php');
    ?>
</body>
</html>