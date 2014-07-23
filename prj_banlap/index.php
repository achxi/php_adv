<?php
    require 'models/function.php';
    
if(isset($_GET['controller'])){
	switch($_GET['controller']){
		case "product":
                    require "controllers/product/controller.php";
                    break;
                case "user":
                    require 'controllers/user/controller.php';
                    break;
                case "ajax":
                    require 'controllers/ajax/controller.php';
                    break;
	}
}else{
    require "controllers/product/controller.php";
}


