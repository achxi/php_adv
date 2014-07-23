<?php
ob_start();
session_start();
//    require 'models/csdl.php';
//    require 'models/product.php';
//    require 'models/member.php';
    $product= new product;

//    $data1= $_SESSION['cart'];'
    
    if(isset($_GET['pid'])){
        $id= $_GET['pid'];
    }else{
        $id=0;
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="templates/style/style.css" rel="stylesheet" type="text/css">
        <script src="templates/js/jquery-1.11.1.js"></script>
        <script src="templates/js/kiemtra_dangnhap.js"></script>
        <script src="templates/js/kiemtra_dangky.js"></script>
        <script src="templates/js/capnhat_giohang.js"></script>
        <script src="templates/js/hieuung.js"></script>
        <!--       <script>
            $(document).ready(function(){
                $('div#banner img:gt(0)').hide();
                setInterval(function(){
                    $('div#banner :first-child').fadeOut()
                    .next('img').fadeIn()
                    .end().appendTo('div#banner');},
                    5000);
            });
        </script>-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="top">
            <div id="thethanhvien"><label>Thẻ thành viên</label><input type="text" size="14"/></div>
            <div id="lienket">
                <div id="top_link"><a href="index.php?controller=user&action=hotro">Hỗ trợ</a><a href="index.php?controller=user&action=tuyendung">Tuyển dụng</a><a href="index.php?controller=user&action=lienhe">Liên hệ</a></div>
                <div id="top_hinh">    
                    <div id="gach">&nbsp;</div>
                    <img src="library/img/youtube.png" alt="youtube"/>
                    <img src="library/img/facebook.png" alt="fb"/>
                    <img src="library/img/twitter.png" alt="twitter"/>
                    <img src="library/img/google-plus.png" alt="google"/>
                    <img src="library/img/zing.png" width="19" height="16" alt="zing"/>
                </div>
            </div>
        </div>
        <div id="top_info">
            <div id="logo"><img src="library/img/logo.jpg" alt="logo"/></div>
            <div id="another">
                <div id="sdt_search">
                    <div id="sdt"><img src="library/img/phone.svg" alt="hotline"/>&nbsp;+&nbsp; 0122&nbsp; 6300&nbsp; 265</div>
                    <div id="search"><input type="text" size="30"/></div>
                </div>
                <div id="tk_giohang">
                    <div id="taikhoan">
                        <div class="tk">
                            <img src="library/img/up.png" alt="tk" width="25" height="25"/>Tài khoản<img src="library/img/up.png" alt="tk" width="25" height="25"/>
                            <div id="showtk">
                                <div class="tk_del"><a href="#">Đơn hàng</a></div>
                                <div class="tk_del"><a href="#">So sánh</a></div>
                                <div class="tk_del"><a href="#">Yêu thích</a></div>
                                <div id="theodoidonhang">
                                    <p>Theo dõi đơn hàng</p>
                                    <input type="text" size="25"/>
                                </div>
                                <div id="dangnhap_dangky">
                                    <div id="form_dangnhap">
                                        <div id="tit_dn">ĐĂNG NHẬP</div>
                                        <div id="frm_dn">
                                            <div class="tieude_dn">Username<span class="hoathi">*</span></div><br/>
                                            <input type="text" size="35" id="txtuserdn"/><br/>
                                            <div class="tieude_dn">Password<span class="hoathi">*</span></div><br/> 
                                            <input type="password" size="35" id="txtpassdn"/><br/>
                                            <div class="tieude_dn">Mã an toàn<span class="hoathi">*</span></div><br/>
                                            <input type="text" size="15" id="txtmaantoandn"/><br/>
                                            Nhập mã an toàng giống hình bên
                                        </div>
                                        <div id="btm_dn">
                                            <div id="btm_dn1"><input type="checkbox" />
                                            Ghi nhớ tài khoản</div>
                                            <div id="btm_dn2"><button id="okdn">ĐĂNG NHẬP</button></div>
                                        </div>
                                    </div>
                                    <div id="loidn">loi dang nhap ne</div>                                    
                                    <a href="#" id="dangnhap">Đăng nhập</a>
                                    <a href="index.php?controller=user&action=dangky">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="giohang">
                        <div id="tk_giohang1"><img src="library/img/up.png" alt="tk" width="25" height="25"/>Giỏ hàng<img src="library/img/up.png" alt="tk" width="25" height="25"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="top_menu">
            <ul>
                <li><a href="index.php"><img src="library/img/home_on.png" alt="home"/></a></li>
                <li><a href="#">LAPTOP</a>
                    <ul>
                        <?php
                        $sp= $product->listsp(1);
                        foreach ($sp as $item){
                            echo "<li><a href='index.php?controller=product&action=listtheotenloai&pid=$id&lid=$item[id_loai]'>$item[tenloaisp]</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">PHỤ KIỆN</a>
                     <ul>
                         <?php
                         $pk= $product->listsp(2);
                         foreach($pk as $item){
                             echo "<li><a href='index.php?controller=product&action=listtheotenloai&pid=$id&lid=$item[id_loai]'>$item[tenloaisp]</a></li>";
                         }
                         ?>
                    </ul>
                </li>
                <li><a href="#">KHUYẾN MÃI</a>
                    <ul>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">HTC</a></li>
                    </ul>
                </li>
                <li><a href="#">TIN TỨC</a>
                    <ul>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Samsung</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">HTC</a></li>
                    </ul>
                </li>
            </ul>
        </div>