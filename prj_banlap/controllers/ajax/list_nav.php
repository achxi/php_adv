<?php

$product= new product;
$sp= $product->listsp(1);
$pk= $product->listsp(2);
?>
        <div id="top_menu">
            <ul>
                <li><a href="index.php"><img src="library/img/home_on.png" alt="home"/></a></li>
                <li><a href="#">LAPTOP</a>
                    <ul>
                        <?php
                        foreach ($sp as $item){
                            echo "<li><a href='#'>$item[tenloaisp]</a></li>";
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="#">PHỤ KIỆN</a>
                     <ul>
                         <?php
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