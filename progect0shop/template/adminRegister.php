<?php
if(isset($_POST['submit'])){

$login = trim($_POST['login']);

$password = trim($_POST['password']);

createAdmin($login, $password);

    header("Location: /loginA/adminA");
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
        </div>
    </div>

</header>

<section class="login">
    <div class="container">


        <div class="login_inner">
            <form action="" method="post">
                <div class="login_inner-box">




                    <div class="login_inner-text">Придумайте логін</div>
                    <input type="text" name="login" placeholder="Введіть данні" required>
                    <div class="login_inner-text">Придумайте пароль</div>
                    <input type="password" name="password" placeholder="Введіть данні" required>


                </div>
                <div class="login-input">
                    <input type="submit" value="Зареєструватися" name="submit">
                </div>
            </form>


        </div>





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

<script src="/static/js/main.js"></script>
</body>
</html>





