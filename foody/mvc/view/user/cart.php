<?php
session_start();
// unset($_SESSION['cart']);
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_GET['action'])) {
    $id = $_GET['id'];
    switch ($_GET['action']) {
        case 'add':
            if (array_key_exists($id, $_SESSION['cart'])) {
                $_SESSION['cart'][$id]++;
            } else {
                $_SESSION['cart'][$id] = 1;
            }
            header("location: http://localhost/food_web/backend/view/cart");
            break;
        case 'delete':
            unset($_SESSION['cart'][$id]);
            break;
        case 'update':
            if ($_GET['type'] == 'asc')
                $_SESSION['cart'][$id]++;
            else
                    if ($_SESSION['cart'][$id] > 1)
                $_SESSION['cart'][$id]--;
            header("location: http://localhost/food_web/backend/view/cart");
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
    <link rel="stylesheet" href="../public/css/cart.css">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            user-select: auto;
        }
    </style>
    <div class="wrapper">
        <div class="main">
            <div class="main-content">
                <div class="cart-page">
                    <div class="container">
                        <a href="http://localhost/food_web/backend/">
                            <img src="https://www.foody.vn/style/images/logo/foody-vn.png" alt="">
                        </a>
                        <div class="cart-page-content">
                            <div class="cart-page-product-header">
                                <div class="cart-item-check">
                                    <label for="" class="stardust-checkbox stardust-checkbox--checked">
                                        <input type="checkbox" class="stardust-checkbox-input">
                                        <div class="stardust-checkbox__box"></div>
                                    </label>
                                </div>
                                <div class="cart-page-product-header__product">
                                    Sảm phẩm
                                </div>
                                <div class="cart-page-product-header__unit-price">
                                    Đơn giá
                                </div>
                                <div class="cart-page-product-header__quanlity">
                                    Số lượng
                                </div>
                                <div class="cart-page-product-header__total-price">
                                    Gía
                                </div>
                                <div class="cart-page-product-header__action">
                                    Thao tác
                                </div>
                            </div>
                            <div class="cart-page-section">
                                <?php
                                $conn = new mysqli('localhost', 'root', "", 'product');
                                if (!empty($_SESSION['cart'])) :

                                    $ids = implode(',', array_keys($_SESSION['cart']));
                                    $query = "SELECT * FROM `delivery-item` WHERE id in($ids)";
                                    $result = $conn->query($query);
                                ?>
                                    <?php
                                    $toTal = 0;
                                    foreach ($result as $item) :
                                    ?>
                                        <div class="cart-page-items">
                                            <div class="cart-item">
                                                <div class="cart-item__content">
                                                    <div class="cart-item-check">
                                                        <label for="" class="stardust-checkbox stardust-checkbox--checked">
                                                            <input type="checkbox" class="stardust-checkbox-input">
                                                            <div class="stardust-checkbox__box"></div>
                                                        </label>
                                                    </div>
                                                    <div class="cart-item-img">
                                                        <div class="item-image">
                                                            <img style="width:80px; margin-top: 17.5px" src="<?= $item['imgchitiet'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="cart-item-flex">
                                                        <div class="cart-item-name">
                                                            <a href="" class="item-name"><?= $item['name'] ?></a>
                                                        </div>
                                                        <div class="cart-item-price">
                                                            <div class="item-price">
                                                                <span class="price-text"><?= number_format($item['cart-price']) ?>đ</span>
                                                            </div>
                                                            <div class="cart-item-quanlity">
                                                                <span class="item-quanlity-text"><?= $_SESSION['cart'][$item['id']] ?></span>
                                                            </div>
                                                            <div class="cart-item-total-price"><input style="border:none;background-color: #fff;" type="button" value="-" onclick="location='cart&action=update&type=desc&id=<?= $item['id'] ?>';">
                                                                <?= number_format($subToTal = $item['cart-price'] * $_SESSION['cart'][$item['id']], 0, ',', '.') ?>đ
                                                                <input style="border:none; background-color: #fff; " type="button" value="+" onclick="location='cart&action=update&type=asc&id=<?= $item['id'] ?>';">
                                                            </div>
                                                            <div class="cart-item-action">
                                                                <a href="cart&action=delete&id=<?= $item['id'] ?>">
                                                                    <button class="item-action-text">Xóa</button>
                                                                </a>
                                                            </div>
                                                            <?php $toTal += $subToTal; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    endforeach;
                                    ?>
                                    <div style="background-color: #fafdff; margin-top: 0" class="cart-footer">
                                        <a href="" class="btn-continue">Tiếp tục mua sắm</a>
                                        <div class="cart-footer-summary">
                                            <div class="cart-footer-summary-first">
                                                <div class="cart-footer-summary-content">
                                                    <div class="cart-footer-summary-text">Tổng cộng :</div>

                                                    <div class="cart-footer-summary-total-price"><?= number_format($toTal, 0, ',', '.') ?>đ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a style="width: auto;" href="" class="btn-checkout">Mua Hàng</a>
                                    </div>
                                <?php
                                else :
                                ?>
                                    <img style="margin-left: 445px" src="../public/img/no-cart.png" alt="">
                                    <section style="font-size: 14px; text-align: center">
                                        Chưa có sảm phẩm
                                    </section>
                                <?php
                                endif;
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>