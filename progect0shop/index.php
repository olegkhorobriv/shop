<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once 'core/function.php';
$conn = connect();

$route = $_GET['route']; // NULL!
$url = explodeURL($route);
// main - главная страниц
// cat - категории
// article - статья

switch ($route) {
    case NULL:
        $result = meinResult();

//        $nav = meinNav();
        $action = meinaction();

        require_once 'template/main.php';
        break;
    case ($url[0] == 'set' and isset($url[1])):
        $set = $url[1];

        $result = setCategory($set);

        require_once 'template/set.php';
        break;
    case ($url[0] == 'product' and isset($url[1])):
        $id = $url[1];

        $result = productCategory($id);

        require_once 'template/product.php';
        break;
    case ($url[0] == 'action' and isset($url[1])):
        $id = $url[1];

        $result = productCategoryAction($id);

        require_once 'template/action.php';
        break;
    case ($url[0] == 'basket'):

        require_once 'template/basket.php';

        break;
    case ($url[0] == 'login'):

        require_once 'template/login.php';

        break;
    case ($url[0] == 'register'):

        require_once 'template/register.php';

        break;
    case ($url[0] == 'form'):

        require_once 'template/form.php';

        break;
    case ($url[0] == 'user'):

        require_once 'template/user.php';

        break;
    case ($url[0] == 'registered' and isset($url[1])):
        $id = $url[1];

        $result = registeredCategory($id);

        require_once 'template/registered.php';
        break;
    case ($url[0] == 'search'):

        require_once 'template/search.php';

        break;
    case ($url[0] == 'progectA' and  $url[1] == 'registerA'):

        require_once 'template/adminRegister.php';

        break;
    case ($url[0] == 'loginA' and  $url[1] == 'adminA'):

        require_once 'template/loginAdmin.php';

        break;
    case ($url[0] == 'progect' and  $url[1] == 'admin'):

            require_once 'template/admin.php';

    break;
    case ($url[0] == 'admin' and  $url[1] == 'user'):

        require_once 'template/seorchUser.php';

        break;
    case ($url[0] == 'admin' and  $url[1] == 'basket'):

        require_once 'template/adminBasket.php';

        break;
    case ($url[0] == 'admin' and  $url[1] == 'product'):

        require_once 'template/adminProduct.php';

        break;
    case ($url[0] == 'update' and  isset($url[1])):
         $id = $url[1];


        require_once 'template/adminUpdate.php';
        break;
    case ($url[0] == 'update-Action' and  isset($url[1])):
        $id = $url[1];


        require_once 'template/updateAction.php';
        break;
    case ($url[0] == 'delete' and  isset($url[1])):
        $id = $url[1];
        if(getUser()){
            $query = "DELETE FROM products WHERE id=".$id;
            execQuery($query);


            header("Location: /admin/product");
            exit;
        }
        header("Location: /");

        break;
    case ($url[0] == 'delete-Action' and  isset($url[1])):
        $id = $url[1];
        if(getUser()){
            $query = "DELETE FROM action WHERE id=".$id;
            execQuery($query);


            header("Location: /admin/product");
            exit;
        }
        header("Location: /");

        break;
    case ($url[0] == 'admin' and  $url[1] == 'create'):

        require_once 'template/create.php';

        break;
    case ($url[0] == 'admin' and  $url[1] == 'action-A'):

        require_once 'template/actionA.php';

        break;
    case ($url[0] == 'admin' and  $url[1] == 'product-Action'):

        require_once 'template/productAction.php';

        break;
    case ($url[0] == 'logout'):

        require_once 'template/logout.php';

        break;
//    case 2:
//        echo "i равно 2";
//        break;
    default:
        require_once 'template/404.php';
}