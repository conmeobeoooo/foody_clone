<?php
session_start();
?>
<?php
$conn = new mysqli('localhost', 'root', "", 'product');
?>

<?php
if (isset($_GET['option'])) {
    switch ($_GET['option']) {
        case 'logout':
            unset($_SESSION['member']);
            header('Location: home');
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/food_web/backend/">
    <title>Foody</title>
    <link rel="icon" href="./public/img/foody.png" type="image/png">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/banner.css">
    <link rel="stylesheet" href="./public/css/delivery.css">
    <link rel="stylesheet" href="./public/css/discovery.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <base href="http://localhost/food_web/backend/">
</head>

<body>
    <!-- <style>
        @media screen and (max-width: 1200px) {

            header {
                display: none;
            }

            .wrapper {
                display: none;
            }

            .footer {
                display: none;
            }

            .top-friend-container {
                display: none;
            }

            .btn-back-top {
                display: none;
            }

            .btn-down-app {
                display: none;
            }

            .footer-down-app-wrap {
                display: none;
            }

            .mobile {
                display: block !important;
            }



        }
    </style> -->
    <div style="display: none;  text-align: center; align-items: center; margin-top: 330px; font-size: 20px" class="mobile">
        Foody web chưa được hỗ trợ trên điện thoại, hãy tải ứng dụng tại đây:
        <a style="color: blue" href="https://play.google.com/store/apps/details?id=com.foody.vn.activity">https://play.google.com/store/apps/details?id=com.foody.vn.activity</a>
    </div>
    <script src="./public/product.js"></script>
    <header class="header">
        <div class="container">
            <div class="container-topbar">
                <ul class="topbar">
                    <li class="topbar-items topbar-items-active">
                        <a style="color: #333; " class="topbar-link topbar-current" href="#" rel="home">Khám Phá</a>
                    </li>
                    <li class="topbar-items">
                        <a class="topbar-link" href="#" rel="nofollow">Đặt Giao Hàng</a>
                    </li>
                    <li class="topbar-items">
                        <a class="topbar-link" href="#" rel="nofollow">Đi Chợ
                            <img class="topbar-link-img" src="https://www.foody.vn/style/css/strongbow/images/sb-new.gif" alt="">
                        </a>
                    </li>
                    <li class="topbar-items">
                        <a class="topbar-link" href="#" rel="nofollow">NowPOS</a>
                    </li>
                    <li class="topbar-items">
                        <a class="topbar-link" href="#" rel="nofollow">Giảm Giá</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="header-toolbar">
            <div class="container">
                <div class="foody-wrapper">
                    <a href="" class="logo header-logo">
                        <img src="https://www.foody.vn/style/images/logo/foody-vn.png" alt="">
                    </a>
                    <div class="btn-select__city">
                        <div class="btn-select__content">
                            <p>Hà Nội</p>
                            <i class="fa-solid fa-sort-down btn-select__icon"></i>
                        </div>
                    </div>
                    <div class="btn-select__category">
                        <div class="btn-category__content">
                            <p>Ăn uống</p>
                            <i class="fa-solid fa-sort-down btn-select__icon"></i>
                        </div>
                    </div>
                    <div class="search-bar__top">
                        <div class="search-bar__content">
                            <div class="search-text">
                                <from>
                                    <input placeholder="Địa điểm, món ăn, loại hình..." type="text" id="search_name" class="search-input">
                                </from>
                                <div style="max-height: 435px; overflow: hidden;position: absolute; top: 36px;left: -51px;width: 550px;background-color: #fff;border: 1px solid #ddd;box-sizing: border-box;" class="search-box">
                                    <ul class="list-group" id="output_search">

                                    </ul>
                                </div>
                            </div>
                            <div class="search-filter">
                                <i class="fa fa-sliders search-filter__icon"></i>
                                <p class="search-filter__text">Bộ lọc</p>
                            </div>
                            <div href="" class="search-button">
                                <a class="search-icon" href="">
                                    <span class="fa fa-search"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-header">
                        <div class="place-menu">
                            <a href="" class="menu-icon">
                                <span style="margin-top: 8px;" class="fa fa-bars"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-apps">
                        <div>
                            <a class="header-apps__content" href="https://www.foody.vn/ung-dung-mobile" target="blank">
                                <span class="fa-solid fa-mobile-screen header-apps__icon"></span>
                                <p class="header-apps__text">Apps</p>
                            </a>
                        </div>
                    </div>
                    <div style="width: 200px; height: 41px" class="menu-login__control">
                        <?php if (empty($_SESSION['member'])) : ?>
                            <div class="account-manage">
                                <a href="view/account" class="btn-login-new">
                                    <span class="btn-login__text">Đăng nhập</span>
                                </a>
                            </div>
                        <?php else : ?>
                            <div style="margin-right: 10px" class="account-manage">
                                <span style="font-size: 15px; border-bottom: 2px solid black;"><?= ($_SESSION['member']) ?></span>
                                <a href="?option=logout" style="margin-left: 8px;"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 4 24 24" width="20px" fill="#000000">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 
                            17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z" />
                                    </svg></a>
                            </div>
                        <?php endif; ?>
                        <div style="margin-left:0px; margin-right: 5px" class="notificationCrl">
                            <div style="float: right;">
                                <div class="notificationBox">
                                    <div class="notification-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-add">
                            <a href="">
                                <i style="margin-top: 7px" class="fa-solid fa-plus btn-add-icon"></i>
                            </a>
                        </div>

                        <!-- Gio hàng -->

                        <!-- <div class="header-cart">
                            <li class="header-cart-content">
                                <i class="fa-solid fa-cart-shopping header-cart-icon"></i>
                                <i class="fa-solid fa-cart-shopping header-cart-icon"></i>
                            </li> -->
                        <!-- Cart -->
                        <div style="width: 0px" class="header__cart">
                            <div class="header__cart-wrap">
                                <a target="blank" href="view/cart">
                                    <i class="fa-solid fa-cart-shopping header-cart-icon"></i>
                                </a>
                                <!-- <span class="header__cart-notice">3</span> -->
                                <!-- No cart: header__cart-list--no-cart -->
                                <!-- <div class="header__cart-list">
                                    <img src="./assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                                    <span class="header__cart-list-no-cart-msg">
                                        Chưa có sảm phẩm
                                    </span>
                                    <h4 class="header__cart-heading">Sảm phẩm đã thêm</h4>
                                    <ul class="header__cart-list-item">
                                        <li class="header__cart-item">
                                            <img src="https://images.foody.vn/res/g75/743406/prof/s750x400/foody-upload-api-foody-mobile-kai-tea-jpg-180906103813.jpg"
                                                alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">Trà Sữa Kai Tea - Doãn Kế Thiện
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">45.000</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">1</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">
                                                        Coffee/Dessert
                                                    </span>
                                                    <div class="header__cart-item-remove">Xóa</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header__cart-view-cart btn btn--primary">
                                        <a target="_blank" href="http://127.0.0.1:5501/food_web/cart.html">
                                            <span class="header__cart-view-text">Xem giỏ hàng</span>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </header>