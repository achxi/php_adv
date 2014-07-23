<?php

class product extends csdl{
    protected $_img;
    protected $_name;
    protected $_price;
    
    public function __construct() {
        $this->connect();
    }
    public function listproduct() {
        $sql= "select hinh, tensp, gia, id from sanpham";
        $this->query($sql);
        if($this->num_rows()== 0){
            $data= 0;
        }else{
            while($rows= $this->fetch()){
                $data[]= $rows;
            }
        }
        return $data;
    }
    public function listsp($id) {
        $sql= "select tenloaisp, id_loai from loaisanpham where id_nhom='$id'";
        $this->query($sql);
        if($this->num_rows()== 0){
            $data= 0;
        }else{
            while($rows= $this->fetch()){
                $data[]= $rows;
            }
        }
        return $data;
    }
        public function listAll($id) {
        $sql= "select * from sanpham where id= '$id'";
        $this->query($sql);
        if($this->num_rows()== 0){
            $data= 0;
        }else{
            while($rows= $this->fetch()){
                $data[]= $rows;
            }
        }
        return $data;
    }
        public function listAllin($id) {
        $sql= "select * from sanpham where id in ($id)";
        $this->query($sql);
        if($this->num_rows()== 0){
            $data= 0;
        }else{
            while($rows= $this->fetch()){
                $data[]= $rows;
            }
        }
        return $data;
    }
    public function listtheotenloai($id) {
        $sql= "select hinh, tensp, gia, id from sanpham where id_loai='$id'";
        $this->query($sql);
        if($this->num_rows()== 0){
            $data= 0;
        }else{
            while($row= $this->fetch()){
                $data[]= $row;
            }
        }
        return $data;
    }
}

