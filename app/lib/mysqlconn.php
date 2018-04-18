<?php

class mysqlconn
{
	
	public function connect(){
		$host = '127.0.0.1';
		$user = 'root';
		$pass = '';
		$db = 'demo';
		$connection = mysqli_connect($host,$user,$pass,$db);
		return $connection;
	}

}