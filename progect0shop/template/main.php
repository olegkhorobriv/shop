<?php
/**
 * main page template
 */

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
            <div class="submit">
                <form action="search" method="post">
                    <input type="text" name="search" placeholder="Я хочу знайти">
                    <button type="submit" >Пошук</button>
                </form>
            </div>
            <div class="header__login">
                <li class="box"><a href="/login">Ввійти</a></li>
            </div>
<!--            <div class="search">-->
<!--                <input type="text" placeholder="Введіть пошуковий запит">-->
<!--                    <button type="submit">Знайти</button>-->
<!--                </form>-->
<!--            </div>-->
        </div>
    </div>

</header>

<div class="slider">
    <div class="slide-ana">
        <div style="background-image: url('/static/images/top2.jpg')"><span
                    class="title">Білизна слайд 1</span></div>
        <div style="background-image: url('/static/images/top2.jpg')"><span
                    class="title">Білизна слайд 2</span></div>
        <div style="background-image: url('/static/images/top2.jpg')"><span
                    class="title">Білизна слайд 3</span></div>
        <div style="background-image: url('/static/images/top2.jpg')"><span
                    class="title">Білизна слайд 4</span></div>
    </div>
    <span class="icon-arrow_back" id="prev"></span>
    <span class="icon-arrow_forward" id="next"></span>
</div>

<section class="category">
    <div class="container">
        <div class="category_inner">

            <div class="category_inner-flex">
                <a href="/set/set">
                    <div class="category_inner-box"
                         style="background-image: url('/static/images/category/complect.jpg')">
                        <span>Комплекти одягу</span></div>
                </a>
                <a href="/set/panties">
                    <div class="category_inner-box" style="background-image: url('/static/images/category/trp.jpg')">
                        <span>Трусики</span></div>
                </a>
                <a href="/set/bras">
                    <div class="category_inner-box" style="background-image: url('/static/images/category/buyst.jpg')">
                        <span>Ліфчики</span></div>
                </a>
            </div>
        </div>


        <!--        <div class="category_inner">-->
        <!--            <div class="category_inner-title"></div>-->
        <!--            <div class="category_inner-flex">-->
        <!--                <div class="category_inner-box">Комплекти одягу</div>-->
        <!--                <div class="category_inner-box">Трусики</div>-->
        <!--                <div class="category_inner-box">Ліфчики</div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
</section>


<div class="title-top">Спеціальні пропозиції саме для вас</div>

<section class="product">
    <div class="container">
        <div class="product_inner">
            <?php
            $out = '';
            for ($i = 0; $i < count($result); $i++) {
                $out .= '<a href="/product/'.$result[$i]['id'].'">';
                $out .= '<div class="product_box">';
                $out .= '<div class="product_box-foto" style="background-image: url('.$result[$i]['img1'].')"></div>';

                $out .= '<div class="product_box-description">'.$result[$i]["min_description"];
                $out .= '</div>';
                $out .= '<div class="product_box-price">'.$result[$i]['price'].'</div>';
                $out .= '</div>';
                $out .= '</a>';
                if ($i >= 5) break;
            }
            echo  $out;
            ?>



    </div>
    </div>
</section>

<!--<div class="title-top">Наші найновіші товари</div>-->
<!---->
<!--<section class="product">-->
<!--    <div class="container">-->
<!--        <div class="product_inner">-->
<!--            --><?php
//            $out = '';
//            for ($i = 0; $i < count($nav); $i++) {
//                $out .= '<a href="/product/'.$nav[$i]['id'].'">';
//                $out .= '<div class="product_box">';
//                $out .= '<div class="product_box-foto" style="background-image: url('.$nav[$i]['img1'].')"></div>';
//
//                $out .= '<div class="product_box-description">'.$nav[$i]["min_description"];
//                $out .= '</div>';
//                $out .= '<div class="product_box-price">'.$nav[$i]['price'].'</div>';
//                $out .= '</div>';
//                $out .= '</a>';
//                if ($i >= 5) break;
//            }
//            echo  $out;
//            ?>
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<div class="title-top">Товари по акції</div>

<section class="product">
    <div class="container">
        <div class="product_inner">

            <?php
            $out = '';
            for ($i = 0; $i < count($action); $i++) {
                $out .= '<a href="/action/'.$action[$i]['id'].'">';
                $out .= '<div class="product_box">';
                $out .= '<div class="product_box-foto" style="background-image: url('.$action[$i]['img1'].')"></div>';

                $out .= '<div class="product_box-description">'.$action[$i]["min_description"];
                $out .= '</div>';
                $out .= '<div class="product_box-price">'.$action[$i]['price'].'</div>';
                $out .= '</div>';
                $out .= '</a>';

            }
            echo  $out;
            ?>

        </div>
    </div>
</section>

<div class="certificate">
    <div class="container">
        <a href="" class="certificate-img" style="background-image: url('/static/images/sertuficate/1.jpg')">

            <div class="certificate-img-text">Зробіть подарок близьким чи собі замовте подарунковий сертифікат</div>

        </a>
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
