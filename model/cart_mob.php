<?php 

/**
 * 
 */
class cartMob 
{
	
	public static function countItems()
	{
		if(isset($_SESSION['products'])){
			$count=  0; 
			foreach ($_SESSION['products'] as $id => $quantity) {

				$count = $count +$quantity;

				
			}
			return $count;
			return $quantity;


		}else{
			return  0;

		}
	
	}
	public static function getTotalPrice($products){
		$productsInCart = self::getProducts();
		$total = 0;

		if($productsInCart){
			foreach ($products as $item) {
				
				
				$total +=$item['price']*$productsInCart[$item['id']];
				# code...


			}

		}
		return $total;
	}
}

 ?>