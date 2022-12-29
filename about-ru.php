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
                <div class="one_third first"><img src="images/demo/carlos-muza-hpjSkU2UYSU-unsplash_1x.jpg" alt=""></div>
                <div class="two_third">
                    <h2 class="heading" align="center">НАШИ ПРИНЦИПЫ</h2>
                        <li>
                            <p align="justify">В работе для нас главное:</br>
                            <ul align="justify">
                                <li>предложение потребителю действительно полезного и нужного продукта или услуги</li>
                                <li>взаимовыгодное и доверительное сотрудничество с партнерами</li>
                                <li>обеспечение сотрудникам комфортных условий работы</li>
                                <li>честность, открытость и уважение в отношениях с клиентами, сотрудниками, партнерами, конкурентами</li>
                                <li>рациональное использование ресурсов</li>
                            </ul></p>
                            <p align="center"><b>ЭКОЛОГИЧНЫЙ БИЗНЕС и ЭКОНОМИЧНЫЕ IT-РЕШЕНИЯ - основа успеха наших клиентов и партнеров.</b></p>
                        </li>
                        <li>
                            <p align="justify">Новый блок, добавить ещё текст</br></p>
                        </li>
                    </p>
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