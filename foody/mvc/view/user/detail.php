<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/ShoppeFoodbase.css">
    <link rel="stylesheet" href="../public/css/ShoppeFood_header.css">
    <link rel="stylesheet" href="../public/css/ShoppeFood_banner.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="background-color: #fff;">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="3itCA7js"></script>
    <div id="app">
        <div class="wrapper">
            <header class="header">
                <div class="container-header">
                    <div class="container">
                        <div class="header-content justify-content-between align-items-center">
                            <div class="header-logo col-auto">
                                <span>
                                    <a href="">
                                        <img class="header-logo-img"
                                            src="https://shopeefood.vn/app/assets/img/shopeefoodvn.png?4aa1a38e8da801f4029b80734905f3f7"
                                            alt="">
                                    </a>
                                </span>
                            </div>
                            <div class="select-local col-auto">
                                <div class="dropdown">
                                    <div role="button" class="dropdown-btn">
                                        Hà Nội
                                    </div>
                                </div>
                            </div>
                            <div class="header-list-item col">
                                <a href="" class="header-item active">Đồ ăn</a>
                                <a href="" class="header-item">Thực phẩm</a>
                                <a href="" class="header-item">Bia</a>
                                <a href="" class="header-item">Hoa</a>
                                <a href="" class="header-item">Siêu thị</a>
                                <a href="" class="header-item">Thuốc</a>
                                <a href="" class="header-item">Thú cưng</a>
                            </div>
                            <div class="header-icon-search col-auto">
                                <span class="icon icon-search"></span>
                            </div>
                            <div class="user-account col-auto">
                                <button class="btn btn-login">
                                    Đăng nhập
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <?php
            // ket noi co so du lieu
             $conn = new mysqli('localhost', 'root', "", 'product' );  
             // lay id 
             $id = isset($_GET['id']) ? $_GET['id'] : '';  
             //lay id tren web so sanh voi csdl
             $sqldetail = "SELECT * FROM `delivery-item` WHERE id = $id";
             $result= $conn->query($sqldetail);
             $item = mysqli_fetch_array($result);          
            ?>

            <div class="sf-restaurant clear-fix">
                <div class="container">
                    <div class="detail-restaurant-img">
                        <img src="<?= $item['imgchitiet'] ?>"; class="restaurant-img">
                    </div>
                    <div style="margin-top: 20px" class="detail-restaurant-info">
                        <div class="like-restaurant">
                            <div class="tag-preferred">
                                <i class="tag-icon fa fa-thumbs-up"></i>
                                <span class="tag-text">Yêu thích</span>
                            </div>
                            <span class="tag-desc">Quán ăn</span>
                        </div>
                        <h1 class="name-restaurant"><?= $item['name']?></h1>
                        <span class="address-restaurant"><?= $item['address']?></span>
                        <div class="rating">
                            <div class="stars">
                                <span class="start-full">
                                    <i class="fa fa-star star-icon"></i>
                                </span>
                                <span class="start-full">
                                    <i class="fa fa-star star-icon"></i>
                                </span>
                                <span class="start-full">
                                    <i class="fa fa-star star-icon"></i>
                                </span>
                                <span class="start-full">
                                    <i class="fa fa-star star-icon"></i>
                                </span>
                                <span class="start-half">
                                    <i class="fa fa-star-half-alt star-icon"></i>
                                </span>
                                <span class="number-rating">999+</span>
                                <span class="rating-text">Đánh giá trên ShoppeFood</span>
                            </div>
                        </div>
                        <div class="view-more-rating">
                            <a target="_blank" href="https://www.foody.vn/ha-noi/thu-hang-com-van-phong">Xem thêm lượt
                                đánh giá từ Foody</a>
                        </div>
                        <div class="status-restaurant">
                            <div class="opentime-status">
                                <span class="stt online" title="Mở cửa"></span>
                            </div>
                            <div class="time">
                                <i class="fa fa-clock"></i>
                                <span><?= $item['time']?></span>
                            </div>
                        </div>
                        <div class="cost-restaurant">
                            <i class="fas fa-dollar-sign cost-restaurant-icon"></i>
                            <span class="cost-text"><?= $item['gia']?></span>
                        </div>
                        <div class="untility-restaurant clear-fix">
                            <div class="untility-item">
                                <div class="untility-title">
                                    Phí dịch vụ
                                </div>
                                <div class="untility-content">
                                    <span class="text-bold text-red">0.0% Phí phục vụ </span>
                                    <span class="icon icon-untility">

                                    </span>
                                </div>
                            </div>
                            <div class="untility-item">
                                <div class="untility-title">
                                    Dịch vụ bởi
                                </div>
                                <div class="untility-content">
                                    <span class="text-bold text-red">ShoppeFood</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <iframe
                        src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2F127.0.0.1%3A5501%2Ffood_web%2FShoppeFood.html&width=450&layout=standard&action=like&size=small&share=true&height=35&appId"
                        width="450" height="35" style="border:none;overflow:hidden;margin-top: 20px;" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        
                </div>
            </div>
            <div class="container relative clear-fix">
                <div style="min-height: 140px" class="menu-restaurant">
                    <div class="menu-restaurant-tab">
                        <div class="item active">Thực đơn</div>
                    </div>
                    <div class="menu-restaurant-content">
                        <div class="menu-restaurant-container">
                            <div class="menu-restaurant-category">
                                <div class="list-category">
                                    <div class="scrollbar-container ps">
                                        <div class="scrollbar-item">
                                            <span class="scrollbar-text"><?= $item['thucdon']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="menu-restaurant-detail">
                                <div class="menu-restaurant-list">
                                    <div class="search-items">
                                        <p class="input-group">
                                            <i class="fa fa-search search-items-icon"></i>
                                            <input class="search-items-text" placeholder="Tìm món" type="text">
                                        </p>
                                    </div>
                                    <div class="restaurant-items">
                                        <div class="restaurant-content-item">
                                            <div class="restaurant-banner-item">
                                                <div class="menu-group">
                                                    <div class="title-menu">CƠM VĂN PHÒNG</div>
                                                </div>
                                                <div class="item-restaurant-row">
                                                    <div class="row">
                                                        <div class="col-auto item-row-img">
                                                            <button class="inline">
                                                                <img src="https://images.foody.vn/res/g91/902408/s120x120/99a1c470-43e8-4810-8c55-dbb7a6a2ea9c.jpg"
                                                                    width="60px" height="60px" alt="">
                                                            </button>
                                                        </div>
                                                        <div class="col item-restaurant-info">
                                                            <h2 class="item-restaurant-name">Cơm Cá Sốt Cà Chua</h2>
                                                        </div>
                                                        <div class="col-auto item-restaurant-more">
                                                            <div class="row">
                                                                <div class="col-auto product-price">
                                                                    <div class="old-price">
                                                                        45.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                    <div class="current-price">
                                                                        36.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto adding-cart text-right">
                                                                    <div class="btn-adding">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="top: 137px;" class="item-restaurant-row">
                                                    <div class="row">
                                                        <div class="col-auto item-row-img">
                                                            <button class="inline">
                                                                <img src="https://images.foody.vn/res/g91/902408/s120x120/965b3847-e54e-430c-8070-b744c30cc7c8.jpg"
                                                                    width="60px" height="60px" alt="">
                                                            </button>
                                                        </div>
                                                        <div class="col item-restaurant-info">
                                                            <h2 class="item-restaurant-name">Cơm Gà Chua Ngọt</h2>
                                                        </div>
                                                        <div class="col-auto item-restaurant-more">
                                                            <div class="row">
                                                                <div class="col-auto product-price">
                                                                    <div class="old-price">
                                                                        45.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                    <div class="current-price">
                                                                        36.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto adding-cart text-right">
                                                                    <div class="btn-adding">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="top: 218px;" class="item-restaurant-row">
                                                    <div class="row">
                                                        <div class="col-auto item-row-img">
                                                            <button class="inline">
                                                                <img src="https://images.foody.vn/res/g91/902408/s120x120/f786a305-98bc-4f9c-8249-a916ea8185b3.jpg"
                                                                    width="60px" height="60px" alt="">
                                                            </button>
                                                        </div>
                                                        <div class="col item-restaurant-info">
                                                            <h2 class="item-restaurant-name">Sườn Xào Chua Ngọt</h2>
                                                        </div>
                                                        <div class="col-auto item-restaurant-more">
                                                            <div class="row">
                                                                <div class="col-auto product-price">
                                                                    <div class="old-price">
                                                                        45.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                    <div class="current-price">
                                                                        36.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto adding-cart text-right">
                                                                    <div class="btn-adding">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="top: 299px;" class="item-restaurant-row">
                                                    <div class="row">
                                                        <div class="col-auto item-row-img">
                                                            <button class="inline">
                                                                <img src="https://images.foody.vn/res/g91/902408/s120x120/108876b8-efde-420b-ad36-1ca35eb98eca.jpg"
                                                                    width="60px" height="60px" alt="">
                                                            </button>
                                                        </div>
                                                        <div class="col item-restaurant-info">
                                                            <h2 class="item-restaurant-name">Cơm Cá Kho Tương</h2>
                                                        </div>
                                                        <div class="col-auto item-restaurant-more">
                                                            <div class="row">
                                                                <div class="col-auto product-price">
                                                                    <div class="old-price">
                                                                        45.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                    <div class="current-price">
                                                                        36.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto adding-cart text-right">
                                                                    <div class="btn-adding">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="top: 380px;" class="item-restaurant-row">
                                                    <div class="row">
                                                        <div class="col-auto item-row-img">
                                                            <button class="inline">
                                                                <img src="https://images.foody.vn/res/g91/902408/s120x120/02a403ee-ec8b-4c20-a398-a5474f5aa848.jpg"
                                                                    width="60px" height="60px" alt="">
                                                            </button>
                                                        </div>
                                                        <div class="col item-restaurant-info">
                                                            <h2 class="item-restaurant-name">Cơm Thịt Kho Tàu</h2>
                                                        </div>
                                                        <div class="col-auto item-restaurant-more">
                                                            <div class="row">
                                                                <div class="col-auto product-price">
                                                                    <div class="old-price">
                                                                        45.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                    <div class="current-price">
                                                                        36.000
                                                                        <span class="price-top">đ</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto adding-cart text-right">
                                                                    <div class="btn-adding">
                                                                        +
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div style="top: -15px; right: 720px; width: 190px" class="QRcode">
                    <img src="../public/img/qrcode.png" height="200" width="200" style="height:80px; width:80px;">
                    <div>
                        Quét mã để đặt món
                        <br>
                        trên app Shoppe
                    </div>
                    </img>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div style="margin-top: 20px;border-top: 1px solid #333" class="fb-comments"
            data-href="http://127.0.0.1:5501/food_web/ShoppeFood.html" data-width="1200" data-numposts="10"></div>
    </div> -->
    <div style= "border-top: 1px solid #ebebeb;"class="footer">
        <div class="container">
            <div class="container-inner">
                <div class="block-footer">
                    <p class="title-block">Công ty</p>
                    <ul class="menu-footer">
                        <li class="menu-item">
                            <a href="">Giới thiệu</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Trung tâm Trợ giúp</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Quy chế</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Điều khoản sử dụng</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Bảo mật thông tin</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Giải quyết khiếu nại</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Liên hệ</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Hợp tác nhân viên giao nhận</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Đăng ký quán</a>
                        </li>
                        <li class="menu-item">
                            <a href="">ShopeeFood Uni</a>
                        </li>
                        <li class="menu-item">
                            <a href="">Shopee Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="block-footer" style="margin-left: 80px">
                    <p class="title-block">Địa chỉ công ty</p>
                    <span>
                        <p class="block-text">Công Ty Cổ Phần Foody</p>
                        <p class="block-text">Lầu G, Tòa nhà Jabes 1,</p>
                        <p class="block-text">số 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TPHCM</p>
                        <p class="block-text">Giấy CN ĐKDN số: 0311828036</p>
                        <p class="block-text">do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012,</p>
                        <p class="block-text">sửa đổi lần thứ 23, ngày 10/12/2020</p>
                        <p class="block-text">Số điện thoại: 1900 2042</p>
                        <p>
                            <span>Email</span>
                            <a href="Số điện thoại: 1900 2042">support@shoopefood.vn</a>
                        </p>
                    </span>
                    </ul>
                </div>
                <div class="block-footer-last text-center">
                    <div class="logo-footer">
                        <a href="" class="link">
                            <img style="max-width: 100px"
                                src="https://shopeefood.vn/app/assets/img/Logo-ShopeefoodVN.png?a233b36c37415f85f46c25a6cd0963aa"
                                alt="">
                        </a>
                        <p class="font12">
                            © 2022 ShopeeFood
                        </p>
                        <ul class="social-icon">
                            <li>
                                <a href="">
                                    <span class="facebook icons">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="facebook icons">
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block-footer" style="margin-left: 140px">
                    <p class="title-block">Ứng dụng ShopeeFood</p>
                    <a class="footer-app" href="https://itunes.apple.com/us/app/deliverynow/id1137866760"
                        title="Down app IOS">
                        <span class="app-store"></span>
                    </a>
                    <a class="footer-app" href="https://play.google.com/store/apps/details?id=com.deliverynow"
                        title="Down app Android">
                        <span class="app-Android"></span>
                    </a>
                    <a class="footer-app" href="https://appgallery.huawei.com/#/app/C102401853" title="Down app Huawei">
                        <span class="app-Huawei"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>