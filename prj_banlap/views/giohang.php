<?php
    session_start();
    require '../Model/csdl.php';
    require '../Model/product.php';
    require '../Model/member.php';
    $product= new product;
    $id= $_GET['id'];
    
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]+=1;
    }else{
        $_SESSION['cart'][$id]=1;
    }
    $soluong=$_SESSION['cart'][$id];
    
    if(isset($_SESSION['cart'][$id])){
        foreach ($_SESSION['cart'] as $key=>$value){
            $item[]= $key;
        }
        $str= implode(',', $item);
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
        <title>FRAME PRO DETAIL</title>
        <script src="../js/jquery-1.11.1.js"></script>
        <script src="../js/kiemtra_dangnhap.js"></script>
        <script src="../js/kiemtra_dangky.js"></script>
        <script src="../js/hieuung.js"></script>
        <link href="../style/style.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div id="top">
            <div id="thethanhvien"><label>Thẻ thành viên</label><input type="text" size="14"/></div>
            <div id="lienket">
                <div id="top_link"><a href="index.php?nd=hotro">Hỗ trợ</a><a href="index.php?nd=tuyendung">Tuyển dụng</a><a href="index.php?nd=lienhe">Liên hệ</a></div>
                <div id="top_hinh">    
                    <div id="gach">&nbsp;</div>
                    <img src="../img/youtube.png" alt="youtube"/>
                    <img src="../img/facebook.png" alt="fb"/>
                    <img src="../img/twitter.png" alt="twitter"/>
                    <img src="../img/google-plus.png" alt="google"/>
                    <img src="../img/zing.png" width="19" height="16" alt="zing"/>
                </div>
            </div>
        </div>
        <div id="top_info">
            <div id="logo"><img src="../img/logo.jpg" alt="logo"/></div>
            <div id="another">
                <div id="sdt_search">
                    <div id="sdt"><img src="../img/phone.svg" alt="hotline"/>&nbsp;+&nbsp; 0122&nbsp; 6300&nbsp; 265</div>
                    <div id="search"><input type="text" size="30"/></div>
                </div>
                <div id="tk_giohang">
                    <div id="taikhoan">
                        <div class="tk">
                            <img src="../img/up.png" alt="tk" width="25" height="25"/>Tài khoản<img src="../img/up.png" alt="tk" width="25" height="25"/>
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
                                    <a href="index.php?nd=dangky">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="giohang">
                        <div id="tk_giohang1"><img src="../img/up.png" alt="tk" width="25" height="25"/>Giỏ hàng<img src="../img/up.png" alt="tk" width="25" height="25"/></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="top_menu">
            <ul>
                <li><a href="index.php"><img src="../img/home_on.png" alt="home"/></a></li>
                <li><a href="#">LAPTOP</a>
                    <ul>
                        <?php
                        $sp= $product->listsp(1);
                        foreach ($sp as $item){
                            echo "<li><a href='#'>$item[tenloaisp]</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">PHỤ KIỆN</a>
                     <ul>
                         <?php
                         $pk= $product->listsp(2);
                         foreach($pk as $item){
                             echo "<li><a href='#'>$item[tenloaisp]</a></li>";
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
        
        <div id="info">
            <div id="cart">
                <h3>GIỎ HÀNG</h3>
                <div class="tinhtien">tinhtien</div>
                <div id="cart_info">
                    <?php
                        $tratien= 0;
                        $data= $product->listAllin($str);
                        foreach ($data as $item){
                            $gia= $item['gia'];
                            $gia2= number_format($gia, 0, "", ".");
                            $s= $gia2." VNĐ";
                            $tong= $gia*$soluong;
                            $tong2= number_format($tong, 0, "", ".");
                            $tien= $tong2." VNĐ";
                            echo "<img src='../img/sanpham/small/$item[hinh]' alt='$item[tensp]'/>";
                            echo $item['tensp']."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
                            echo $s."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
                            echo "<input type='text' size='1' value='$soluong'/>"."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
                            echo $tien."<br/>";
                            $tratien+= $tong;
                        }
                            $tratien1= number_format($tratien, 0, "", ".");
                            $tratien2= $tratien1." VNĐ";
                            echo "<div id='tratien'>$tratien2</div>";
                        
                    ?>
                    <a href="destroy.php">destroy session</a>
                </div>
                <div class="tinhtien">tinhtien</div>
            </div>
        </div>
        <div id="footer">
            <div id="footer_nav">
                <ul>
                    <li style="border-right: 1px solid #2F2E33">&nbsp;</li>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Quy định sử dụng</a></li>
                    <li><a href="#">Chính sách bảo hành</a></li>
                    <li><a href="#">Chính sách mua hàng từ xa</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li style="border-right: 1px solid #2F2E33"><a href="#">Liên hệ</a></li>
                    <li style="border-right: 1px solid #2F2E33">&nbsp;</li>
                </ul>
            </div>
            <div id="footer_info">
                <div id="info_left">
                    <h3> ACCESSORIES</h3>
                        Phụ kiện Galaxy S5, S5 Zoom,<br/>
                        Gear 2, Gear Fit<br/>
                        Phụ kiện IPhone/IPod<br/>
                        Tai nghe Bluetooth<br/>
                        Pin dự phòng<br/>
                        Thẻ nhớ<br/>
                        Data Cable/TV Cable<br/>
                </div>
                <div id="info_mid">
                    <h3>LIÊN HỆ</h3>
                    12/1 đường 42 KP6 P.Linh Đông Q.Thủ Đức tp.HCM<br/>
                    hotline: 0122.6300.265<br/><br/><br/>
                    <h3>CHẤP NHẬN THANH TOÁN</h3>
                    <img src="../img/vcb.jpg" alt="vcb"/>
                    <img src="../img/visa.jpg" alt="visa"/>
                    <img src="../img/acb.jpg" alt="acb"/>
                    <img src="../img/techcombank.jpg" alt="tcb"/>
                    <img src="../img/mastercard.jpg" alt="mtc"/>
                    <img src="../img/sacombank.jpg" alt="scb"/>
                </div>
                <div id="info_right">
                    <h3>SOCIAL NETWORK</h3>
                    <img src="../img/youtube_w.png" alt="youtube"/>
                    <img src="../img/twitter_w.png" alt="twitter"/>
                    <img src="../img/facebook_w.png" alt="fb"/>
                    <img src="../img/google_plus_w.png" alt="gg+"/>
                    <p>Copyright @2014 achxi Mobile. All right reserved.<br/>
                        Built by achxi.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
