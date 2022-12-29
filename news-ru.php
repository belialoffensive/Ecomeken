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
            <div class="content">
                <div id="gallery">
                    <figure>
                        <header class="heading" align="center">НОВОСТИ ПОРТАЛА</header>
                        <ul align="center" class="nospace clear">
                            <!-- тут новости
                                <li class="one_third first"><a href="#"><img
                                        src="../images/demo/gallery/podbor_oborudovaniya_na_sayt_1x.jpg" alt=""></a>
                            </li>
                            <li class="one_third"><a href="#"><img
                                        src="../images/demo/gallery/dlya_sayta_ekomeken_1x.jpg" alt=""></a></li>
                            <li class="one_third"><a href="#"><img src="../images/demo/gallery/dlya_sayta_podbor_1x.jpg"
                                        alt=""></a></li> -->
                        </ul>
                    </figure>
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