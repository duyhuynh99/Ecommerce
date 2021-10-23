<<?php 
ob_start(); 
 ?>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                        <li><a href="danh-sach-sp.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CHỦ </span> / THANH TOÁN</p>
                </div>
            </div>
            <div class="col-md-5" style="padding-right: 0px;">
                <div class="thutu">
                    <ul>
                        <li>
                            <p style="margin-top: 10px;">Hiển thị tất cả các sản phẩm</p>
                        </li>
                        <li>
                            <select>
                               <option>Thứ tự mặc định</option>
                               <option>Thứ tự theo mức độ phổ biến</option>
                               <option>Thứ tự thấp đến cao</option>
                           </select>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    
    <!-- CODE PHP THANH TOÁN GIỎ HÀNG -->
    <?php
        require_once ('../../bigshoes/admin/dao/khach-hang.php');
        require_once ('../../bigshoes/admin/dao/hang-hoa.php');

        extract($_REQUEST);
        
        $ma_kh = $_SESSION['user']['ma_kh'];
        $item = khach_hang_select_by_id($ma_kh);
        extract($item);
    ?>



    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <div class="col-sm-7">
        <form action="" method="post">
        <h4>THÔNG TIN THANH TOÁN</h4>
        <br>
        <table class="table table-borderless" border = "0">
        <input type="text" class="form-control" id="" name="ma_kh" value="<?=$ma_kh?>" hidden>
            <tr>
                <div class="form-group">
                <label for=""> <b>Họ và tên:</b> </label>
                <input type="text" class="form-control" id="" name="ho_ten" value="<?=$ho_ten?>">
                </div>
                
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Email:</b></label>
                <input type="text" class="form-control" id="" name="email" value = "<?=$email?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Địa chỉ:</b></label>
                <input type="text" class="form-control" id="" name="dia_chi" value = "<?=$dia_chi?>">
                </div>
            </tr>
            <tr>
                <div class="form-group">
                <label for=""><b>Ghi chú:</b></label>
                <textarea class="form-control" rows="5" id="" name = "ghi_chu"></textarea>
                </div>
            </tr>
        </table>
        </div>
            <div class="col-sm-5">
            <h4>ĐƠN HÀNG CỦA BẠN</h4>
            <br>         
            <table class="table" style = "border:3px solid #c30005;">
            <thead>
                <tr>
                    <th>SẢN PHẨM</th>
                    <th  style = "text-align:right;">TỔNG</th>
                </tr>
                </thead>
                <tbody>
                <!-- CODE PHP HIỂN THỊ LẠI DANH SÁCH SẢN PHẨM ĐÃ MUA -->
                <?php
                $total = $i = 0;
                if(!empty($_SESSION['cart'])){
                            $items = $_SESSION['cart'];
                            foreach($items as $item){
                                extract($item);
                                $i++;
                ?>
                <tr>

                    <td><?=$name?> x <?=$sl ;?></td>
                    <td style = "text-align:right;"><?=number_format(($price - ($price*($giam_gia/100)))*$sl);
                            $total += (($price - ($price*($giam_gia/100)))*$sl);
                            
                    ?> VNĐ</td>
                </tr>
                <?php }} ?>
                <tr>
                    <td><b>Tổng phụ</b></td>s
                    <td style = "text-align:right;"><b><?=number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                    <td><b>Giao hàng</b></td>
                    <td style = "text-align:right;">Giao hàng miễn phí <br>
                    dưới 5km <br>
                    Đổi địa chỉ</td>
                </tr>
                <tr>
                    <td><b>TỔNG</b></td>
                    <td style = "text-align:right;"><b><?=number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                    <td colspan = "2"><b>Phiếu ưu đãi</b></td>
                </tr>
                <tr>
                    <td colspan = "2">
                    <input type="text" class="form-control" placeholder="Mã ưu đãi"><br>
                    <button class = "btn btn-light" style = "width:100%;"><b>ÁP DỤNG</b></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><i>Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Quý khách có thể tra cứu tình trạng đơn hàng tại TheCloser.com. Chúc quý khách ngày mới tốt lành !</i></td>
                </tr>
                <tr>
                        <td><button type="submit" name="dathang" class="btn btn-danger"><b>ĐẶT HÀNG</b></button></td>
                        <td><button type="submit" name="dathangonline" class="btn btn-danger">ĐẶT HÀNG VÀ THANH TOÁN ONLINE</a></button></td>
                </tr>
                </tbody>
            </table>        

            </form>
            </div>
        </div>
        </div>
            

            <!-- KHI KHÁCH HÀNG TIẾN HÀNH ĐẶT HÀNG -->
            <?php
                require_once ('../../bigshoes/admin/dao/hoa-don.php');

                extract($_REQUEST);
                if(array_key_exists('dathang',$_REQUEST)){

                try {
                    // Tạo kết nối
                    $conn = pdo_get_connection();
                    
                    // Tạo ngày mua
                    $ngaymua = date("d-m-Y");
                    
                    // Câu SQL Insert
                    $sql = "INSERT INTO hoa_don(ngay_mua,ghi_chu,ma_kh) 
                            VALUES ('".$ngaymua."','".$ghi_chu."','".$ma_kh."')";
                
                    // Thực hiện thêm record
                    $conn->exec($sql);
                    
                    // Lấy id hóa đơn vừa insert
                    $ma_hd = $conn->lastInsertId();
                    
                    $items = $_SESSION['cart'];
                    foreach($items as $item){
                        extract($item);
                        $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES ('".$ma_hd."','".$ma_hh."','".$sl."','".$price."')";
                        $conn->exec($sql);
                        unset($_SESSION['cart'][$ma_hh]);

                        
                    }

                    echo"<script>
                    alert('Bạn đã đặt đơn hàng thành công !');
                    window.location.href='./danh-sach-sp.php';
                    </script>";
                } 
                catch (PDOException $e) {
                    echo $e->getMessage();
                }
                }  

               
            ?>
        
            <!-- KHI KHÁCH HÀNG TIẾN HÀNH ĐẶT HÀNG ONLINE -->
            <?php
                require_once ('../../bigshoes/admin/dao/hoa-don.php');

                extract($_REQUEST);
                if(array_key_exists('dathangonline',$_REQUEST)){


                try {
                    // Tạo kết nối
                    $conn = pdo_get_connection();
                    
                    // Tạo ngày mua
                    $ngaymua = date("d-m-Y");
                    
                    // Câu SQL Insert
                    $sql = "INSERT INTO hoa_don(ngay_mua,ghi_chu,ma_kh) 
                            VALUES ('".$ngaymua."','".$ghi_chu."','".$ma_kh."')";
                
                    // Thực hiện thêm record
                    $conn->exec($sql);
                    
                    // Lấy id hóa đơn vừa insert
                    $ma_hd = $conn->lastInsertId();
                    
                    $items = $_SESSION['cart'];
                    foreach($items as $item){
                        extract($item);
                        $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES ('".$ma_hd."','".$ma_hh."','".$sl."','".$price."')";
                        $conn->exec($sql);
                        unset($_SESSION['cart'][$ma_hh]);
                        
                    }
                    echo"<script>
                    alert($total);
                    </script>";
                    header("Location: http://localhost/bigshoes/vnpay_php/index.php?order_id=" .$ma_hd. "&total=".$total);
                    exit();
                } 

                catch (PDOException $e) {
                    echo $e->getMessage();
                }
                }
            ?>
   

 

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




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>