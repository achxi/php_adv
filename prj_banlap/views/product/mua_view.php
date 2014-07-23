<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';
    
    if(isset($_SESSION['cart'][$id]))
    {
            $soluong = $_SESSION['cart'][$id] + 1;
    }
    else
    {
            $soluong=1;
    }
    $_SESSION['cart'][$id]=$soluong;
    if(isset($_SESSION['cart'][$id])){
        foreach ($_SESSION['cart'] as $key=>$value){
            $temp[]= $key;
        }
        $str= implode(',', $temp);
    }
//    echo $str;
    $data= $product->listAllin($str);
//        echo "<pre>";
//        print_r($_SESSION['cart']);
//        echo "</pre>";
if(isset($_POST['update']))
{
	foreach($_POST['soluong'] as $key=>$value)
	{
		if( ($value == 0) and (is_numeric($value)))
		{
			unset ($_SESSION['cart'][$key]);
		}
		elseif(($value > 0) and (is_numeric($value)))
		{
			$_SESSION['cart'][$id]=$value;
		}
	}
}
//echo $_SESSION['cart'][$id];
?>
    <div id='product'>
           <div id='cart'>
                <h3>GIỎ HÀNG</h3>
                <div class="tinhtien">
                    <div class="tieptucmua"><button onclick="location.href='index.php'">TIẾP TỤC MUA</button><a href="destroy.php">XÓA GIỎ HÀNG</a></div>
                    <div class="ttlai"><button id="update_cart">TÍNH TIỀN LẠI</button></div>
                    <div class="tttt"><button>TIẾP TỤC THANH TOÁN</button></div>
                </div>
                <div id='cart_info'>
                    <div class="sanpham_tit">Sản phẩm</div>
                    <div class="dongia_tit">Đơn giá</div>
                    <div class="soluong_tit">Số lượng</div>
                    <div class="thanhtien_tit">Thành tiền</div>
    <?php
        foreach ($data as $item){
            $gia= $item['gia'];
            $gia2= number_format($gia, 0, '', '.');
            $s= $gia2.' VNĐ';
            $tong= $gia*$soluong;
            $tong2= number_format($tong, 0, '', '.');
            $tien= $tong2.' VNĐ';
            echo "<div class='sanpham'><img src='library/img/sanpham/small/$item[hinh]' alt='$item[tensp]'/><div class='tensp'><a href='#'>$item[tensp]</a></div></div>";
            echo "<div class='dongia'>$s</div>";
            echo "<div class='soluong'><input type='text' size='1' name='soluong[$item[id]]' value='{$_SESSION['cart'][$item['id']]}'/></div>";
            echo "<div class='thanhtien'>$tien</div>";
            $tratien+= $tong;
         }
         $tratien1= number_format($tratien, 0, '', '.');
         $tratien2= $tratien1.' VNĐ';
    ?>
         <div class="sanpham">&nbsp;</div>
               <div class="dongia"><span style='color:red; font-weight: bold; text-decoration: underline'>TỔNG CỘNG:</span></div>
               <div class="soluong">&nbsp;</div>
               <div class="thanhtien"><span style="color:red; font-weight: bold"><?php echo $tratien2; ?></span></div>
    </div> <!--dong div cart_info-->
    <div class='tinhtien'>
                    <div class="tieptucmua"><button onclick="location.href='index.php'">TIẾP TỤC MUA</button><a href='destroy.php'>XÓA GIỎ HÀNG</a></div>
                    <div class="ttlai"><button>TÍNH TIỀN LẠI</button></div>
                    <div class="tttt"><button>TIẾP TỤC THANH TOÁN</button></div>
          </div>
    </div> <!--dong div cart-->
    </div> <!--dong div product-->
<?php
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>
<a href="views/destroy.php">destroy session</a>
