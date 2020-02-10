<?php 
include_once	ROOT.'/Db.php';
class Category
{
	public static function getCategoryId($idcat){
		$idcat = intval($idcat);
		if ($idcat) {
			$db = Db::getdb();
			$query = "SELECT * FROM `cats` WHERE `id` = $idcat";
			$result = mysqli_query($db , $query);
			$catItem = mysqli_fetch_assoc($result);
			return $catItem;
		}

	}
}

 ?>