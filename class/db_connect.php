<?php

class Db_connect
{
	public $hostname='localhost';
	public $username='root';
	public $password='';
	public $dbname='i_love_renata_db';
    public $conn;
	public function __construct()
    {
        $this->conn=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
        if($this->conn)
        {
            
        }
        else
        {
            die('connection problem'.mysqli_error());
        }
    }
}