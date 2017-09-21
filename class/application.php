<?php
require 'db_connect.php';
class Application {
    public $conn='';
    public function __construct() {
        $db_connect=new Db_Connect();
        $this->conn=$db_connect->conn;
    }
    public function insert_image($image){

        $sql="INSERT INTO tbl_image(image,status) VALUES (N'$image',N'1')";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result=  mysqli_query($this->conn,$sql);
        if($result)
        {
            return 1;
        }
    }
    public function show_image(){
        $sql="SELECT * FROM tbl_image WHERE status=1";
        mysqli_query($this->conn,"set character_set_results='utf8'");
        $result=mysqli_query($this->conn,$sql);
        return $result;
    }


}
