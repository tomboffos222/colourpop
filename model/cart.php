<?php 
/**
 *  
 */

class Cart
{
	
	public static function addProduct($id)
	{
		$id = intval($id);
		$productsInCart = array();

		if (isset($_SESSION['products'])) {

			$productsInCart = $_SESSION['products'];
		}
		if (array_key_exists($id,$productsInCart)) {
			$productsInCart[$id]++;
		}else{


			$productsInCart[$id] = 1;


		}

		$_SESSION['products'] = $productsInCart;


		return self::countItems();
	}
	public static function delItem($id){
		$id =intval($id);
	
		unset($_SESSION['product']);
	}
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

	public static function getProducts(){
		if(isset($_SESSION['products'])){
			return $_SESSION['products'];
		}
		return true;
	}


	public static function getTotalPrice($products){
		$productsInCart = self::getProducts();
	

		if($productsInCart){
			foreach ($products as $item) {
				
				
				$total +=$item['price']*$productsInCart[$item['id']];
				# code...


			}

		}
		return $total;
	}
}
/**
 * 
 */
class Productget
{
	public static function getProductsById($idsArray)
	{
		$products = array();

		$db= Db::getdb();
		$idsString  = implode(',',$idsArray);
		
		$sql  = "SELECT * FROM `product` where `status`='1' and `id` in ($idsString)";
		$query  = mysqli_query($db,$sql);

		$z = 0;

			while($srow = mysqli_fetch_assoc($query)) {
	   			$products[$z]['id'] =$srow['id']; 
	   			$products[$z]['name']= $srow['name'];
	   			$products[$z]['cat']=$srow['cat'];
	   			$products[$z]['old_price']=$srow['old_price'];
	   			$products[$z]['description']=$srow['description'];
	   			$products[$z]['status']=$srow['status'];
	   			$products[$z]['img']=$srow['img'];
	   			$products[$z]['price']=$srow['price'];

	   			$z++;
			}
		return $products;
	
		
	}
	
}

 ?>