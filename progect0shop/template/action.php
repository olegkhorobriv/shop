<?php
if(isset($_POST['submit'])){
    $size = $_POST['size'];
    $color = $_POST['color'];
    for($i = 0; $i < count($result); $i++){
        $id = $result[$i]['id'];
        $foto = $result[$i]['img1'];
        $desk = $result[$i]['min_description'];
        $name = $result[$i]['name'];
        $price = $result[$i]['price'];
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    $basket = createBasket($ip, $id, $size, $color, $foto,  $desk, $name,$price);

    header("Location: /basket");
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

<section class="goods">
    <div class="container">
        <div class="goods_inner">
            <?php
            //            var_dump($result);
            $out = '';
            for ($i = 0; $i < count($result); $i++) {


                $out .= '<div class="goods_inner-foto">';

                $out .= '<div class="popup-gallery">';

                $out .= '<div class="goods_inner-t">';
                if ($result[$i]['img1'] !== '') {
                    $out .= '<a href="' . $result[$i]['img1'] . '" title="' . $result[$i]['name'] . '"><img src="' . $result[$i]['img1'] . '"></a>';
                }

                $out .= '</div>';
                $out .= '<div class="goods_inner-f">';
                if ($result[$i]['img2'] !== '') {
                    $out .= '<a href="' . $result[$i]['img2'] . '" title="' . $result[$i]['name'] . '"><img src="' . $result[$i]['img2'] . '"></a>';
                }
                if ($result[$i]['img3'] !== '') {
                    $out .= '<a href="' . $result[$i]['img3'] . '" title="' . $result[$i]['name'] . '"><img src="' . $result[$i]['img3'] . '"></a>';
                }
                if ($result[$i]['img4'] !== '') {
                    $out .= '<a href="' . $result[$i]['img4'] . '" title="' . $result[$i]['name'] . '"><img src="' . $result[$i]['img4'] . '"></a>';
                }
                if ($result[$i]['img5'] !== '') {
                    $out .= '<a href="' . $result[$i]['img5'] . '" title="' . $result[$i]['name'] . '"><img src="' . $result[$i]['img5'] . '"></a>';
                }
                $out .= '</div>';
                $out .= '</div>';

                $out .= '</div>';
                $out .= '<form action="" method="post">';
                $out .= '<div class="goods_inner-box">';
                $out .= '<div class="goods_inner-title">';
                $out .= $result[$i]['min_description'];
                $out .= '<p class="line"></p>';
                $out .= '</div>';
                $out .= '<div class="goods_inner-size">';
                $out .= 'Розмір <select name="size">';
                if ($result[$i]['size'] !== '') {
                    $out .= '<option value="' . $result[$i]['size'] . '">' . $result[$i]['size'] . '</option>';
                }

                if ($result[$i]['size2'] !== '') {
                    $out .= '<option value="' . $result[$i]['size2'] . '">' . $result[$i]['size2'] . '</option>';
                }
                if ($result[$i]['size3'] !== '') {
                    $out .= '<option value="' . $result[$i]['size3'] . '">' . $result[$i]['size3'] . '</option>';
                }
                if ($result[$i]['size4'] !== '') {
                    $out .= '<option value="' . $result[$i]['size4'] . '">' . $result[$i]['size4'] . '</option>';
                }
                $out .= '</select>';
                $out .= '<p class="line"></p>';
                $out .= '</div>';
                $out .= '<div class="goods_inner-description">';
                $out .= $result[$i]['description'];
                $out .= '</div>';
                $out .= '<div class="goods_inner-color">';
                $out .= '<p class="line"></p>';
                $out .= 'Color: <select name="color">';
                if ($result[$i]['color'] != '') {
                    $out .= '<option value="' . $result[$i]['color'] . '">' . $result[$i]['color'] . '</option>';
                }

                if ($result[$i]['color2'] != '') {
                    $out .= '<option value="' . $result[$i]['color2'] . '">' . $result[$i]['color2'] . '</option>';
                }
                if ($result[$i]['color3'] != '') {
                    $out .= '<option value="' . $result[$i]['color3'] . '">' . $result[$i]['color3'] . '</option>';
                }

                $out .= '</select>';
                $out .= '<div class="price">';
                $out .= 'Вартість товару  <span>' . $result[$i]['price'] . '</span>';
                $out .= '</div>';
                $out .= '<div class="input">';
                $out .= '<input type="submit" value="Придбати" name="submit">';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '</div>';
                $out .= '</form>';

            }
            echo $out;
            ?>
        </div>
    </div>
</section>



<!--<div class="popup-gallery">-->
<!--    <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="Очиститель"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Зимний танец"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="Незваный гость"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="О нет, только не снова!"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Лебединое озеро"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="Встряска"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a>-->
<!--    <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Кто это, мамочка?"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a>-->
<!--</div>-->

<!--<img src="best.jpg" alt="">-->
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




