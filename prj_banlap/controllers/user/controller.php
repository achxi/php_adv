<?php
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case "hotro":
                require_once 'controllers/user/hotro.php';
                break;
            case "tuyendung":
                require_once 'controllers/user/tuyendung.php';
                break;
            case "lienhe":
                require_once 'controllers/user/lienhe.php';
                break;  
            case "dangky":
                require_once 'controllers/user/dangky.php';
                break;     
            

        }
    }

