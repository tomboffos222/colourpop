<?php 
require ROOT.'/model/cart.php';
/**
 * 
 */
class CartController 
{
	
	public function actionAddAjax($id){
		echo Cart::addProduct($id);
		header('location:'.$_SERVER['HTTP_REFERER']);
		die();
		return true;
	
	}
	

	public function actionShow(){

		
		$productsInCart = Cart::getProducts();

		

		if($productsInCart){
			
			
			$productsIds = array_keys($productsInCart);
		


			$products = Productget::getProductsById($productsIds);



			$totalprice = Cart::getTotalPrice($products);

		
			
			$count = Cart::countItems();
		}


		require ROOT.('/bag.php');
		die();
		return true;

	}
	public static function actionMob(){

		
		$productsInCart = Cart::getProducts();

		

		if($productsInCart && isset($_SESSION['products'])){
			
			
			$productsIds = array_keys($productsInCart);
		


			$products = Productget::getProductsById($productsIds);



			$totalprice = Cart::getTotalPrice($products);

		
			
			$count = Cart::countItems();

		}


		
		
			return array($count,$products,$productsInCart,$totalprice);
		

	

	}

	public static function actionTotal(){
		$productsInCart = Cart::getProducts();
		if ($productsInCart) {
			$productsIds = array_keys($productsInCart);
		


			$products = Productget::getProductsById($productsIds);

			$totalprice = Cart::getTotalPrice($products);

		}
		return $totalprice;
	}
	public static function actionDelAjax($id){
		if (!empty($_SESSION["products"])) {
			    foreach ($_SESSION["products"] as $select => $val) {
			        if($val["$id"] != $id)
			        {
			            unset($_SESSION["products"][$id]);
			         
			        }
			    }
			}
		header("location:".$_SERVER['HTTP_REFERER']);

		die();
		return true;


	}
}

 ?>