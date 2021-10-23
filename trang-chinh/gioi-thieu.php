<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../bigshoes/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../bigshoes/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                <a href="index.php"><img src="../css/trang-chu/img/logo11.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                <ul>
                        <li><i class="fa fa-search" style="font-size:20px;color:rgb(226, 226, 226)"></i></li>
                        <li><p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p></li>
                       <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-4">
            <img src="https://1.bp.blogspot.com/-HWX6ekoJ5Vk/X0JwN7_oP7I/AAAAAAAAyR8/syDqA9n6bjYAWv0JIC51gDPw0hydrLxYgCLcBGAsYHQ/s1600/Ly-Cafe%2B%25282%2529.jpg" alt="" style = "width:100%;">
        </div>
        <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-12">
                        <h2>TẤT TẦN TẬT VỀ STAFF COFFEE HOUSE</h2>
                        <p style = "text-align:justify;">STAFF COFFEE HOUSE – Hệ thống cửa hàng, Website kinh doanh cafe tại Thành phố Hồ Chí Minh, với sứ mạng đưa “nền văn hóa thưởng thức cà phê” đến gần hơn với các bạn trẻ Việt Nam, chúng tôi cam kết mang đến cho các bạn những loại cà phê chất thưởng và thơm ngon nhất tại thị trường Việt Nam. <br> <br>

Chính thức hoạt động từ năm 2021, đi cùng những cố gắng và nỗ lực không ngừng nghỉ, đến thời điểm hiện tại, STAFF COFFEE HOUSE đã đánh dấu mình vào một vị trí vững chắc trong văn hóa thưởng thức cafe ở thị trường miền Nam vốn rất năng động này. Sau khi thành lập và phát triển, 4 cửa hàng được ra đời, đều nằm trong các khu vực trung tâm thuộc thành phố Hồ Chí Minh. Thời gian sắp tới, STAFF COFFEE HOUSE sẽ tiếp tục mở rộng thêm các chi nhánh nữa đặt tại các thành phố lớn. Ngay bây giờ, hãy cùng tìm hiểu vài nét sơ lược về cả 4 chi nhánh “to bự” này nhé!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                        <h4>CỬA HÀNG STAFF COFFEE HOUSE</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6" style=" border-right:double #c30005 5px">
            <b>CN1: 777 Làng Đại Học – Thành phố Hồ Chí Minh</b><br>
            <p style = "text-align:justify;margin-top:10px;">Ra đời vào năm 2021, là đứa con đầu tiên, là cột mốc khởi đầu cho quá trình “vươn mình ra biển lớn” của thương hiệu STAFF COFFEE HOUSE. Mặc dù, không gian cửa hàng lúc này chưa thực sự lớn, các dòng sản phẩm còn đơn giản và hạn chế. Đồng thời, những dịch vụ chăm sóc và hỗ trợ khách hàng vẫn còn rất nhiều thiếu sót. Tuy nhiên, mọi cố gắng không biết mệt mỏi của chúng tôi cuối cùng đã được đền đáp một cách xứng đáng…….</p>
            </div>
            <div class="col-sm-6">
            <b>CN2: 999 – Ba tháng Hai – Quận 10 - Thành phố Hồ Chí Minh</b><br>
            <p style = "text-align:justify;margin-top:10px;">……2 năm trôi qua, một cửa hàng “bé bự” . Hoàn thiện hơn, mạnh mẽ hơn, không gian cực rộng lớn với các phân khu thưởng thức cafe riêng biệt trải đều trên diện tích hơn 100m2. Nhằm “phổ cập” rộng rãi xu hướng cafe mới cho giới trẻ Sài Thành, đồng thời, trở thành một tụ điểm mua sắm không thể bỏ qua tại thành phố Hồ Chí Minh.</p>
            </div>
        </div>

        </div>
        </div> <br><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/freeship.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Miễn phí giao hàng</b> <br>  
                    Shop miễn phí giao hàng cho tất cả các đơn hàng trên 200.000 VNĐ. Giao hàng nhanh chóng và đảm bảo chất lượng nguyên vẹn cho quý khách !</div>  
                </div><br>
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/new.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Cập nhật xu hướng cafe trên thế giới</b> <br>  
                    Liên tục cập nhật là loại cà phê ngon và đặc sắc trên thế giới vào menu cửa hàng.</div>
                </div><br>
               
            </div>

            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-2"><img src="../css/trang-chu/img/cskh.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Chăm sóc khách hàng</b> <br>  
Chế độ chăm sóc khách hàng tại shop tận tình , nhiệt tình hỗ trợ và phục vụ quý khách chu đáo.Đáp ứng nhu cầu của mọi khách hàng. Luôn luôn lắng nghe và làm hài lòng quý khách! </div>
                </div><br>
                <div class="row">
                <div class="col-sm-2"><img src="../css/trang-chu/img/thanhtoan.jpg" alt="" style = "width:80px;"></div>
                    <div class="col-sm-10">
                    <b>Thanh toán đa dạng</b> <br>  
Thanh toán tại shop đa dạng bằng cách trả tiền mặt hoặc sử dụng các loại thẻ như : VISA, MASTER CARD ,VÍ ĐIỆN TỬ ....</div>
                </div><br>
            </div>
            </div>
    </div>

 



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../css/trang-chu/img/logo11.png" alt="" style ="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                    Xin cám ơn !                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </>









    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>