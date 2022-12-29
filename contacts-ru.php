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
                <div>
                    <h2 class="heading" align="center">Связаться с нами</h2>
                    <ul class="nospace" align="center">
                    <li class="btmspace-10"><span class="fa fa-globe"></span> Республика Казахстан, г. Астана, Шоссе Коргалжын, 21/1, Офис 7</li>
                    <li class="btmspace-10"><span class="fa fa-phone"></span><a href="tel:+77771277057"> +7 777 127 70 57</a></li>
                    <li><span class="fa fa-envelope-o"></span><a href="mailto:info@ecomeken.kz"> info@ecomeken.kz</a></li>
                </ul>
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