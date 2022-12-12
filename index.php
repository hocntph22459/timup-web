<?php
include "./models/connect.php";
include "./models/models-sanpham.php";


$url = isset($_GET['url']) ? $_GET['url'] : '';
// echo $url;
switch ($url) {
    case '':
        // trang chủ
    case 'home':
        $listproall = loadall_pro_home();
        $listcate = locsp();
        include "./views/home.php";
        break;
    case 'watches':
        $listproall = loadall_pro_home();
        // $listpro = listsploc();
        include "./views/watches.php";
        break;
    case 'about':
        include "./views/about.php";
        break;
    case 'contact-us':
        include "./views/contact.php";
        break;
    case 'login':
        include "./views/login.php";
        break;
        case 'signin':
            include "./views/signin.php";
            break;
    default:
        include "./views/404.php";
}
