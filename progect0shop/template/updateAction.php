<?php

if (!getUser()) {
    header("Location: /loginA/adminA");
}
$result = CategoryAction($id);
for ($i = 0; $i < count($result); $i++){
    $categoryA = $result[$i]['name_categori'];
}
//$category = CategoryAdmin();
if(isset($_POST['update'])){
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);
    $min_description = trim($_POST['min_description']);
    $size = trim($_POST['size']);
    $size2 = trim($_POST['size2']);
    $size3 = trim($_POST['size3']);
    $size4 = trim($_POST['size4']);
    $color = trim($_POST['color']);
    $color2 = trim($_POST['color2']);
    $color3 = trim($_POST['color3']);

//    $img1 = $_POST['img1'];
    if (isset($_FILES['img1']['tmp_name']) AND $_FILES['img1']['tmp_name']!='') {
        move_uploaded_file($_FILES['img1']['tmp_name'], 'static/images/' . $_FILES['img1']['name']);
        $img1 = '/static/images/'.$_FILES['img1']['name'];
    }
    else {
        for ($i = 0; $i < count($result); $i++){
            $img1 = $result[$i]['img1'];
        }
    }

//    $img2 = $_POST['img2'];
    if (isset($_FILES['img2']['tmp_name']) AND $_FILES['img2']['tmp_name']!='') {
        move_uploaded_file($_FILES['img2']['tmp_name'], 'static/images/' . $_FILES['img2']['name']);
        $img2 = '/static/images/' .$_FILES['img2']['name'];
    }
    else {
        for ($i = 0; $i < count($result); $i++){
            $img2 = $result[$i]['img2'];
        }
    }

//    $img3 = $_POST['img3'];
    if (isset($_FILES['img3']['tmp_name']) AND $_FILES['img3']['tmp_name']!='') {
        move_uploaded_file($_FILES['img3']['tmp_name'], 'static/images/' . $_FILES['img3']['name']);
        $img3 = '/static/images/' .$_FILES['img3']['name'];
    }
    else {
        for ($i = 0; $i < count($result); $i++){
            $img3 = $result[$i]['img3'];
        }
    }

//    $img4 = $_POST['img4'];
    if (isset($_FILES['img4']['tmp_name']) AND $_FILES['img4']['tmp_name']!='') {
        move_uploaded_file($_FILES['img4']['tmp_name'], 'static/images/' . $_FILES['img4']['name']);
        $img4 = '/static/images/' .$_FILES['img4']['name'];
    }
    else {
        for ($i = 0; $i < count($result); $i++){
            $img4 = $result[$i]['img4'];
        }
    }

//    $img5 = $_POST['img5'];
    if (isset($_FILES['img5']['tmp_name']) AND $_FILES['img5']['tmp_name']!='') {
        move_uploaded_file($_FILES['img5']['tmp_name'], 'static/images/' . $_FILES['img5']['name']);
        $img5 = '/static/images/' .$_FILES['img5']['name'];
    }
    else {
        for ($i = 0; $i < count($result); $i++){
            $img5 = $result[$i]['img5'];
        }
    }

    $search = trim($_POST['search']);
    $date = trim(date('Y-m-d'));

    $pu = adminUpdateAction($id, $name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date, $categoryA);
    if ($pu) {
        setcookie("alert", "update ok", time() + 60 * 10);
        header('Location: '.$_SERVER['REQUEST_URI']);
    } else {
        setcookie("alert", "update error", time() + 60 * 10);
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
}

if (isset($_COOKIE['alert'])) {
    $alert = $_COOKIE['alert'];
    setcookie("alert", "", time() - 60 * 10);
    unset($_COOKIE['alert']);
    echo $alert;
}

//var_dump($date);

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
                <?php
                $out = '';
                for ($i = 0; $i < count($result); $i++) {

                    $out .= '<div class="form__update">';
                    $out .= '<p>Назва товару <input type="text" name="name" value="' . $result[$i]['name'] . '"></p>';
                    $out .= '<p>Ціна <input type="text" name="price" value="' . $result[$i]['price'] . '"></p>';
//                    $out .= '<p>Опис товару <input type="text" name="title" value="'.$result[$i]['description'].'"></p>';
                    $out .= '<p>Опис товару <textarea cols="30" rows="8" name="description">' . $result[$i]['description'] . '</textarea></p>';
                    $out .= '<p>Короткий опис товару <textarea cols="30" rows="8" name="min_description">' . $result[$i]['min_description'] . '</textarea></p>';
//                    $out .= '<p>Короткий опис товару <input type="text" name="title" value="'.$result[$i]['min_description'].'"></p>';
                    $out .= '<p>Перший варіант зозміру товару <input type="text" name="size" value="' . $result[$i]['size'] . '"></p>';
                    $out .= '<p>Другий варіант зозміру товару <input type="text" name="size2" value="' . $result[$i]['size2'] . '"></p>';
                    $out .= '<p>Третій варіант зозміру товару <input type="text" name="size3" value="' . $result[$i]['size3'] . '"></p>';
                    $out .= '<p>Четвертий варіант зозміру товару <input type="text" name="size4" value="' . $result[$i]['size4'] . '"></p>';
                    $out .= '<p>Перший варіант кольору товару <input type="text" name="color" value="' . $result[$i]['color'] . '"></p>';
                    $out .= '<p>Другий варіант кольору товару <input type="text" name="color2" value="' . $result[$i]['color2'] . '"></p>';
                    $out .= '<p>Третій варіант кольору товару <input type="text" name="color3" value="' . $result[$i]['color3'] . '"></p>';
                    $out .= '<p>Ключові слова для пошуку <textarea name="search" cols="30" rows="8">' . $result[$i]['search'] . '</textarea></p>';
                    $out .= '</div>';
                    $out .= '<div class="form__update-foto">';
                    $out .= '<p>Photo 1: <input type="file" name="img1" value="'.$result[$i]['img1'].'"</p>';
                    $out .= '<img src="'.$result[$i]['img1'].'" alt="" style="width: 100px">';

                    $out .= '<p>Photo 2: <input type="file" name="img2" value="'.$result[$i]['img2'].'"</p>';
                    $out .= '<img src="'.$result[$i]['img2'].'" alt="" style="width: 100px">';

                    $out .= '<p>Photo 3: <input type="file" name="img3" value="'.$result[$i]['img3'].'"</p>';
                    $out .= '<img src="'.$result[$i]['img3'].'" alt="" style="width: 100px">';

                    $out .= '<p>Photo 4: <input type="file" name="img4" value="'.$result[$i]['img4'].'"</p>';
                    $out .= '<img src="'.$result[$i]['img4'].'" alt="" style="width: 100px">';

                    $out .= '<p>Photo 5: <input type="file" name="img5" value="'.$result[$i]['img5'].'"</p>';
                    $out .= '<img src="'.$result[$i]['img5'].'" alt="" style="width: 100px">';
                    $out .= '</div>';
                }


                echo $out;
                echo '</div>';

                ?>

                <p><input type="submit" value="Update" name="update"></p>

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


