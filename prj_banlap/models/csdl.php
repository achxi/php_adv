<?php

class csdl{
    protected $_hostname= "localhost";
    protected $_hostuser= "root";
    protected $_hostpass= "";
    protected $_dbname= "shop";
    protected $_conn= NULL;
    protected $_result= NULL;


    public function connect() {
        $conn= mysql_connect($this->_hostname, $this->_hostuser, $this->_hostpass);
        mysql_select_db($this->_dbname);
    }
    public function disconnect() {
        if($this->_conn){
            mysql_close($this->_conn);
        }
    }
    public function query($sql) {
        $this->_result= mysql_query($sql);
    }
    public function num_rows() {
        if($this->_result){
            $rows= mysql_num_rows($this->_result);
        }else{
            $rows= 0;
        }
        return $rows;
    }
    public function fetch() {
        if($this->_result){
            $data= mysql_fetch_assoc($this->_result);
        }else{
            $data= 0;
        }
        return $data;
    }
    
}
