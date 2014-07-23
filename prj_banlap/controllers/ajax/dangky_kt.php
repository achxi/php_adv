<?php
$name= $_POST['name'];
$pass= $_POST['pass'];
$repass= $_POST['repass'];
$loi="";
$hoten= $_POST['hoten'];
$diachi= $_POST['diachi'];
$email= $_POST['email'];
$dienthoai= $_POST['dienthoai'];
$maantoan= $_POST['maantoan'];

if($name== ""){
    echo "Bạn chưa nhập username<br/>";
}
if($pass== ""){
    echo "Bạn chưa nhập password<br/>";
}
if($repass== ""){
    echo "Bạn chưa nhập lại password<br/>";
}
if($name && $pass && $repass){
    if($pass!= $repass){
        echo "Password và Repassword không giống nhau<br/>";
    }else{
        $member= new member;
        $member->set_user($name);
        if($member->check_reg()== FALSE){
            echo "User này đã tồn tại. Plz chọn tên khác";
        }else{
            $member->set_hoten($hoten);
            $member->set_diachi($diachi);
            $member->set_email($email);
            $member->set_dienthoai($dienthoai);
            $member->set_pass($pass);
            $member->add_user();
        }
    }
}