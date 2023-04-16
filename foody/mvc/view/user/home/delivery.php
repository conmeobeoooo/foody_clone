<div class="wrapper">
        <div class="container">
            <div class="box-delivery">
                <div class="delivery-header">
                    <div class="avatar-box">
                        <div class="avatar">
                            <img class="avatar-img" src="./img/icon-delivery-60x60-3.png" alt="">
                        </div>
                        <span class="avatar-title">Giao tận nơi</span>
                    </div>
                    <div class="nav-box">
                        <ul class="nav-box-list" style="white-space: nowrap;">
                            <li class="nav-box__item">
                                <span class="nav-box__text nav-box-text__red"
                                    onclick="changeProductList('today', this)">Deal hôm nay</span>
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
                        <!-- pham tung san pham cau delivery -->

                        <!-- pham tung san pham cau delivery -->
                        <li class="item">
                            <div class="item-brand">
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g91/902408/prof/s750x400/foody-upload-api-foody-mobile-com-190405140510.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Thu Hằng - Cơm Văn Phòng</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        102 C16 Nguyễn Quý Đức, P. Thanh Xuân Bắc, Thanh Xuân, Hà Nội
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
                        <!-- pham tung san pham cau delivery -->
                        <li class="item">
                            <div class="item-brand">
                                <a href="" class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g92/910078/prof/s750x400/image-31e09b60-200910115830.jpeg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
                                        <span class="title-text limit-text item-quality-text">Cơm Tấm Anh Ba - Nguyễn
                                            Quý Đức</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        C16 Thanh Xuân Bắc (Cầu Thang 5), P. Thanh Xuân Bắc, Thanh Xuân, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g77/761188/prof/s750x400/foody-upload-api-foody-mobile-avar-jpg-180917101155.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Dimsum Điểm Tâm Đài Loan - Phố Định Công
                                            Thượng</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        8C Ngõ 88 Phố Định Công Thượng, Hoàng Mai, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g77/764189/prof/s750x400/foody-upload-api-foody-mobile-com-ga-190516171635.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Bà Ba Quán - Cơm Gà Xíu - Lạc Long
                                            Quân</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        49c Ngõ 218 Lạc Long Quân, P. Bưởi, Tây Hồ, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g101/1003994/prof/s750x400/file_restaurant_photo_ml9d_16212-bf0dcbeb-210517102640.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Mì Trộn Indomie 158 - Thái Thịnh</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        9A Ngõ 158 Thái Thịnh, P. Láng Hạ, Đống Đa, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g96/950640/prof/s750x400/foody-upload-api-foody-mobile-tigersugar_st-190826105153.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Tiger Sugar - Vũ Trọng Phụng</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        3 Ngõ 98 Vũ Trọng Phụng, P. Thanh Xuân Trung, Thanh Xuân, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g99/984368/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-191126140759.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Bếp Việt - Cơm Văn Phòng - Đông Thiên</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        7 Ngõ 36 Đông Thiên, Hoàng Mai, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g21/207378/prof/s750x400/file_restaurant_photo_shqb_16140-9f84704b-210223172714.jpeg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Cơm Thố Anh Nguyễn - Dương Khuê</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        37 Dương Khuê, P. Mai Dịch, Cầu Giấy, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g25/241564/prof/s750x400/foody-mobile-20-jpg-309-636004809264384661.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Trí Đức - Cháo Niêu & Phở Bún Miến</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        38B Nguyễn Khang, P. Yên Hòa, Cầu Giấy, Hà Nội
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g25/241564/prof/s750x400/foody-mobile-20-jpg-309-636004809264384661.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div class="item-title limit-text">
                                        <span class="title-text limit-text">Trí Đức - Cháo Niêu & Phở Bún Miến</span>
                                    </div>
                                    <div class="item-address limit-text">
                                        38B Nguyễn Khang, P. Yên Hòa, Cầu Giấy, Hà Nội
                                    </div>
                                </a>
                            </div>
                            <div class="info-item">
                                <i class="fa fa-tag ng-hide info-item-icon"></i>
                                <label style="font-size: 13px" for="">Boozer</label>
                            </div>
                        </li>

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
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g99/982157/prof/s750x400/file_restaurant_photo_kndy_16174-739efb72-210403132550.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g67/668346/prof/s750x400/foody-upload-api-foody-mobile-16-190823100527.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g114/1131120/prof/s750x400/foody-upload-api-foody-mobile-cv-f0b1bda3-220328121905.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100/992832/prof/s750x400/image-77ee2c72-200910115815.jpeg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g103/1020634/prof/s750x400/foody-upload-api-foody-mobile-2-200622142116.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g113/1128547/prof/s750x400/foody-upload-api-foody-mobile-42-d31fa7ec-220301162459.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g105/1040487/prof/s750x400/file_restaurant_photo_7fqs_16134-445ce084-210216012246.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g104/1031462/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-200622141452.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g81/802827/prof/s750x400/image-46e15dff-200910115821.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g5/47638/prof/s750x400/file_restaurant_photo_mrpu_16247-5e780a04-210627105504.jpg"
                                        alt="">
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
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g21/207378/prof/s750x400/file_restaurant_photo_shqb_16140-9f84704b-210223172714.jpeg"
                                        alt="">
                                </a>
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g95/949441/prof/s750x400/image-4b8069ba-200910115815.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g96/955544/prof/s750x400/image-d69f57c3-200910115828.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100/996223/prof/s750x400/foody-upload-api-foody-mobile-kham-pha-3-quan-che--200102135359.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g86/859819/prof/s750x400/foody-upload-api-foody-mobile-papa-1-jpg-181206163237.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g106/1051290/prof/s750x400/foody-upload-api-foody-mobile-230-201015154036.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g107/1064588/prof/s750x400/file_restaurant_photo_h8be_16196-b94d690a-210429110930.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g109/1083711/prof/s750x400/foody-upload-api-foody-mobile-ba-8ecd19d8-210624141914.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100005/1000048439/prof/s750x400/file_restaurant_photo_dq3j_16526-ab788f59-220516162945.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g113/1122293/prof/s750x400/foody-upload-api-foody-mobile-fi-f1940758-211221172402.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g95/942825/prof/s750x400/foody-upload-api-foody-mobile-avar2-190725141716.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g28/277192/prof/s750x400/foody-mobile-6565646546-jpg-625-636127261456167663.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g71/702021/prof/s750x400/foody-mobile-23376408_54246046275.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g65/646317/prof/s750x400/foody-upload-api-foody-mobile-traf-jpg-181023155349.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g99/980195/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-191114152713.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g73/725160/prof/s750x400/foody-upload-api-foody-mobile-2-jpg-180322143630.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100/993044/prof/s750x400/image-d87276d4-220518124826.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g95/946383/prof/s750x400/image-f823e6f8-210414154203.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g30/294718/prof/s750x400/foody-mobile-14955920_19255145476-131-636147999005434177.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g67/662391/prof/s750x400/foody-mobile-1581-jpg-478-636316540269792485.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g104/1032994/prof/s750x400/foody-upload-api-foody-mobile-a16833863663cb3d9272-200627164610.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/ShoppeFood.html"
                                    class="avatar-item">
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g3/29616/prof/s750x400/foody-mobile-com-chay-jpg-149-635920984488500383.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g105/1044905/prof/s750x400/foody-upload-api-foody-mobile-81260489_11059214712-200831183058.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g98/970304/prof/s750x400/foody-upload-api-foody-mobile-qqqqq-191018153022.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g105/1043243/prof/s750x400/file_restaurant_photo_whyh_16119-0d07ceeb-210130103929.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g16/158941/prof/s750x400/foody-mobile-com-chay10-jpg-670-635748128931856218.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g96/952264/prof/s750x400/foody-upload-api-foody-mobile-avar9-190831122011.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100004/1000030383/prof/s750x400/file_restaurant_photo_lvbp_16261-63058003-210713153325.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g103/1021614/prof/s750x400/foody-upload-api-foody-mobile-an-6f76e6e8-210706155616.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g23/223496/prof/s750x400/foody-mobile-chay-td-jpg-241-635951154052191578.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g98/975123/prof/s750x400/file_restaurant_photo_vivt_16453-d744c776-220221011639.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g23/227953/prof/s750x400/image-c12a0ec3-210409141456.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g108/1074709/prof/s750x400/file_restaurant_photo_fq9p_16320-cc4e33bf-210919153857.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g78/772759/prof/s750x400/file_restaurant_photo_fpyz_16481-3c07f788-220325104837.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100006/1000054036/prof/s750x400/file_restaurant_photo_muqc_16541-951b19fc-220602172703.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100003/1000029303/prof/s750x400/file_restaurant_photo_sru8_16476-2d063667-220319190904.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g75/749525/prof/s750x400/foody-upload-api-foody-mobile-avar3-jpg-181029145628.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g105/1043268/prof/s750x400/foody-upload-api-foody-mobile-150-200820132408.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g71/700712/prof/s750x400/foody-mobile-23316470_19540223414.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100004/1000032895/prof/s750x400/file_restaurant_photo_rnuq_16330-5086efc4-211001201544.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g95/942825/prof/s750x400/foody-upload-api-foody-mobile-avar2-190725141716.jpg"
                                        alt="">
                                </a>
                                <a target="_blank" href="http://127.0.0.1:5501/food_web/SFproduct.html">
                                    <div style="display: flex; justify-content: space-between"
                                        class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g28/277192/prof/s750x400/foody-mobile-6565646546-jpg-625-636127261456167663.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g26/258183/prof/s750x400/file_restaurant_photo_jfl2_16590-bd50fb77-220729104213.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g65/646317/prof/s750x400/foody-upload-api-foody-mobile-traf-jpg-181023155349.jpg"
                                        alt="">
                                </a>
                                <a href="">
                                    <div style="display: flex;" class="item-title limit-text">
                                        <span
                                            title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống ShopeeFood"
                                            class="item-quality"></span>
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g99/980195/prof/s750x400/foody-upload-api-foody-mobile-foody-upload-api-foo-191114152713.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g88/875531/prof/s750x400/image-31a0bc76-200908105306.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g100/993044/prof/s750x400/image-d87276d4-220518124826.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g96/950740/prof/s750x400/file_restaurant_photo_bind_16263-69f49c48-210715131531.jpeg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g30/294718/prof/s750x400/foody-mobile-14955920_19255145476-131-636147999005434177.jpg"
                                        alt="">
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
                                    <img class="item-img"
                                        src="https://images.foody.vn/res/g67/662391/prof/s750x400/foody-mobile-1581-jpg-478-636316540269792485.jpg"
                                        alt="">
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