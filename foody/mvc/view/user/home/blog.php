<div class="wrapper">
    <div class="home-banner">
        <div class="home-banner-container slick-slider">
            <div style="margin: 0 auto; width: 60%" class="slick-track">
                <div style="margin-left: auto;" class="banner-item">
                    <a target="blank" href="https://www.foody.vn/ung-dung-mobile" tittle="Foody App trên Mobile" class="banner-img-link">
                        <img class="banner-item-img" src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">
                    </a>
                    <div class="banner-caption">
                        <div class="banner-caption-name">Foody App trên Mobile</div>
                        <div class="banner-caption__desc">
                            <p>Khám phá, đặt bàn, giao tận nơi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container">
        <div class="box-delivery">
            <div class="delivery-header">
                <div class="avatar-box">
                    <div class="avatar">
                        <img class="avatar-img" src="https://www.foody.vn/asset/styles/images/icons/icon-delivery-60x60-3.png" alt="">
                    </div>
                    <span class="avatar-title">Giao tận nơi</span>
                </div>
                <div class="nav-box">
                    <ul class="nav-box-list" style="white-space: nowrap;">
                        <li class="nav-box__item">
                            <span class="nav-box__text nav-box-text__red" onclick="changeProductList('today', this)">Deal hôm nay</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item">
                            <span class="nav-box__text" onclick="changeProductList('all', this)">Tất cả</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item">
                            <span class="nav-box__text" onclick="changeProductList('food', this)">Đồ ăn</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item">
                            <span class="nav-box__text" onclick="changeProductList('drink', this)">Đồ uống</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item">
                            <span class="nav-box__text" onclick="changeProductList('vegetarian-food', this)">Đồ
                                chay</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item nav-box__item-four">
                            <span class="nav-box__text" onclick="changeProductList('cream-cake', this)">Bánh
                                kem</span>
                            <span class="underline"></span>
                        </li>
                        <li class="nav-box__item nav-box__item-five">
                            <span class="nav-box__text" onclick="changeProductList('dessert', this)">Tráng
                                miệng</span>
                            </a>
                        </li>
                        <!-- phan xem them -->
                        <li class="nav-box__item nav-box-more">
                            <span class="nav-box__text" onClick="hien()">Xem thêm</span>
                            <i class="fa fa-angle-down btn-more-icon"></i>
                            <ul class="dropdown-list">
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Homemade</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Vỉa hè</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Pizza/Burger</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Món gà</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Món lẩu</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Sushi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Mì phở</sp>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span href="" class="dropdown-item">Cơm hộp</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- phan san pham delivery -->
            <div id="today" class="menu-items">
                <ul class="list-items">
                    <!-- product delivery -->

                    <!-- product delivery -->
                    <?php
                    $conn = new mysqli('localhost', 'root', "", 'product');
                    $sql = "SELECT * FROM `delivery-item`";
                    $result = $conn->query($sql);
                    $output = "";
                    ?>
                    <?php
                    foreach ($result as $rows) {
                        $output .=  '<li class="item">
                            <div class="item-brand">
                                <a target="_blank" href="view/detail&id=' . $rows["id"] . '"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="' . $rows["img"] . '"
                                        alt="">
                                </a>
                                <a target="_blank" href="view/detail&id=' . $rows["id"] . '">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">' . $rows["name"] . '</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        ' . $rows["address"] . ';
                                    </div>
                                </a>
                            </div>
                                <div style="display: flex;" class="info-item">
                                    <i style="margin-top: 11px; margin-left: 5px"class="fa fa-tag ng-hide info-item-icon"></i>
                                    <label style="font-size: 13px;margin-top: 15px" for="">Bistro</label>
                                    <a  href="view/cart&action=add&id=' . $rows["id"] . '">
                                    <button id="add-cart"style=" margin-left: 65px;margin-top: 7px;height: 25px;background-color: #ee4d2d;
                                     font-size: 12px; border-radius: 20px; border-color: #ee4d2d;border: 1px solid transparent;" >
                                        <span style=" color: #fff">Add to cart</span>
                                    </button>
                                    </a>
                                </div>
                        
                        </li>';
                    }
                    echo $output;
                    ?>



                </ul>
                <a href="" class="li-page">
                    <i class="li-page-icon fa fa-solid fa-chevron-right"></i>
                </a>
            </div>
            <!-- danh muc all -->
            <div id="all" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g99/982157/prof/s750x400/file_restaurant_photo_kndy_16174-739efb72-210403132550.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">HN - Bún Bò Huế, Phở, Cơm
                                        Mì Xào - 215 Phùng Khoang</span>
                                </div>
                                <div class="item-address limit-text">
                                    215 Phùng Khoang, P.Trung Văn, Nam Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Street food</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g67/668346/prof/s750x400/foody-upload-api-foody-mobile-16-190823100527.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Chè Ngon 73 - Khâm Thiên</span>
                                </div>
                                <div class="item-address limit-text">
                                    73B Khâm Thiên, P. Khâm Thiên, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Coffee/Dessert</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g114/1131120/prof/s750x400/foody-upload-api-foody-mobile-cv-f0b1bda3-220328121905.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Gà Luộc & Gà Ủ Muối - Thành Công</span>
                                </div>
                                <div class="item-address limit-text">
                                    108B Nhà A1 (Mặt Sau) TT Thành Công, P. Thành Công, Ba Đình, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100/992832/prof/s750x400/image-77ee2c72-200910115815.jpeg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Chén Cả Thế Giới - Phố
                                        Bánh Gà & Chè - Chính Kinh</span>
                                </div>
                                <div class="item-address limit-text">
                                    8 Ngõ 40 Chính Kinh, P. Nhân Chính, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Street food</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g103/1020634/prof/s750x400/foody-upload-api-foody-mobile-2-200622142116.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Bếp Quán Zì - Mì Trộn Indomie Siêu Sốt Mĩ
                                        Vị</span>
                                </div>
                                <div class="item-address limit-text">
                                    145 Lê Duẩn, P. Cửa Nam, Hoàn Kiếm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro, Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g113/1128547/prof/s750x400/foody-upload-api-foody-mobile-42-d31fa7ec-220301162459.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Korean Chicken - Gà Rán Truyền Thống Hàn
                                        Quốc- Hoàng...</span>
                                </div>
                                <div class="item-address limit-text">
                                    32 Hoàng Ngân, P. Nhân Chính, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g105/1040487/prof/s750x400/file_restaurant_photo_7fqs_16134-445ce084-210216012246.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tùng Vẩu - Mỳ Trộn & Nước Ép - Thanh
                                        Xuân</span>
                                </div>
                                <div class="item-address limit-text">
                                    Đối Diện 114 Cuối Ngõ 13 Khuất Duy Tiến, P. Thanh Xuân Bắc, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Street food</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g104/1031462/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-200622141452.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Thái Hạnh - Huy Mai - Ăn Vặt Quán</span>
                                </div>
                                <div class="item-address limit-text">
                                    3A Ngõ 4C Đặng Văn Ngữ , Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Street food</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g81/802827/prof/s750x400/image-46e15dff-200910115821.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Gà Tần Gia Bảo - Hoàng Mai</span>
                                </div>
                                <div class="item-address limit-text">
                                    2 Ngõ 169 Hoàng Mai, P. Hoàng Văn Thụ, Hoàng Mai, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Boozer</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g5/47638/prof/s750x400/file_restaurant_photo_mrpu_16247-5e780a04-210627105504.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Cơm Rang Dưa Bò Bà Dung</span>
                                </div>
                                <div class="item-address limit-text">
                                    38 - 39 - 41 Mã Mây, Hoàn Kiếm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Bistro</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="food" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g21/207378/prof/s750x400/file_restaurant_photo_shqb_16140-9f84704b-210223172714.jpeg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Cơm Thố Anh Nguyễn - Dương
                                        Khuê</span>
                                </div>
                                <div class="item-address limit-text">
                                    37 Dương Khuê, P. Mai Dịch, Cầu Giấy, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Bistro</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g95/949441/prof/s750x400/image-4b8069ba-200910115815.jpeg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Quán Cơm 76 - Ngõ Tự Do</span>
                                </div>
                                <div class="item-address limit-text">
                                    76 Ngõ Tự Do, Trần Đại Nghĩa, P. Đồng Tâm, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Bistro</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g96/955544/prof/s750x400/image-d69f57c3-200910115828.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Kaoya Hotpot - Mì Vịt Quay & Cơm Xá
                                        Xíu</span>
                                </div>
                                <div class="item-address limit-text">
                                    103 Hàng Buồm, P. Hàng Buồm, Hoàn Kiếm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100/996223/prof/s750x400/foody-upload-api-foody-mobile-kham-pha-3-quan-che--200102135359.jpg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Chè Ngon Phố - Tăng Thiết
                                        Giáp</span>
                                </div>
                                <div class="item-address limit-text">
                                    17 Tăng Thiết Giáp, P. Cổ Nhuế 2, Bắc Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Street food</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g86/859819/prof/s750x400/foody-upload-api-foody-mobile-papa-1-jpg-181206163237.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Papa's Kitchen - Đồ Ăn Hàn Quốc - Hồng
                                        Mai</span>
                                </div>
                                <div class="item-address limit-text">
                                    41 Ngõ 187 Hồng Mai (Đối Diện Số 18 Ngõ 187 Hồng Mai), P. Quỳnh Lôi, Hai Bà
                                    Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g106/1051290/prof/s750x400/foody-upload-api-foody-mobile-230-201015154036.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">LQS - Chuyên Bún Bò Huế & Cơm Rang Giòn
                                        Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    21 Ngõ 5 Trường Chinh, P. Phương Liệt, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g107/1064588/prof/s750x400/file_restaurant_photo_h8be_16196-b94d690a-210429110930.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Ăn Đêm Gấu Trúc - Bún Đậu Mắm Tôm & Nem
                                        Nướng Nha</span>
                                </div>
                                <div class="item-address limit-text">
                                    88 Cầu Vồng, P. Đức Thắng, Bắc Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g109/1083711/prof/s750x400/foody-upload-api-foody-mobile-ba-8ecd19d8-210624141914.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Bánh Mỳ Thịt Xiên Nướng & Đồ Ăn Vặt - Lê
                                        Trọng Tấn</span>
                                </div>
                                <div class="item-address limit-text">
                                    2 Hẻm 11 Ngách 473 Ngõ 192 Lê Trọng Tấn, P. Định Công, Hoàng Mai, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Boozer</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100005/1000048439/prof/s750x400/file_restaurant_photo_dq3j_16526-ab788f59-220516162945.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Gà Luộc, Gà Ủ Muối & Cơm Cháy - Duyên
                                        Dương</span>
                                </div>
                                <div class="item-address limit-text">
                                    35 Ngách 136/6 Triều Khúc, P. Tân Triều, Thanh Trì, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Street food</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g113/1122293/prof/s750x400/foody-upload-api-foody-mobile-fi-f1940758-211221172402.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tiệm Mỳ Gà Tần - 14 Chùa Liên Phái</span>
                                </div>
                                <div class="item-address limit-text">
                                    14 Chùa Liên Phái, P. Cầu Dền, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="drink" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g95/942825/prof/s750x400/foody-upload-api-foody-mobile-avar2-190725141716.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Trà sữa Tocotoco - Lê
                                        Trọng Tấn</span>
                                </div>
                                <div class="item-address limit-text">
                                    156 Lê Trọng Tấn, P. La Khê, Hà Đông, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Coffee/Dessert</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g28/277192/prof/s750x400/foody-mobile-6565646546-jpg-625-636127261456167663.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Nguyễn Xiển</span>
                                </div>
                                <div class="item-address limit-text">
                                    8 Nguyễn Xiển, P. Thanh Xuân Nam, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Coffee/Dessert</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g71/702021/prof/s750x400/foody-mobile-23376408_54246046275.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Thượng Đình</span>
                                </div>
                                <div class="item-address limit-text">
                                    266 Thượng Đình, P. Thượng Đình, Thanh Xuân, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g65/646317/prof/s750x400/foody-upload-api-foody-mobile-traf-jpg-181023155349.jpg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">The 1989 - Trà Sữa Muối
                                        Biển - Hồng Mai</span>
                                </div>
                                <div class="item-address limit-text">
                                    79 Hồng Mai, P. Quỳnh Lôi, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g99/980195/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-191114152713.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Phúc Long Trần Đại Nghĩa</span>
                                </div>
                                <div class="item-address limit-text">
                                    69 Trần Đại Nghĩa, P. Bách Khoa, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g73/725160/prof/s750x400/foody-upload-api-foody-mobile-2-jpg-180322143630.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Xuân La</span>
                                </div>
                                <div class="item-address limit-text">
                                    47 Xuân La, P. Xuân La, Tây Hồ, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100/993044/prof/s750x400/image-d87276d4-220518124826.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">KOI Thé - Vincom Phạm Ngọc Thạch</span>
                                </div>
                                <div class="item-address limit-text">
                                    L1-16 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g95/946383/prof/s750x400/image-f823e6f8-210414154203.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Mixue - Ngô Thì Nhậm</span>
                                </div>
                                <div class="item-address limit-text">
                                    14 Ngô Thì Nhâm, P. Hà Cầu, Hà Đông, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g30/294718/prof/s750x400/foody-mobile-14955920_19255145476-131-636147999005434177.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Tây Sơn</span>
                                </div>
                                <div class="item-address limit-text">
                                    137 Tây Sơn, P. Quang Trung, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g67/662391/prof/s750x400/foody-mobile-1581-jpg-478-636316540269792485.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Nguyễn Hoàng</span>
                                </div>
                                <div class="item-address limit-text">
                                    107 Nguyễn Hoàng, P. Mỹ Đình 2, Nam Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="vegetarian-food" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g104/1032994/prof/s750x400/foody-upload-api-foody-mobile-a16833863663cb3d9272-200627164610.jpg" alt="">
                            </a>
                            <a target="_blank" href="">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Cơm Chay Tuệ Tâm</span>
                                </div>
                                <div class="item-address limit-text">
                                    17B Ngõ 105 Đình Thôn, Nam Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Vegetarian</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g3/29616/prof/s750x400/foody-mobile-com-chay-jpg-149-635920984488500383.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Loving Hut - Cơm Chay - Chùa Láng</span>
                                </div>
                                <div class="item-address limit-text">
                                    6/10 ngõ 121 Chùa Láng, P. Láng Thượng, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for=""> Restaurant, Vegetarian</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g105/1044905/prof/s750x400/foody-upload-api-foody-mobile-81260489_11059214712-200831183058.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">My Healthy Corner - Shop Online - Nguyễn
                                        Khang</span>
                                </div>
                                <div class="item-address limit-text">
                                    249 Nguyễn Khang, P. Yên Hòa, Cầu Giấy, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g98/970304/prof/s750x400/foody-upload-api-foody-mobile-qqqqq-191018153022.jpg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Cơm Chay Dì Hiền</span>
                                </div>
                                <div class="item-address limit-text">
                                    6 Ngõ 25 Võ Văn Dũng, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Vegetarian</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g105/1043243/prof/s750x400/file_restaurant_photo_whyh_16119-0d07ceeb-210130103929.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tiệm Chay Ngõ - Bánh Mì Chay & Mì Trộn Chay
                                        Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    24 Ngõ 27 Phan Văn Trường, P. Dịch Vọng Hậu, Cầu Giấy, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Shop Online, Vegetarian</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g16/158941/prof/s750x400/foody-mobile-com-chay10-jpg-670-635748128931856218.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Diệu Âm Quán - Ngọc Lâm</span>
                                </div>
                                <div class="item-address limit-text">
                                    696 Ngọc Lâm, P. Gia Thuỵ, Long Biên, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g96/952264/prof/s750x400/foody-upload-api-foody-mobile-avar9-190831122011.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Cơm Chay Lý Sơn - Shop Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    37 Ngõ 46 Phạm Ngọc Thạch (57 Ngõ 29 Xã Đàn), P. Phương Liên, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100004/1000030383/prof/s750x400/file_restaurant_photo_lvbp_16261-63058003-210713153325.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Bếp Chay An Việt - Bún Riêu Chay - Phan Văn
                                        Trị</span>
                                </div>
                                <div class="item-address limit-text">
                                    34 Phan Văn Trị, P. Quốc Tử Giám, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Restaurant, Vegetarian</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g103/1021614/prof/s750x400/foody-upload-api-foody-mobile-an-6f76e6e8-210706155616.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Chay Hạnh Phúc</span>
                                </div>
                                <div class="item-address limit-text">
                                    17 Ngõ 105 Đình Thôn, Nam Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bistro</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g23/223496/prof/s750x400/foody-mobile-chay-td-jpg-241-635951154052191578.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Chay Tâm Đức</span>
                                </div>
                                <div class="item-address limit-text">
                                    14 Dịch Vọng, P. Dịch Vọng, Cầu Giấy, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Vegetarian</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="cream-cake" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g98/975123/prof/s750x400/file_restaurant_photo_vivt_16453-d744c776-220221011639.jpg" alt="">
                            </a>
                            <a target="_blank" href="">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Phong Huy - Tiệm Bánh
                                        Kem</span>
                                </div>
                                <div class="item-address limit-text">
                                    124 Định Công Thượng, P. Định Công, Hoàng Mai, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Bakery</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g23/227953/prof/s750x400/image-c12a0ec3-210409141456.jpeg" alt="">
                            </a>
                            <a target="_blank" href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">TOUS les JOURS - Phố Huế</span>
                                </div>
                                <div class="item-address limit-text">
                                    123 Phố Huế, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Bakery</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g108/1074709/prof/s750x400/file_restaurant_photo_fq9p_16320-cc4e33bf-210919153857.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Bếp Mẹ Pun - Bánh Sinh Nhật, Bánh Gato, Bánh
                                        Kem & Bak</span>
                                </div>
                                <div class="item-address limit-text">
                                    32C Ngõ 86 Ngọc Thuỵ, Long Biên, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g78/772759/prof/s750x400/file_restaurant_photo_fpyz_16481-3c07f788-220325104837.jpg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Trường Phát Bakery - Ngọc
                                        Hà</span>
                                </div>
                                <div class="item-address limit-text">
                                    164 - 166 Ngọc Hà, P. Ngọc Hà, Ba Đình, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100006/1000054036/prof/s750x400/file_restaurant_photo_muqc_16541-951b19fc-220602172703.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Meiwei - Bánh Kem Bento - Nguyễn Xiển</span>
                                </div>
                                <div class="item-address limit-text">
                                    Tòa CT12A KDT Kim Văn Kim Lũ, Nguyễn Xiển, P. Đại Kim, Hoàng Mai, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100003/1000029303/prof/s750x400/file_restaurant_photo_sru8_16476-2d063667-220319190904.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tiệm Nhà Muối - Tiệm Bánh Trà Online - Lạc
                                        Long Quân</span>
                                </div>
                                <div class="item-address limit-text">
                                    659A Lạc Long Quân, P. Xuân La, Tây Hồ, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery, Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g75/749525/prof/s750x400/foody-upload-api-foody-mobile-avar3-jpg-181029145628.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Beard Papa's - Nguyễn Lương Bằng</span>
                                </div>
                                <div class="item-address limit-text">
                                    168 Nguyễn Lương Bằng, P. Quang Trung, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g105/1043268/prof/s750x400/foody-upload-api-foody-mobile-150-200820132408.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tiệm Bánh Cô Kiều - Shop Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    106 Tân Triều, P. Tân Triều, Thanh Trì, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g71/700712/prof/s750x400/foody-mobile-23316470_19540223414.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Grand Castella - Bánh Bông Lan Đài Loan -
                                        Bánh Sinh Nhật</span>
                                </div>
                                <div class="item-address limit-text">
                                    3 Ngõ 131 Hồng Hà, P. Phúc Xá, Ba Đình, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100004/1000032895/prof/s750x400/file_restaurant_photo_rnuq_16330-5086efc4-211001201544.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">CoLy Kookie - Tiramisu - Ngõ Quỳnh</span>
                                </div>
                                <div class="item-address limit-text">
                                    4 Ngách 303 Ngõ Quỳnh, P. Quỳnh Lôi, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Bakery</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="dessert" class="menu-items">
                <ul class="list-items">
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g95/942825/prof/s750x400/foody-upload-api-foody-mobile-avar2-190725141716.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                <div style="display: flex; justify-content: space-between" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">Trà sữa Tocotoco - Lê
                                        Trọng Tấn</span>
                                </div>
                                <div class="item-address limit-text">
                                    156 Lê Trọng Tấn, P. La Khê, Hà Đông, Hà Nội
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Coffee/Dessert</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a target="_blank" href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g28/277192/prof/s750x400/foody-mobile-6565646546-jpg-625-636127261456167663.jpg" alt="">
                            </a>
                            <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Somali Cat - Bánh Ngọt & Trà Sữa
                                        Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    Somali Cat - Bánh Ngọt & Trà Sữa Online
                                </div>
                            </a>
                        </div>
                        <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Coffee/Dessert</label>
                            </div>
                        </a>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g26/258183/prof/s750x400/file_restaurant_photo_jfl2_16590-bd50fb77-220729104213.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Ngọc Pink - Bông Lan Trứng Muối
                                        Online</span>
                                </div>
                                <div class="item-address limit-text">
                                    80 Ngõ 136 Tây Sơn, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g65/646317/prof/s750x400/foody-upload-api-foody-mobile-traf-jpg-181023155349.jpg" alt="">
                            </a>
                            <a href="">
                                <div style="display: flex;" class="item-title limit-text">
                                    <span title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood" class="item-quality"></span>
                                    <span class="title-text limit-text item-quality-text">The 1989 - Trà Sữa Muối
                                        Biển - Hồng Mai</span>
                                </div>
                                <div class="item-address limit-text">
                                    79 Hồng Mai, P. Quỳnh Lôi, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g99/980195/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-191114152713.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Phúc Long Trần Đại Nghĩa</span>
                                </div>
                                <div class="item-address limit-text">
                                    69 Trần Đại Nghĩa, P. Bách Khoa, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g88/875531/prof/s750x400/image-31a0bc76-200908105306.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Tiệm Bánh Emoji - Bông Lan Trứng Muối & Đồ
                                        Uống Online/span>
                                </div>
                                <div class="item-address limit-text">
                                    10 Ngách 1 Ngõ 178 Thái Hà, P. Trung Liệt, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Shop Online</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g100/993044/prof/s750x400/image-d87276d4-220518124826.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">KOI Thé - Vincom Phạm Ngọc Thạch</span>
                                </div>
                                <div class="item-address limit-text">
                                    L1-16 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g96/950740/prof/s750x400/file_restaurant_photo_bind_16263-69f49c48-210715131531.jpeg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Kem LaMilana Premium Gelato</span>
                                </div>
                                <div class="item-address limit-text">
                                    150B Bùi Thị Xuân, P. Bùi Thị Xuân, Hai Bà Trưng, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for=""> Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g30/294718/prof/s750x400/foody-mobile-14955920_19255145476-131-636147999005434177.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Tây Sơn</span>
                                </div>
                                <div class="item-address limit-text">
                                    137 Tây Sơn, P. Quang Trung, Đống Đa, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                    <li class="item">
                        <div class="item-brand">
                            <a href="" class="avatar-item">
                                <img class="item-img" src="https://images.foody.vn/res/g67/662391/prof/s750x400/foody-mobile-1581-jpg-478-636316540269792485.jpg" alt="">
                            </a>
                            <a href="">
                                <div class="item-title limit-text">
                                    <span class="title-text limit-text">Trà Sữa Tocotoco - Nguyễn Hoàng</span>
                                </div>
                                <div class="item-address limit-text">
                                    107 Nguyễn Hoàng, P. Mỹ Đình 2, Nam Từ Liêm, Hà Nội
                                </div>
                            </a>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-tag ng-hide info-item-icon"></i>
                            <label style="font-size: 13px" for="">Coffee/Dessert</label>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <a href="" class="li-page">
                        <i class="li-page-icon fa fa-solid fa-chevron-right"></i>
                    </a> -->
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="home-page">
        <div class="container">
            <div class="box-group discovery">
                <!-- phan kham pha ben trai -->
                <div class="nav-left foody-toolbar">
                    <div class="toolbar-left">
                        <div class="header-toolbar-left">
                            <a href="" class="toolbar-left-avatar">
                                <img class="left-avatar" src="https://www.foody.vn/asset/styles/images/icons/icon-foody-60x60.png" alt="">
                                <a href="" class="left-title">
                                    <label for="" class="left-title-text">
                                        Khám phá
                                    </label>
                                </a>
                            </a>
                        </div>
                        <ul class="toolbar-left-box">
                            <li class="active">
                                <a href="" class="left-box-content">
                                    <lable class="box-content-text">Ở đâu</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Giao hàng</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Ăn gì</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Sưu tập</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">TV</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Bình luận</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Blogs</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="" class="noactive left-box-content">
                                    <lable class="box-content-text">Khuyến mãi</lable>
                                    <i class="fa fa-angle-right box-content-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- phan header discovery -->

                <div class="discovery-banner discovery-list-item">
                    <div class="RequestDiv">
                        <div class="discovery-banner-home">
                            <div class="discovery-banner-header foody-toolbar clear-box">
                                <div style="top: 0px;" class="banner-header clear-box">
                                    <ul class="discovery-banner-list">
                                        <li class="discovery-banner-items current-items">
                                            <a class="discovery-banner-item current" href="">Mới nhất</a>
                                        </li>
                                        <li class="discovery-banner-items">
                                            <a class="discovery-banner-item" href="">Gần tôi</a>
                                        </li>
                                        <li class="discovery-banner-items">
                                            <a class="discovery-banner-item" href="">Đã lưu</a>
                                        </li>
                                        <li class="discovery-select">
                                            <select class="select-district">
                                                <option value="" selected="selected">- Quận/Huyện -</option>
                                                <option value="20">Quận Ba Đình</option>
                                                <option value="690">Quận Bắc Từ Liêm</option>
                                                <option value="21">Quận Cầu Giấy</option>
                                                <option value="22">Quận Đống Đa</option>
                                                <option value="23">Quận Hà Đông</option>
                                                <option value="24">Quận Hai Bà Trưng</option>
                                                <option value="25">Quận Hoàn Kiếm</option>
                                                <option value="26">Quận Hoàng Mai</option>
                                                <option value="27">Quận Long Biên</option>
                                                <option value="945">Quận Nam Từ Liêm</option>
                                                <option value="28">Quận Tây Hồ</option>
                                                <option value="29">Quận Thanh Xuân</option>
                                                <option value="692">Thị Xã Sơn Tây</option>
                                                <option value="674">Huyện Ba Vì</option>
                                                <option value="675">Huyện Chương Mỹ</option>
                                                <option value="676">Huyện Đan Phượng</option>
                                                <option value="677">Huyện Đông Anh</option>
                                                <option value="678">Huyện Gia Lâm</option>
                                                <option value="679">Huyện Hoài Đức</option>
                                                <option value="680">Huyện Mê Linh</option>
                                                <option value="681">Huyện Mỹ Đức</option>
                                                <option value="682">Huyện Phú Xuyên</option>
                                                <option value="683">Huyện Phúc Thọ</option>
                                                <option value="684">Huyện Quốc Oai</option>
                                                <option value="685">Huyện Sóc Sơn</option>
                                                <option value="686">Huyện Thạch Thất</option>
                                                <option value="687">Huyện Thanh Oai</option>
                                                <option value="688">Huyện Thanh Trì</option>
                                                <option value="689">Huyện Thường Tín</option>
                                                <option value="691">Huyện Ứng Hòa</option>
                                            </select>
                                        </li>
                                        <li class="discovery-select">
                                            <select class="select-district">
                                                <option value="" selected="selected">- Ẩm thực -</option>
                                                <option value="2">Món Bắc</option>
                                                <option value="4">Món Trung Hoa</option>
                                                <option value="7">Món Miền Trung</option>
                                                <option value="12">Món Miền Nam</option>
                                                <option value="16">Món Ấn Độ</option>
                                                <option value="17">Món Thái</option>
                                                <option value="18">Ý</option>
                                                <option value="19">Pháp</option>
                                                <option value="20">Đức</option>
                                                <option value="21">Món Nhật</option>
                                                <option value="22">Món Hàn</option>
                                                <option value="25">Thụy sĩ</option>
                                                <option value="29">Tây Nguyên</option>
                                                <option value="30">Singapore</option>
                                                <option value="31">Malaysia</option>
                                                <option value="32">Brazil</option>
                                                <option value="33">Mỹ</option>
                                                <option value="35">Tây Ban Nha</option>
                                                <option value="37">Indonesia</option>
                                                <option value="38">Campuchia</option>
                                                <option value="39">Mexico</option>
                                                <option value="40">Canada</option>
                                                <option value="41">Ả Rập</option>
                                                <option value="42">Philippines</option>
                                                <option value="43">Thổ Nhĩ Kỳ</option>
                                                <option value="44">Tiệp (Séc)</option>
                                                <option value="46">Argentina</option>
                                                <option value="51">Đài Loan</option>
                                                <option value="52">Bánh Pizza</option>
                                                <option value="53">Iran</option>
                                                <option value="55">Đặc sản vùng</option>
                                            </select>
                                        </li>
                                        <li class="discovery-select">
                                            <select class="select-district">
                                                <option value="" selected="selected">- Danh mục -</option>
                                                <option value="12">Sang trọng</option>
                                                <option value="39">Buffet</option>
                                                <option value="1">Nhà hàng</option>
                                                <option value="11">Ăn vặt/vỉa hè</option>
                                                <option value="56">Ăn chay</option>
                                                <option value="2">Café/Dessert</option>
                                                <option value="3">Quán ăn</option>
                                                <option value="4">Bar/Pub</option>
                                                <option value="54">Quán nhậu</option>
                                                <option value="43">Beer club</option>
                                                <option value="6">Tiệm bánh</option>
                                                <option value="44">Tiệc tận nơi</option>
                                                <option value="27">Shop Online</option>
                                                <option value="28">Giao cơm văn phòng</option>
                                                <option value="79">Khu Ẩm Thực</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content-container clear-box">

                                <!-- phan san pham cua discovery -->

                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g93/925102/prof/s640x400/foody-upload-api-foody-mobile-ava-tao-pho-190531135556.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Tào Phớ 10K By Tào Phớ
                                                    Nè</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                70 Khâm Thiên, P. Khâm Thiên, Đống Đa, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g951/9500547/avt/c100x100/huyenngoc381381-avatar-744-637088516038815517.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Huyền Ngọc</b>
                                            </a>
                                            <a href="" class="review-text">
                                                - mình ngồi tầng 2 . View nhìn xuống khá đẹp.
                                                - bánh với trà ở đây mình thấy khá ngon. Trà hoa quả ở đây được pha
                                                vừa miệng mà kiểu đồ tươi ấy 🥰
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>

                                <!-- phan san pham cua discovery -->

                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g1/6163/prof/s640x400/foody-upload-api-foody-mobile-cover-200522152639.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Paris Gâteaux - Bánh
                                                    Ngọt & Trà Sữa - Hai Bà Trưng</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                1A Hai Bà Trưng, P. Phan Chu Trinh, Hoàn Kiếm, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g1158/11579565/avt/c100x100/chi2k-avatar-159-637309618490498502.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Quỳnh Chi Nguyễn</b>
                                            </a>
                                            <a href="" class="review-text">
                                                - mình ngồi tầng 2 . View nhìn xuống khá đẹp.
                                                - bánh với trà ở đây mình thấy khá ngon. Trà hoa quả ở đây được pha
                                                vừa miệng mà kiểu đồ tươi ấy 🥰
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g75/748310/prof/s640x400/file_restaurant_photo_9xuq_16328-d4d08993-210928162856.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Cơm Thố Anh Nguyễn -
                                                    Dương Khuê</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                37 Dương Khuê, P. Mai Dịch, Cầu Giấy, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g1621/16200020/avt/c100x100/beauty-upload-api-foody-avatar-6e9fddb1-ceb4-4bba-8164-8539a64234b1-200720130003.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Huong Le</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Mình đặt "1 Bún Ốc To Sườn, 2 Quẩy 3 Cái", mình cảm thấy bún ốc ở
                                                đây ăn rất ngon, nước chan rất hợp khẩu vị của mình. Mỗi tội nhận đc
                                                bát bún ốc, mà chỉ có đúng 5 con ốc, gọi là ốc to mà kích thước bé
                                                ...!
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g89/884755/prof/s640x400/foody-upload-api-foody-mobile-2-190124090803.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Le Beret Coffee</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                1H Phan Bội Châu, P. Cửa Nam, Hoàn Kiếm, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g223/2224712/avt/c100x100/ngocuyennguyenvu-avatar-811-637024136224654920.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Ngoc Uyen Nguyen Vu</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Không gian quán chỉ có 1 tầng, trong nhà và chỗ ngồi ngoài trời ở
                                                vỉa hè. Mọi người đến đây chủ yếu ngồi bên ngoài, nhưng nếu hết chỗ
                                                thì ngồi sát cửa kính trong nhà cũng khá thích.
                                                Ở đây có món slow ...
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g28/276305/prof/s640x400/image-4e5a2526-210613161531.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Highlands Coffee -
                                                    Fivimart Hà Đông</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                8 Quang Trung, P. Quang Trung, Hà Đông, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/default/s100/user-default-female.png" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Thúy Vân</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Mình order đồ qua app ở đây 2 lần, lần nào nhận đồ cũng bị đổ nhưng
                                                lần trước đổ ít nên mình không muốn review, hôm nay thì quá cẩu thả
                                                thật sự. Ly bạc xỉu đổ cả nửa, ướt hết túi đựng bánh cookie làm ...
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g67/662391/prof/s640x400/foody-mobile-1581-jpg-478-636316540269792485.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Trà Sữa Tocotoco -
                                                    Nguyễn Hoàng</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                107 Nguyễn Hoàng, P. Mỹ Đình 2, Nam Từ Liêm, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g1200/11992678/avt/c100x100/foody-avatar-ef7e4d1f-eee0-4bd0--0413314c-220609105134.jpeg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">A A</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Mùa hè không bật điều hoà, thái độ nhân viên không tốt, dùng mã km
                                                Meetee mà cái gì cũng không app được 🤣🤣
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g71/709496/prof/s640x400/image-dd0aeca0-210614103004.jpeg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Lotteria - Linh
                                                    Đàm</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                64 BT4 Bắc Linh Đàm, P. Hoàng Liệt, Hoàng Mai, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g54/535157/avt/c100x100/d4uch4mh3t_ch0m0tcu0ctjnh-avatar-565-636666600038138074.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Tin Tin</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Gần nên gọi ship chứ chưa lần nào hài lòng khi ăn ở đây ý
                                                Minh hay gọi set gà sốt hs 87k có 2 miếng gà, pepsi sz S và khoai
                                                tây chiên nhỏ. Gà sốt mà như kiểu gà rán, dc có tí sốt ăn ko rõ vị j
                                                trong khi ...
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g103/1025667/prof/s640x400/foody-upload-api-foody-mobile-ava-15-200526104432.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Chè Phố Cổ - Nguyễn Thị
                                                    Thâp</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                N6D Nguyễn Thị Thâp, P. Nhân Chính, Thanh Xuân, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g2714/27132591/avt/c100x100/foody-avatar-369-637843526713496281.jpg
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class=" user-review block-with-text limit-review-text">
                                                <a href="">
                                                    <b class="review-name">Nguyễn Thị Huyền</b>
                                                </a>
                                                <a href="" class="review-text">
                                                    Lâu lâu ăn tào phớ ở đây cứ gọi là chất lượng luôn ạ, thèm món
                                                    này là toàn mua ở đây thôi. Ngon, bổ, rẻ 😘😘😘
                                                </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g3/27879/prof/s640x400/foody-mobile-cftw6-jpg-577-635495683342655075.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Villa Cafe - Nguyễn
                                                    Biểu</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                20 Nguyễn Biểu, P. Quán Thánh, Ba Đình, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g94/930786/avt/c100x100/foody-avatar-594-635773423578011715.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Huyền Đặng</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Bà chủ kêu nhân viên ra thông báo: Tính phụ phí 30k/ người nếu bạn
                                                ngồi quá 40 phút để uống nước,
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g92/910672/prof/s640x400/foody-upload-api-foody-mobile-bansh-190511111535.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Hokkaido Baked Cheese
                                                    Tart - Vincom Trần Duy Hưng</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                Tầng 4, L4 - K2 Vincom Trần Duy Hưng, 119 Trần Duy Hưng, P. Trung
                                                Hòa, Cầu Giấy, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g1031/10303553/avt/c100x100/iceprincess296142-avatar-579-637126217182082666.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Ngoc Nguyen</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Kem ngon giá không quá đắt
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g20/190831/prof/s640x400/foody-mobile-1867-jpg-228-635860358150887960.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Quán Ngon Hà Thành -
                                                    Bánh Tráng Thịt Heo, Cơm Văn Phòng</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                CT 2A, Khu Đô Thị Tân Tây Đô, Tân Lập, Huyện Đan Phượng, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g26/255710/avt/c100x100/saobang2211-avatar-994-636921315755368921.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Quỳnh Phương</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Chỗ này khá gần chỗ mình, nên được hôm bạn bè tới chơi kéo cả lũ ra
                                                ăn. Quán được cái menu thay đổi theo ngày, nên có ăn hoài cũng không
                                                ngán. Hôm mình ra có gà, cá, bún bung. Bạn mình gọi bún, nhìn cũng
                                                ...
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-item">
                                    <div class="content-avatar">
                                        <a href="">
                                            <img class="content-avatar-img" src="https://images.foody.vn/res/g5/44665/prof/s640x400/foody-mobile-joma-jpg-736-636032500419633862.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="items-content">
                                        <a href="">
                                            <div class="content-item-title limit-text">
                                                <span class="content-title-text limit-text">Joma Bakery Cafe</span>
                                            </div>
                                            <div class="content-desc limit-text">
                                                43 Tô Ngọc Vân, P. Quảng An, Tây Hồ, Hà Nội
                                            </div>
                                        </a>
                                    </div>
                                    <div class="items-review">
                                        <div class="avatar-review">
                                            <a href="" class="avatar-review-img">
                                                <img class="review-img" src="https://images.foody.vn/usr/g159/1583044/avt/c100x100/viet_trader102-avatar-343-637173766716228331.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="user-review block-with-text limit-review-text">
                                            <a href="">
                                                <b class="review-name">Anh Vũ</b>
                                            </a>
                                            <a href="" class="review-text">
                                                Gần Giáng sinh rồi, các tín đồ cafe bánh ngọt ko thể bỏ qua hệ thống
                                                joma đc
                                                Thơm, không ngọt, tinh tế kèm cafe đúng điệu thì chỉ có Joma
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-count">
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-comment"></i>
                                            <span>5</span>
                                        </a>
                                        <a class="item-count-content" href="">
                                            <i class="fa fa-camera"></i>
                                            <span>15</span>
                                        </a>
                                        <a class="item-count-content item-count-right" href="">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Lưu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="load-more clear-box">
                                    <a href="#" class="btn-load-more">
                                        <label class="btn-load-text" for="">Xem thêm</label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-friend-container">
    <div class="top-friend-user">
        <ul class="friend-user">
            <li class="friend-user-active">
                <a class="friend-user-text" href="">Top Thành Viên</a>
            </li>
        </ul>
    </div>
</div>