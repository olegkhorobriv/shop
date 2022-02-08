<?php
if(isset($_POST['submit'])){
    $err = '';
    $name = trim($_POST['name']);

    $surnames = trim($_POST['surnames']);
    $email = trim($_POST['email']);
    if(strlen($login = trim($_POST['login'])) < 4){
        $err .= '<li>! Занадто короткий логін </li>';
    }
//    $login = trim($_POST['login']);
    if(strlen($password = trim($_POST['password'])) < 4){
        $err .= '<li>! Занадто короткий пароль </li>';
    }
//    $password = trim($_POST['password']);
    $ip = $_SERVER['REMOTE_ADDR'];

    $date = date('d-m-Y');
    if((login($login)) == false){
        $result = createUser($name, $surnames, $email, $login, $password, $ip, $date);
    }
    else{
        $err .= "! Такий логін вже існує";
    }

    if($result == true and $err == ''){
        header("Location: /login");
    }
    else{
        $out = '';
        $out .='<div class="err">';
        $out .= $err;
        $out .='</div>';
    }


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

                    <div class="login_inner-text">Імя</div>
                    <input type="text" name="name" placeholder="Введіть данні" required>
                    <div class="login_inner-text">Прізвище</div>
                    <input type="text" name="surnames" placeholder="Введіть данні" required>
                    <div class="login_inner-text">Номер телефону або електронну пошту</div>
                    <input type="email"  name="email" placeholder="Введіть данні" required>


                    <div class="login_inner-text">Придумайте логін</div>
                    <input type="text" name="login" placeholder="Введіть данні" required>
                    <div class="login_inner-text">Придумайте пароль</div>
                    <input type="password" name="password" placeholder="Введіть данні" required>


                </div>
                <div class="login-input">
                    <input type="submit" value="Зареєструватися" name="submit">
                </div>
            </form>
            <div class="login_inner-info">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam amet assumenda consequatur delectus deserunt, doloremque excepturi expedita illum inventore iusto laboriosam magnam minima necessitatibus nisi odit perferendis possimus quo ratione rerum saepe sint sit soluta suscipit, tenetur ullam vitae? Accusamus alias architecto consequatur consequuntur corporis distinctio dolore, enim laudantium libero magnam modi, nam non pariatur vel, veniam? Amet deleniti dicta doloremque fugiat fugit labore nisi quo ratione recusandae sint? Consectetur consequuntur cupiditate dolores earum esse eveniet, ex expedita fugiat ipsum laboriosam laborum minima mollitia nam nihil omnis pariatur quisquam quod, ratione reiciendis saepe sint tempora tempore temporibus voluptatem voluptates?
            </div>

        </div>

        <?php echo  $out; ?>



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




