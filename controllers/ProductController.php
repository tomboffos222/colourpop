<?php 
include_once ROOT.'/model/product.php';


class ProductController{


	public function actionList($id)
	{	
		if($id){
			$productItem = Product::getProductView($id);
			require ROOT.'/product_show.php';
		}
	

		die();

		return true;

	}
}