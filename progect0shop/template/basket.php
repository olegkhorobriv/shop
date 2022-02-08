<?php
$ip = $_SERVER['REMOTE_ADDR'];
$basket = ip($ip);

for ($i = 0; $i < count($basket); $i++) {
    $id = $basket[$i]['id'];
}

if(isset($_POST['submit'])){

    header("Location: /form");
}

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
                <li class="box"><a href="/login">Ввійти</a></li>
            </div>
        </div>
    </div>

</header>

<div class="title">Ми знаходимося в корзині</div>
<section class="basket">
    <div class="container">

            <?php
            $out = '';
for($i = 0; $i < count($basket); $i++){

    $out .= '<div class="basket_inner">';
$out .= '<div class="basket_inner-foto">';
$out .= '<img src="'.$basket[$i]['foto'].'" alt="">';
$out .= '</div>';
$out .= '<div class="basket_inner-info">';
$out .= '<div class="basket_inner-name">';
$out .= $basket[$i]['namep'];
$out .= '<p class="line"></p>';
$out .= '</div>';
$out .= '<div class="basket_inner-price">';
$out .= 'Ціна товару ' . $basket[$i]['price'];
$out .= '<p class="line"></p>';
$out .= '</div>';
$out .= '<div class="basket_inner-description">';
$out .= $basket[$i]['desk'];
$out .= '</div>';
$out .= '<div class="basket_inner-size">';
$out .= '<p class="line"></p>';
$out .= 'Розмір:'.$basket[$i]['sizepro'];
$out .= '</div>';
$out .= '</div>';
    $out .= '</div>';
}
echo $out;
                ?>
        <div class="next"><a href="/">Продовжити покупки</a></div>
        <form action="" method="post">
            <div class="input">
            <input type="submit" value="Підтвердити замовлення" name="submit">
            </div>
        </form>

    </div>
</section>


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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/static/js/libs.min.js"></script>
<script src="/static/js/strong.js"></script>
<script src="/static/js/main.js"></script>
</body>
</html>
