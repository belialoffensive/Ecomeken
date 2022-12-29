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
            <div class="center btmspace-80">
                <h1 class="heading uppercase btmspace-30">Услуги</h1>
            </div>
            <ul class="nospace group services">
                <li>
                    <article class="overlay1"><a href="abp-ru.php"><i class="fa fa-legal"></i></a>
                    <h6 class="heading" align = "center">Автоматизация бизнес-процессов</h6>
                    <p align = "justify">Экологичные экономичные решения для Вашего бизнеса</p>
                    <footer><a href="abp-ru.php">Читать далее &raquo;</a></footer>
                </article>
            </li>
            <li>
                <article class="overlay1"><a href="transtech-ru.php"><i class="fa fa-archive"></i></a>
                <h6 class="heading" align = "center">Трансферт технологий</h6>
                <p align = "justify">Международный альянс Центров Передового опыта в области зеленых технологий&hellip;</p>
                <footer><a href="transtech-ru.php">Читать далее &raquo;</a></footer>
            </article>
        </li>
        <li>
            <article class="overlay1"><a href="prem-ru.php"><i class="fa fa-archive"></i></a>
            <h6 class="heading" align = "center">Международные стажировки и деловые поездки</h6>
            <p align = "justify">lorem ipsum&hellip;</p>
            <footer><a href="prem-ru.php">Читать далее &raquo;</a></footer>
        </article>
    </li>
    <li>
        <article class="overlay1"><a href="#"><i class="fa fa-archive"></i></a>
        <h6 class="heading" align = "center">ESG-консалтинг</h6>
        <p align = "justify">lorem ipsum&hellip;</p>
        <footer><a href="#">Читать далее &raquo;</a></footer>
    </article>
</li>
</ul>
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