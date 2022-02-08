<?php
function explodeURL($url)
{
    return explode("/", $url);
}

function meinResult()
{
    $query = 'select * from products';
    return select($query);
}
function meinResultAction(){
    $query = 'select * from action';
    return select($query);
}


function meinaction()
{
    $query = 'select * from action';
    return select($query);
}

function setCategory($set)
{
    $query = "select * from products WHERE `name_categori` ='" . $set . "'";
    return select($query);
}

function productCategory($id)
{
    $query = "select * from products WHERE `id` ='" . $id . "'";
    return select($query);
}
function CategoryAction($id){
    $query = "select * from action WHERE `id` ='" . $id . "'";
    return select($query);
}
 function productCategoryAction($id){
     $query = "select * from action WHERE `id` ='" . $id . "'";
     return select($query);
 }

function createBasket($ip, $id, $size, $color, $foto,  $desk, $name,$price)
{
    $query = "INSERT INTO basket (ip, id_product, sizepro, color, foto, desk, namep, price) VALUES ('" . $ip . "', '" . $id . "','" . $size . "','" . $color . "','" . $foto . "','" . $desk . "','" . $name . "','" . $price . "')";
    return execQuery($query);

}
function ip($ip){
    $query = "select * from basket WHERE `ip` ='" . $ip . "'";
    return select($query);
}
//function productIP($id){
//    $query = "select * from products WHERE `id` ='" . $id . "'";
//    return select($query);
//}
function createUser($name, $surnames, $email, $login, $password, $ip, $date){
    $pass = md5(md5(trim($password)));
    $query = "INSERT INTO user (name, surnames, email, login, password, ip, dateuser) VALUES ('" . $name . "', '" . $surnames . "','" . $email . "','" . $login . "','" . $pass . "','" . $ip . "','" . $date . "')";
    return execQuery($query);
}
function searchUser($login, $password){
    $password = md5(md5(trim($password)));
    $login = trim($login);
    $query = "SELECT id, login FROM user WHERE login='" . $login . "' AND password='" . $password . "'";
    $result = select($query);
    if (count($result) === 0) return false;
    return $result;
}
function login($login)
{
    $query = "select id from user where login='" . $login . "'";
    $result = select($query);
    if (count($result) === 0) return false;
    return true;
}
function purchaseUser($ip, $name, $surname, $phone, $address){
  $query =  "UPDATE basket SET name ='" . $name . "', surname ='" . $surname . "', phone ='" . $phone . "' , address ='" . $address . "' WHERE `ip` ='" . $ip . "'";
    return  execQuery($query);
}
function staticResult(){
    $query = 'select * from static';
    return select($query);
}
function registeredCategory($id){
    $query = "select * from static WHERE `id` ='" . $id . "'";
    return select($query);
}
function seaochProduct($search){
    $query = "SELECT * FROM products WHERE search LIKE '%".$search."%'";
    return  select($query);
}
function createAdmin($login, $password){
    $pass = md5(md5(trim($password)));
    $query = "INSERT INTO admin (login, password) VALUES ('" . $login . "','" . $pass . "')";
    return execQuery($query);
}
function loginAdmin($login, $password)
{
    $password = md5(md5(trim($password)));
    $login = trim($login);
    $query = "SELECT id, login FROM admin WHERE login='" . $login . "' AND password='" . $password . "'";
    $result = select($query);
    if (count($result) === 0) return false;
    return $result;

}
function generateCode($length = 7){
    $chars ='fsbnfjkdsvbnhfjsdbvsQKJJBBKJNKJB09655986578';
    $code = '';
    $clen = strlen($chars)-1;
    while(strlen($code) < $length){
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}
function  updateUser($id, $hash, $ip){


        $query = "UPDATE admin SET hash='".$hash."', ip=INET_ATON('".$ip."') WHERE id=".$id;

    return execQuery($query);


}
function updateUserP($id, $hash, $ip){


    $query = "UPDATE user SET hash='".$hash."', ip=INET_ATON('".$ip."') WHERE id=".$id;

    return execQuery($query);


}
function getUser() {
    if (isset($_COOKIE['id']) and isset($_COOKIE['hash'] )){
        $query = "SELECT id, login, hash, INET_NTOA(ip) as ip FROM admin WHERE id = ".intval($_COOKIE['id'])." LIMIT 1";
        $user = select($query);
        if (count($user) === 0) {
            return false;
        }
        else {
            $user = $user[0];
            if ( $user['hash']!== $_COOKIE['hash']) {
                clearCookies();
                return false;
            }
            if (!is_null($user['ip'])) {
                if ($user['ip'] !== $_SERVER['REMOTE_ADDR']){
                    clearCookies();
                    return false;
                }
            }
            $_GET['login'] = $user['login'];
            return true;
        }

    }
    else {
        clearCookies();
        return false;
    }
}
function getUserP() {
    if (isset($_COOKIE['id']) and isset($_COOKIE['hash'] )){
        $query = "SELECT id, login, hash, INET_NTOA(ip) as ip FROM user WHERE id = ".intval($_COOKIE['id'])." LIMIT 1";
        $user = select($query);
        if (count($user) === 0) {
            return false;
        }
        else {
            $user = $user[0];
            if ( $user['hash']!== $_COOKIE['hash']) {
                clearCookies();
                return false;
            }
            if (!is_null($user['ip'])) {
                if ($user['ip'] !== $_SERVER['REMOTE_ADDR']){
                    clearCookies();
                    return false;
                }
            }
            $_GET['login'] = $user['login'];
            return true;
        }

    }
    else {
        clearCookies();
        return false;
    }
}
function clearCookies(){
    setcookie('id', "", time()-60*60*24*30, "/");
    setcookie('hash', "", time()-60*60*24*30, "/", null, null, true);
    unset($_GET['login']);
}
function seorchUser(){
    $query = 'select * from user';
    return select($query);
}
function adminBasket(){
    $query = 'select * from basket';
    return select($query);
}
function logout(){
    clearCookies();
    header("Location: /");
    exit;
}
function CategoryAdmin(){
    $query = 'select * from category';
    return select($query);
}
function adminUpdate($id, $name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date, $categoryA){
    $query =  "UPDATE products SET name ='" . $name . "', price ='" . $price . "', description ='" . $description . "' , min_description ='" . $min_description . "', size ='" . $size . "',  size2 ='" . $size2 . "', size3 ='" . $size3 . "', size4 ='" . $size4 . "', color ='" . $color . "', color2 ='" . $color2 . "', color3 ='" . $color3 . "', img1 ='" . $img1 . "', img2 ='" . $img2 . "', img3 ='" . $img3 . "', img4 ='" . $img4 . "', img5 ='" . $img5 . "', search ='" . $search . "', date ='" . $date . "', name_categori ='" . $categoryA . "' WHERE `id` ='" . $id . "'";
    return  execQuery($query);
}
function adminUpdateAction($id, $name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date, $categoryA){
    $query =  "UPDATE action SET name ='" . $name . "', price ='" . $price . "', description ='" . $description . "' , min_description ='" . $min_description . "', size ='" . $size . "',  size2 ='" . $size2 . "', size3 ='" . $size3 . "', size4 ='" . $size4 . "', color ='" . $color . "', color2 ='" . $color2 . "', color3 ='" . $color3 . "', img1 ='" . $img1 . "', img2 ='" . $img2 . "', img3 ='" . $img3 . "', img4 ='" . $img4 . "', img5 ='" . $img5 . "', search ='" . $search . "', date ='" . $date . "', name_categori ='" . $categoryA . "' WHERE `id` ='" . $id . "'";
    return  execQuery($query);
}
function adminCreate($name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date, $categoryA) {
    $query = "INSERT INTO `products` (`name`, `price`, `description`, `min_description`, `size`, `size2`, `size3`, `size4`, `color`, `color2`, `color3`, `img1`, `img2`, `img3`, `img4`, `img5`, `search`, `date`, `name_categori`) VALUES ('".$name."' , '".$price."' , '".$description."' , '".$min_description."' , '".$size."', '".$size2."', '".$size3."', '".$size4."', '".$color."', '".$color2."', '".$color3."', '".$img1."', '".$img2."', '".$img3."', '".$img4."', '".$img5."', '".$search."', '".$date."', '".$categoryA."')";
    return execQuery($query);
}
function adminActionCriate($name, $price, $description, $min_description, $size, $size2, $size3, $size4, $color, $color2, $color3, $img1, $img2, $img3, $img4, $img5, $search, $date, $categoryA) {
    $query = "INSERT INTO `action` (`name`, `price`, `description`, `min_description`, `size`, `size2`, `size3`, `size4`, `color`, `color2`, `color3`, `img1`, `img2`, `img3`, `img4`, `img5`, `search`, `date`, `name_categori`) VALUES ('".$name."' , '".$price."' , '".$description."' , '".$min_description."' , '".$size."', '".$size2."', '".$size3."', '".$size4."', '".$color."', '".$color2."', '".$color3."', '".$img1."', '".$img2."', '".$img3."', '".$img4."', '".$img5."', '".$search."', '".$date."', '".$categoryA."')";
    return execQuery($query);
}

//function idUpdate($id){
//    $query = "select * from product WHERE `id` ='" . $id . "'";
//    return select($query);
//}
?>