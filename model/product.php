<?php 
include_once ROOT.'/Db.php';
class Product
{
	
	public static function getProductView($idprod){
		$idprod=intval($idprod);
		if($idprod){
			$db  = Db::getdb();

			$query = "SELECT * FROM `product` WHERE `id`= $idprod ";
			
			$result = mysqli_query($db,$query);

			$productItem =mysqli_fetch_assoc($result);
			return $productItem;
		}
}
}