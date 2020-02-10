<?php
class Db
{
	public static function getdb(){
		$host = 'localhost';
		$dbname = 'colourpop';
		$user = 'root';
		$password  = 'root';
		$db =mysqli_connect($host,$user,$password,$dbname);

		return $db;
	}
}