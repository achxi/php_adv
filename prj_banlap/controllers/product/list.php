<?php
    $title= "achxi laptop - index";
     $product= new product;
     $data= $product->listproduct();

     require_once 'views/product/list_view.php';
              