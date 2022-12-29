<!-- IT audit and consulting
IT-аудит и консалтинг -->

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
                <div class="one_third first"><img src="images/demo/460x700.png" alt=""></div>
                <div class="two_third">
                    <h2 class="heading" align="center">КАК ПРИМЕНЯТЬ IT НА ПРЕДПРИЯТИИ?</h2>
                    <p align="justify">Владельцы компании часто сталкиваются с необходимостью выбора - автоматизировать 
                        бизнес-процесс своими силами или привлекать специализированную компанию. Наш опыт применения 
                        лучших практик и стандартов IT поможет не потерять деньги, время и деловую репутацию.</p>
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
                        <ul align="center" class="nospace clear">
                            <li class="one_third first"><a href="#"><img src="../images/demo/gallery/img3.jpg" alt=""></a>
                            <p align="center"><b>IT АУДИТ</b><br><br>
                            Проведение аудита используемых IT систем. Эффективность применения, планы развития, возможности интеграции</p></li>

                            <li class="one_third"><a href="#"><img src="../images/demo/gallery/img2.jpg" alt=""></a>
                            <p align="center"><b>АНАЛИЗ И РЕКОМЕНДАЦИИ</b><br><br>
                            Анализ существующих трендов и бенчмаркинг развития IT в отрасли.</p></li>

                            <li class="one_third"><a href="#"><img src="../images/demo/gallery/img1.jpg" alt=""></a>
                            <p align="center"><b>ПРОВЕРКА СУЩЕСТВУЮЩИХ IT СИСТЕМ</b><br>
                            Анализ соответствия уже установленных IT систем потребностям бизнеса и оптимизация расходов на управление IT</p></li>
                        </ul>
                    </figure>
                </div>
            </div>
            <!-- main body -->
            <div class="clear"></div>
        </main>
    </div>
    <script data-b24-form="inline/4/zw0nnx" data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://cdn-ru.bitrix24.ru/b18363022/crm/form/loader_4.js');</script>
    <?php include('./partials/footer-ru.php'); ?>

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>