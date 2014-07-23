<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';
?>
            <div id="product">
                <?php
                foreach($data as $item){
                    $gia=$item['gia'];
                    $gia2=number_format($gia,0,'','.');
                    $s=$gia2." VNĐ";
                ?>
                <div id="pro_details">
                    <div id="top_pro_details">
                        <!--<form action="test.php" method="post">-->
                        <form action="index.php?controller=product&action=mua&pid=<?php echo $id; ?>" method="post">
                        <div id="hinh"><img src="library/img/sanpham/large/<?php echo $item['hinh']; ?>" alt="<?php echo $item['hinh']; ?>"/></div>
                        <div id="more_info">
                            <div id="tentt"><h3><?php echo $item['tensp']; ?><br/></h3></div>
                            <div id="solieu">
                                <h2><?php echo $s; ?></h2>
                                <span class="sth">Tình trạng:</span> Còn hàng<br/>
                                <span class="sth">Số lượng:<input type="text" size="1" value="1"/></span><br/>
                                <button name="mua">MUA</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div id="info_pro_details">
                        <div id="hienthi">
                            <ul>
                                <li><a href="" id="1" class="hientt">Thông tin sản phẩm</a></li>
                                <li><a href="" id="2" class="hientt">Thông số kĩ thuật</a></li>
                                <li><a href="" id="3" class="hientt">Thảo luận và đánh giá</a></li>
                                <li><a href="" id="4" class="hientt">Sản phẩm mua kèm</a></li>
                            </ul>
                        </div>
                    <div id="chitiet1"><?php echo $item['mota']; ?></div>
                    <div id="chitiet2"><?php echo $item['tensp'];} ?></div>
                    <div id="chitiet3">nhan xet nguoi dung</div>
                    <div id="chitiet4">san pham cung loai</div>
                    </div>
                </div>
            </div>

<?php
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>
