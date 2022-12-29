<!-- TECHNOLOGY TRANSFER
ТРАНСФЕР ТЕХНОЛОГИЙ -->

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
                <div class="two_quater first"><img src="images/demo/struktura_tsentrov_1x.jpg" alt=""></div>
                <div class="one_quater">
                    <h2 class="heading" align="center">Сертифицированный курс по передаче технологий в соответствии с концепцией IMLEAD ®</h2>
                    <p align="justify">В настоящее время недостаточно просто использовать технологии. В связи с быстрыми темпами совершенствования технологий, 
                            их разнообразием и растущей сложностью эффективность бизнес-процессов все больше зависит от грамотного управление технологиями на 
                            организационном уровне. Это означает не только эффективное применение уже используемых технологий, но и постоянное повышение их эффективности 
                            и согласование технологической перспективы с другими аспектами функционирования организации.</br>
                            Настоящий курс посвящен освоению навыков управления трансфером технологий на примере практических проектов с Германией.</p>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>

    <div class="wrapper row3">
        <main class="container clear">
        <div class="center btmspace-80">
                <h1 class="heading uppercase btmspace-30">Для кого курс</h1>
                <p align="center">Если вы заинтересованы в продвижении своей управленческой карьеры и стремлении стать лидером по передаче технологий, этот компактный курс поможет вам.</br>
                Шесть ориентированных на практику гибких модулей с видео лекциями, два онлайн-коллоквиума и индивидуальный коучинг вашего бизнес-проекта по запросу.</p>
            </div>
            <div class="group">
                <div class="third">
                    <ul class="nospace group">
                        <li class="one_third first">
                            <h6 class="nospace btmspace-10" align="center">Модуль 1. Введение</h6>
                        </li>
                        <li class="one_third">
                        <h6 class="nospace btmspace-10" align="center">Модуль 2. От идеи до инновации</h6>
                        </li>
                        <li class="one_third last">
                        <h6 class="nospace btmspace-10" align="center">Модуль 3. Методы трансфера технологий</h6>
                        </li>
                    </ul>
                    <ul class="nospace group">
                        <li class="one_third first">
                            <h6 class="nospace btmspace-10" align="center">Модуль 4. Стратегическое развитие бизнеса</h6>
                        </li>
                        <li class="one_third">
                        <h6 class="nospace btmspace-10" align="center">Модуль 5. Концепция IMLEAD® HEPTHATLON</h6>
                        </li>
                        <li class="one_third last">
                        <h6 class="nospace btmspace-10" align="center">Модуль 6. Международный трансфер технологий и коммуникации</h6>
                        </li>
                    </ul>
                </div>
            </div>
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