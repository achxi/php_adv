<?php
require_once 'csdl.php';
class member extends csdl{
    protected $_hoten;
    protected $_diachi;
    protected $_email;
    protected $_dienthoai;
    protected $_user;
    protected $_pass;
    
    public function __construct() {
        $this->connect();
    }
    public function set_hoten($hoten) {
        $this->_hoten= $hoten;
    }
    public function get_hoten() {
        return $this->_hoten;
    }
    public function set_diachi($diachi) {
        $this->_diachi= $diachi;
    }
    public function get_diachi() {
        return $this->_diachi;
    }
    public function set_email($email) {
        $this->_email= $email;
    }
    public function get_email() {
        return $this->_email;
    }
    public function set_dienthoai($dienthoai) {
        $this->_dienthoai= $dienthoai;
    }
    public function get_dienthoai() {
        return $this->_dienthoai;
    }
    public function set_user($user) {
        $this->_user= $user;
    }
    public function get_user() {
        return $this->_user;
    }
    public function set_pass($pass) {
        $this->_pass= $pass;
    }
    public function get_pass() {
        return $this->_pass;
    }
    public function check_reg() {
        $sql= "select * from thanhvien where user= '".$this->get_user()."'";
        $this->query($sql);
        if($this->num_rows()== 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function add_user() {
        $sql= "insert into thanhvien(hoten, diachi, email, dienthoai, user, pass, hieuluc, capquyen) values ('".$this->get_hoten()."', '".$this->get_diachi()."', '".$this->get_email()."', '".$this->get_dienthoai()."','".$this->get_user()."', '".$this->get_pass()."', '1', '1')";
        $this->query($sql);
        echo "Thêm user thành công";
    }
    public function check_login() {
        $sql= "select * from thanhvien where user= '".$this->get_user()."' and pass= '".$this->get_pass()."'";
        $this->query($sql);
        if($this->num_rows()== 0){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
}

