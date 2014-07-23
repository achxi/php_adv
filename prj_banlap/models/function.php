<?php

function redirect($url){
    header("locaiton: $url");
    exit();
}
function __autoload($url){
    $url_= "models/$url";
    $real_url= strtolower($url_);
    require_once "$real_url.php";
}
