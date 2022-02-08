<?php

if (!getUser()) {
    header("Location: /loginA/adminA");
}

$category = CategoryAdmin();
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $min_description = $_POST['min_description'];
    $size = $_POST['size'];
    $size2 = $_POST['size2'];
    $size3 = $_POST['size3'];
    $size4 = $_POST['size4'];
    $color = $_POST['color'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];


    move_uploaded_file($_FILES['img1']['tmp_name'], 'static/images/' . $_FILES['img1']['name']);
    $img1 = '/static/images/' .$_FILES['img1']['name'];


    move_uploaded_file($_FILES['img2']['tmp_name'], 'static/images/' . $_FILES['img2']['name']);
    $img2 = '/static/images/' . $_FILES['img2']['name'];


    move_uploaded_file($_FILES['img3']['tmp_name'], 'static/images/' . $_FILES['img3']['name']);
    $img3 = '/static/images/' .$_FILES['img3']['name'];


    move_uploaded_file($_FILES['img4']['tmp_name'], 'static/images/' . $_FILES['img4']['name']);
    $img4 = '/static/images/' .$_FILES['img4']['name'];


    move_uploaded_file($_FILES['img5']['tmp_name'], 'static/images/' . $_FILES['img5']['name']);
    $img5 = '/static/images/' .$_FILES['img5']['name'];


    $search = $_POST['search'];
    $date = date('Y-m-d');
    $categoryA = $_POST['category'];

    $create = adminCreate($name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date,$categoryA);
    if ($create) {
        header("Location: /progect/admin");
    } else {
        setcookie("alert", "create error", time() + 60 * 1);
    }
    if (isset($_COOKIE['alert'])) {
        $alert = $_COOKIE['alert'];
        setcookie("alert", "", time() - 60 * 1);
        unset($_COOKIE['alert']);
        echo $alert;
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

<section class="form">
    <div class="container">


        <form action="" method="post" enctype="multipart/form-data">
            <div class="form__inner">
                <div class="form__update">
                    <p>Назва товару <input type="text" name="name" value=""></p>
                    <p>Ціна <input type="text" name="price" value=""></p>

                    <p>Опис товару <textarea cols="30" rows="8" name="description"></textarea></p>
                    <p>Короткий опис товару <textarea cols="30" rows="8" name="min_description"></textarea></p>

                    <p>Перший варіант зозміру товару <input type="text" name="size" value=""></p>
                    <p>Другий варіант зозміру товару <input type="text" name="size2" value=""></p>
                    <p>Третій варіант зозміру товару <input type="text" name="size3" value=""></p>
                    <p>Четвертий варіант зозміру товару <input type="text" name="size4" value=""></p>
                    <p>Перший варіант кольору товару <input type="text" name="color" value=""></p>
                    <p>Другий варіант кольору товару <input type="text" name="color2" value=""></p>
                    <p>Третій варіант кольору товару <input type="text" name="color3" value=""></p>
                    <p>Ключові слова для пошуку <textarea name="search" cols="30" rows="8"></textarea></p>
                    <p>Cetegory:
                        <select name="category">
                            <?php
                            $out = '';
                            for ($i = 0; $i < count($category); $i++) {

                                    $out .= '<option value="' . $category[$i]['url_category'] . '" selected>' . $category[$i]['name'] . "</option>";


                            }
                            echo $out;
                            ?>
                        </select>
                    </p>
                </div>
                <div class="form__update-foto">';
                    <p>Photo 1: <input type="file" name="img1" value=""</p>


                    <p>Photo 2: <input type="file" name="img2" value=""</p>


                    <p>Photo 3: <input type="file" name="img3" value=""</p>


                    <p>Photo 4: <input type="file" name="img4" value=""</p>


                    <p>Photo 5: <input type="file" name="img5" value=""</p>

                </div>
            </div>


            <p><input type="submit" value="Create" name="create"></p>

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

<script src="/static/js/main.js"></script>
</body>
</html>

