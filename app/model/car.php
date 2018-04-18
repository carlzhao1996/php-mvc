<?php

class car extends mysqlconn
{
	private $conn;
	public function __construct(){
		$this->conn = $this->connect();
	}

	public function findall(){
		$sql = "SELECT * FROM car";
		$sele = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
		$result = mysqli_fetch_array($sele);
		return $result;
	}
}