<?php
$title= "achxi latop - chi tiet san pham";
$product= new product;
$id= $_GET['pid'];
$data= $product->listAll($id);

//$_SESSION['haha']=5; wrong, must be under top

require_once 'views/product/pro_details_view.php';
