<?php
    $title= "achxi laptop - san pham theo loai";
     $id= $_GET['lid'];
     $pid= $_GET['pid'];
     $product= new product;
     $data= $product->listtheotenloai($id);

     require_once 'views/product/listtheotenloai_view.php';
              