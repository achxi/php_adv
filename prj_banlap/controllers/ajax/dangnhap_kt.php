<?php
$user= $_POST['user'];
$pass= $_POST['pass'];
$maantoan= $_POST['maantoan'];
$loi= "";

if($user== ""){
    echo "Chưa nhập username<br/>";
}
if($pass== ""){
    echo "Chưa nhập password<br/>";
}
if($user && $pass){
    $member= new member;
    $member->set_user($user);
    $member->set_pass($pass);
    if($member->check_login()== FALSE){
       echo "Wrong username or password<br/>";
    }else{
        echo "DN ok";
//        xu ly dang nhap
    }
}
