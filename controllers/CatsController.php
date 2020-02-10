<?php 
/**
 *  
 */
class CatsController
{
	
	public function actionList(){
		$db = Db::getdb();
		require ROOT.'/shop_cats.php';
		die;
		return true;



		
	}

}

 ?>