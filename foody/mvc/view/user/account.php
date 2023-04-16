<?php
session_start();
$conn = new mysqli('localhost', 'root', "", 'product');
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `user` WHERE `username` = '$username' and `password` = '$password'";
    $result = $conn->query($query);
    if (mysqli_num_rows($result) == 0) {
        $alert = "*Sai tên đăng nhập hoặc mật khẩu";
    } else {
        $result = mysqli_fetch_array($result);
        if ($result['account-lock'] == 1) {
            $alert = "tai khoan da bi khoa";
        } else {
            $_SESSION['member'] = $username;
            header('location: http://localhost/food_web/backend/');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/reset.css">
    <link rel="stylesheet" href="../public/css/manageAccount.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>



    <nav class="navbar navbar-default navbar-fixed">
        <div class="header-line"></div>
        <a href="">
            <div class="wrapper"></div>
        </a>
    </nav>
    <div class="container">
        <div class="login-container">
            <div class="row">
                <div class="col">
                    <div class="login-panel panel panel-default">
                        <div style="padding-bottom: 5px" class="panel-heading">
                            <h3 class="panel-title">Đăng nhập FDID</h3>
                        </div>
                        <div class="panel-body">
                            <section style="font-size: 14px; text-align: center; color: red; margin-bottom: 7px"><?= isset($alert) ? $alert : "" ?></section>
                            <section>
                                <form method="post" class="login-form" action="">
                                    <div class="form-group">
                                        <div class="inner-addon left-addon">
                                            <i class="fa-solid fa-user-large"></i>
                                            <input class="user-input" type="text" placeholder="Tên đăng nhập hoặc email" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inner-addon left-addon">
                                            <i class="fa fa-lock"></i>
                                            <input class="user-input" type="password" placeholder="Mật khẩu" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="check" type="checkbox" checkered="checked">
                                        <label for="check" class="check-text" for="">Lưu đăng nhập</label>
                                        <span style="float:right">
                                            <a class="link" href="">Quên mật khẩu</a>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-login btn-success" type="submit" value="Đăng nhập" style="border-radius: 3px; cursor: pointer;">
                                    </div>
                                </form>
                            </section>
                            <div class="form-group">
                                <div class="login-social">
                                    <a href="">
                                        <img class="login-social-icon" src="../public/img/kisspng-social-media-facebook-computer-icons-linkedin-logo-facebook-icon-5aba7f669c0a94.0492483615221717506392.png" alt="">
                                    </a>
                                    <a href="">
                                        <img class="login-social-icon" src="../public/img/5a35540277d9e6.8445514415134443544909.png" style="width:33px; height:33px; margin-bottom: 2.6px;" alt="">
                                    </a>
                                    <a href="">
                                        <img class="login-social-icon" src="../public/img/5a3a185132ceb1.89894673151375675320812609.png" style="width: 41px; height: 40px; margin-top: 2px" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="register">
                                <p class="register-content">
                                    Chưa có tài khoản tại Foody.vn
                                    <a href="register" class="link font12">Đăng ký</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mess-policy">
                        <span class="policy-text">Chúng tôi không sử dụng thông tin của bạn với bất kỳ <br>
                            mục đích nào. Bằng cách đăng nhập hoặc đăng ký, bạn
                            <br> đồng ý với </span>
                        <a class="policy-link" href="">Chính sách quy định của Foody</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="sso-mess">
                        Một tài khoản Foody để truy cập tất cả sản phẩm của Foody Corp.
                    </div>
                    <div class="container-link">
                        <a target="_blank" href="https://www.foody.vn/ha-noi">
                            <img src="https://id.foody.vn/Content/images/foody.png" alt="">
                            <span>Foody.vn</span>
                        </a>
                        <a target="_blank" href="https://shopeefood.vn/">
                            <img src="https://id.foody.vn/Content/images/delivery.png" alt="">
                            <span>ShoppeFood.vn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="wrapper-footer">
            <ul class="language">
                <li>
                    <a style="color:#f00; margin-right:0px; " href="">Vietnamese</a>
                </li>
                <li>
                    <a style="color:#337ab7;  margin-left:20px" href="">English</a>
                </li>
            </ul>
            <span class="footer-copyright">
                ©2018 Foody Corporation. Tầng 10, tòa nhà Sonatus, số 15 Lê Thánh Tôn, phường Bến Nghé, Quận 1, TP.HCM.
            </span>
            <span>
                Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012
            </span>
        </div>
    </footer>
</body>

</html>