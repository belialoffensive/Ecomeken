<!-- DEVELOPMENT OF WEBSITES AND ONLINE STORES
РАЗРАБОТКА САЙТОВ И ИНТЕРНЕТ-МАГАЗИНОВ -->

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
                <div class="one_third first"><img src="images/demo/0_kBHpKva09AsGj7RQ.jpg" alt=""></div>
                <div class="two_third">
                    <h2 class="heading" align="center">РАЗРАБОТКА САЙТОВ И ИНТЕРНЕТ-МАГАЗИНОВ</h2>
                    <p align="justify">Нужен сайт компании или интернет-магазин? Мы поможем быстро и эффективно создать для Вас и Вашей компании интернет-сайт, продвигать Вашу компанию в сети Интернет или помочь в организации продаж Ваших товаров через созданный нами интернет-магазин</p>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>

    <div class="wrapper row3">
        <main class="container clear">
            <div class="content">
                <!-- ################################################################################################ -->
                <div id="gallery">
                    <figure>
                        <header class="heading" align="center">ТАРИФЫ НА РАЗРАБАТЫВАЕМЫЕ САЙТЫ</header>
                        <ul align="center" class="nospace clear">
                            <li class="one_third first">
                            <p align="center"><b>САЙТ-ВИЗИТКА</b><br><br>
                            простой сайт с описанием услуг<br>
                            <b>От 100 тыс.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>

                            <li class="one_third">
                            <p align="center"><b>ИНТЕРНЕТ-МАГАЗИН</b><br><br>
                            собственный интернет-магазин<br>
                            <b>От 200 тыс.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>
                            <li class="one_third">
                            <p align="center"><b>КОРПОРАТИВНЫЙ ПОРТАЛ</b><br><br>
                            автоматизация работы компании<br>
                            <b>От 300 тыс.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>
                        </ul>
                        <ul align="center" class="nospace clear">
                            <li class="one_third first">
                            <p align="center"><b>МАРКЕТПЛЕЙС</b><br><br>
                            электронная торговая площадка<br>
                            <b>От 8 млн.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>

                            <li class="one_third">
                            <p align="center"><b>ИНФОРМАЦИОННЫЙ ПОРТАЛ</b><br><br>
                            новостной ресурс<br>
                            <b>От 10 млн.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>

                            <li class="one_third">
                            <p align="center"><b>ЭЛЕКТРОННЫЙ КАТАЛОГ</b><br><br>
                            специализированная база данных<br>
                            <b>От 15 млн.тенге</b><button type="submit" value="submit"><a href="contacts-ru.php">Подробнее</a></button></p></li>
                        </ul>
                    </figure>
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