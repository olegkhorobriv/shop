<?php

if (!getUser()) {
    header("Location: /loginA/adminA");
}
$result = seorchUser();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Леді Демітреско</title>
    <link rel="shortcut icon" href="faviancon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Spectral:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/magnific.css">
    <link rel="stylesheet" href="/stile/stile.css">
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__inner-logo">
                <a href="/">RARI</a>
            </div>
            <div class="header__nav">
                <ul>
                    <li class="box"><a href="#">Про нас</a></li>
                    <li class="box"><a href="#">Сертифікати</a></li>
                    <li class="box"><a href="#">Новини</a></li>
                    <li class="box"><a href="#">Контакти</a></li>
                    <li class="box"><a href="#">Блог</a></li>
                    <li class="box"><a href="#">Оплата і доставка</a></li>
                </ul>
            </div>
            <div class="header__inner-foto">
                <ul>
                    <li class="header__inner-aicon"><a href="#"><img
                                src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" alt=""></a></li>
                    <li class="header__inner-aicon"><a href="#"><img
                                src="https://cdn-icons-png.flaticon.com/128/2111/2111646.png" alt=""></a></li>
                    <li class="header__inner-aicon"><a href="#"><img
                                src="https://cdn-icons-png.flaticon.com/128/145/145802.png" alt=""></a></li>
                </ul>
            </div>
            <div class="header__login">
                <li class="box"><a href="/logout">Вийти</a></li>
            </div>
        </div>
    </div>

</header>

<!--<div class="user">-->
<!--    <div class="container">-->
<!--        <div class="user__inner">-->
<!--            <div class="user__inner-box">-->
<!--                <ul>-->
<!--                    <li>Імя<span>Олег</span></li>-->
<!--                    <li>Прізвище<span>Журавський</span></li>-->
<!--                    <li>Логін<span>пвіапвіап</span></li>-->
<!--                    <li>Емейл<span>павіпвапаавпвапвап</span></li>-->
<!--                    <li>Дата реєстрації<span>1234234</span></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="user">
    <div class="container">
        <div class="user__inner">
            <?php
            $out = '';
            for($i = 0; $i < count($result); $i++){
                $out .= '<div class="user__inner-box">';
                $out .= '<ul>';
                $out .= '<li>Імя<span>'.$result[$i]['name'].'</span></li>';
                $out .= '<li>Прізвище<span>'.$result[$i]['surnames'].'</span></li>';
                $out .= '<li>Логін<span>'.$result[$i]['login'].'</span></li>';
                $out .= '<li>Емейл<span>'.$result[$i]['email'].'</span></li>';
                $out .= '<li>Дата реєстрації<span>'.$result[$i]['dateuser'].'</span></li>';
                $out .= '</ul>';
                $out .= '</div>';
            }
            echo $out;
            ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__inner-info">

                <div class="footer__inner-box">

                    <ul class="footer-li">
                        <li><a href="#">Про нас</a></li>
                        <li><a href="#">Сертифікати</a></li>
                        <li><a href="#">Новини</a></li>
                    </ul>
                </div>
                <div class="footer__inner-box">

                    <ul class="footer-li">
                        <li><a href="#">Контакти</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Оплата і доставка</a></li>
                    </ul>
                </div>
                <div class="footer__inner-box2">
                    <ul>
                        <li class="header__inner-aicon"><a href="#"><img
                                    src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png" alt=""></a></li>
                        <li class="header__inner-aicon"><a href="#"><img
                                    src="https://cdn-icons-png.flaticon.com/128/2111/2111646.png" alt=""></a></li>
                        <li class="header__inner-aicon"><a href="#"><img
                                    src="https://cdn-icons-png.flaticon.com/128/145/145802.png" alt=""></a></li>
                    </ul>
                    <div class="submit">
                        <form action="">
                            <input type="text" placeholder="Залиште повідомлення">
                            <button type="submit">Відправити</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="protection">Всі права захищено <?php echo date("Y") ?></div>
    </div>
</footer>

<script src="/static/js/main.js"></script>
</body>
</html>
