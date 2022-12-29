<!-- INTERNATIONAL TRAINING PROGRAMS
МЕЖДУНАРОДНЫЕ ПРОГРАММЫ ОБУЧЕНИЯ -->

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
                <div class="second">
                    <ul class="nospace group">
                        <li class="one_half first">
                            <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>МЕЖДУНАРОДНЫЕ ПРОГРАММЫ ОБУЧЕНИЯ И СТАЖИРОВКИ</h6>
                            <p align="center">Центр передового опыта ECOMEKEN предлагает своим клиентам инновационные обучающие курсы с выдачей международных сертификатов.
                            <button type="submit" value="submit"><a href = "contacts-ru.php">Подробнее</a></button></p>
                        </li>
                        <li class="one_half">
                        <h6 class="nospace btmspace-10" align="center"><i class="fa fa-location-arrow"></i>ТРАНСФЕРТ ТЕХНОЛОГИЙ</h6>
                            <p align="center">Курс по трансферту технологий от Университета Штайнбасс.
                            <button type="submit" value="submit"><a href = "transtech-ru.php">Подробнее</a></button></p>
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