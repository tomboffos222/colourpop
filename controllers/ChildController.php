<?php 
/**
 * 
 */
include_once ROOT.'/model/childCategory.php';
class ChildController
{
	
	public function actionShow($name)
	{
		if($name){
			$childItem = Category::getCategoryId($name);
			require_once ROOT.'/product_list_child.php';
			

		}
		
		die();
	return true;


	}


	


	}


 ?>