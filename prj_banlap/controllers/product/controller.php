<?php
    if(isset($_GET['action'])){
            switch($_GET['action']){
                    case "list":
                        require "controllers/product/list.php";
                        break;
                    case "pro_details":
                        require "controllers/product/pro_details.php";
                        break;
                    case "mua":
                       require_once 'controllers/product/mua.php';
                       break; 
                    case "listtheotenloai":
                       require_once 'controllers/product/listtheotenloai.php';
                       break;                      
            }
    }else{
            require "controllers/product/list.php";
    }

