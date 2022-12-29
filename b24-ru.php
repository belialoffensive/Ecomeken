<?php 
session_start();
include('./db/dbConnect.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ecomeken - экологичные экономичные IT-технологии и решения</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>

<body id="top">
    <?php include('./partials/header-ru.php'); ?>
    
    <div class="wrapper row3">
        <main class="container clear">
            <div class="group">
                <div class="one_third first"><img src="images/demo/logo-wiki-2.png" alt=""></div>
                <div class="two_third">
                    <h2 class="heading" align="center"><a href="https://www.bitrix24.ru/">BITRIX24</a></h2>
                    <p align="justify">С 1 по 30 декабря приобретайте Битрикс24 со скидкой до 30%! (при покупке на год).
                        Все инструменты — под одной крышей. Автоматизация процессов, контроль сделок и продаж, создание
                        сайтов и магазинов,
                        выполнение задач и совместная работа — любые задачи будут по плечу. Преобразите бизнес с
                        Битрикс24!</p>
                    <button type="submit" value="submit"><a href="https://www.ecomeken.kz/saytpartnerabitriks24new/">Подробнее</a></button>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>

    <?php include('./partials/footer-ru.php'); ?>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>