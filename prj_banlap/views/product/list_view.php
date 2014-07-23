<?php
    require_once 'templates/top.php';
    require_once 'templates/banner.php';

    echo "<div id='product'>";
    foreach($data as $item){
        $gia= mysql_real_escape_string($item['gia']);
        $giatien= number_format($gia,0,'','.');
        $giatien= $giatien." VNĐ";
        $id= $item['id'];
        echo "<div class='sp'><a href='index.php?controller=product&action=pro_details&pid=$id'>"
             . "<div class='hinh'><img src='library/img/sanpham/small/$item[hinh]'/></div>"
             . "<div class='ten'>$item[tensp]</div>"
             . "<div class='gia'>$giatien</div>"
             . "</a></div>";
         }
     echo "</div>";
    
    require_once 'templates/right.php';
    require_once 'templates/bottom.php';
?>

