<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리디북스</title>
    <!-- 파비콘 -->
    <link href="img/favi-ridi-3.png" type="imge/icon" rel="shortcut icon">
    <!-- 스와이퍼 css를 cdn으로 연결-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부 css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- 스와으퍼 js를 cdn으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section>
        <? include "sub_section.html"; ?>    
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>

    </div><!--wrap-->
    <div class="top">TOP</div>
    <!-- 사이트 맵 -->
    <? include "site.html"; ?>
</body>
</html>