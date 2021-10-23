<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/trang-chu/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/trang-chu/style.css">
</head>
<body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../css/trang-chu/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="banner">
            <video autoplay muted loop id="myVideo">
                <source src="../css/trang-chu/img/cafe.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
            <div class="row">

                <div class="col-sm-2">
                   

                </div>
                <div class="col-sm-8">
                    <div class="nav">
                        <ul>
                            <li class="active">TRANG CHỦ</li>
                            <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="sign">
                        <?php
                            session_start();
                            if(!isset($_SESSION['user'])){
                        ?>
                        <a class="signup-btn" href="../../bigshoes/tai-khoan/dang-nhap.php"><span>Đăng nhập</span> </a>
                        <?php }else{ ?>
                        <a  class="signup-btn" href="../../bigshoes/tai-khoan/thong-tin-tk.php"><span><?=$_SESSION['user']['ho_ten'] ?> </span></a>
                        <?php } ?>
                    </div>
                </div>


            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <p class="nho">Cà phê thì phải đen như địa ngục,</p>
                        <p class="nho">đắng như tử thần và ngọt ngào tựa tình yêu…</p>
                        <P class="to">Trích - "Sưu tầm"</P>
                        <P class="likk">
                            <a href="danh-sach-sp.php"><span>COFEESHOP</span></a>
                        </P>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <p>GÓC COFFEE NỔI BẬT </p>
                    <h2> <span>COFFEE</span> STYLE 2021</h2>
                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="anhmoi">
                    <img src="../css/trang-chu/img/cafe3.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="anhmoi">
                        <img src="../css/trang-chu/img/cafe1.jpg" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-6">
                        <div class="anhmoi">
                            <img src="../css/trang-chu/img/cafe2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="anhmoi">
                            <img src="../css/trang-chu/img/cafe4.jpg" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <p>XEM NGAY NÀO !</p>
                    <h2> <span>SẢN PHẨM</span> BÁN CHẠY</h2>
                </div>
            </div>
        </div>
    </div>


    <?php
        require_once ('../admin/dao/hang-hoa.php');
        $items = hang_hoa_select_all_cafe();
    
    ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">

                <?php 
                    foreach($items as $item){
                        extract($item);
                    
                ?>
                    <div class="item">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                <?php }?>


                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid now" style="margin-top: 90px;">
        <div class="row ">
            <div class="col-md-6">
                <div class="jus">
                    <img src="../css/trang-chu/img/cafe5.jpg" alt="a">
                </div>
            </div>
            <div class="col-md-6">
                <div class="newjus">
                    <ul>
                        <li>
                            <h2>CTKM SALE UP TO<span> 10%</span> toàn bộ sản phẩm tại shop !</h2>
                        </li>
                        <li>Sự kiện diễn ra đến hết tháng 11/2021</li>
                        <li>
                            <a href="danh-sach-sp.php">XEM NGAY</a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>


    <div class="container now1">
        <div class="row">

            <div class="col-md-4">
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-shopping-bag"></i></p>
                        </li>
                        <li>
                            <p><span>Miễn phí</span> vận chuyển <br> cho các đơn hàng trên 2 trăm nghìn</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pick">
                    <ul>
                        <li>
                            <p>
                                <i class="fa fa-heartbeat"></i>
                            </p>
                        </li>
                        <li>
                            <p><span>Nhiệt tình</span> Tư vấn <br> và hỗ trợ tận tình 24/7</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="pick">
                    <ul>
                        <li>
                            <p><i class="fa fa-gift"></i></p>
                        </li>
                        <li>
                            <p><span>Chế độ</span> quà tặng hấp <br> dẫn cho mọi khách hàng</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>



    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <p>XEM NGAY NÀO ... </p>
                    <h2> SẢN PHẨM <span>SALE OFF</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 50px;">

    <?php
        $items = hang_hoa_sale_9();
    ?>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme ">
                <?php foreach($items as $item){
                    extract($item);
                    ?>
                    <div class="item">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                    <?php }?>



                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="caption">
                    <p>XEM NGAY NÀO... </p>
                    <h2>SẢN PHẨM <span>TRENDING</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

                    <?php
                        $items = hang_hoa_select_all_tratraicay();
                    ?>

    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <?php foreach($items as $item){ 
                extract($item);
                ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img class="card-img-top" src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="Card image top"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?=$ten_hh?></h5>
                        <p class="card-subtitle"><?=number_format($don_gia-($don_gia*$giam_gia/100)) ?> VNĐ</p>

                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
               <a href="danh-sach-sp.php"><button type="button" class="btn btn-outline-dark">Tất cả</button></a>
            </div>
        </div>
    </div>



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="../css/trang-chu/img/logo11.png" alt="" style ="width:70px;">
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
                                        Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng.
                
                                        Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
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
    </div>




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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>