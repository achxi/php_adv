<?php
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case "dangky_kt":
                require_once 'controllers/ajax/dangky_kt.php';
                break;
            case "dangnhap_kt":
                require_once 'controllers/ajax/dangnhap_kt.php';
                break;  
            case "list_nav":
                require_once 'controllers/ajax/list_nav.php';
                break;     
            case "capnhat_giohang":
                require_once 'controllers/ajax/capnhat_giohang.php';
                break;              

        }
    }

