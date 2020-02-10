<?php 
/**
 * 
 */
include_once ROOT.'/model/category.php';
class CatController
{
	
	public function actionShow($name)
	{
		if($name){
			$catItem = Category::getCategoryId($name);
			require_once ROOT.'/product_list.php';
			

		}
		
		die();
			return true;


	}


	


	}


 ?>