<?php 


	require_once ROOT.'/Db.php';
	$db = Db::getdb();
	$query = "SELECT * FROM `cats`";
		$result = mysqli_query($db,$query);

		$i = 0;
		$catLists = array();
		while($row = mysqli_fetch_assoc($result)) {
   			$catLists[$i]['id'] =$row['id']; 
   			$catLists[$i]['name']= $row['name'];
   			$catLists[$i]['image_cat']=$row['image_cat'];
   			$catLists[$i]['order_cat']=$row['order_cat'];
   			$i++;
		}



	$queryprod = "SELECT * FROM `product`";
		$resultprod = mysqli_query($db,$queryprod);

		$z = 0;
		$prodLists = array();
		while($srow = mysqli_fetch_assoc($resultprod)) {
   			$prodLists[$z]['id'] =$srow['id']; 
   			$prodLists[$z]['name']= $srow['name'];
   			$prodLists[$z]['cat']=$srow['cat'];
   			$prodLists[$z]['old_price']=$srow['old_price'];
   			$prodLists[$z]['description']=$srow['description'];
   			$prodLists[$z]['status']=$srow['status'];
   			$prodLists[$z]['img']=$srow['img'];
   			$prodLists[$z]['price']=$srow['price'];

   			$z++;
		}

	$querychild = "SELECT * FROM `child_cats` ORDER BY `order_cat`";
		$resultchild = mysqli_query($db,$querychild);

		$y = 0;
		$childCats = array();
		while($crow = mysqli_fetch_assoc($resultchild)) {
   			$childCats[$y]['id'] =$crow['id']; 
   			$childCats[$y]['name']= $crow['name'];
   			$childCats[$y]['image_cat']=$crow['image_cat'];
   			$childCats[$y]['order_cat']=$crow['order_cat'];
   			$childCats[$y]['parent_cat']=$crow['parent_cat'];
   			$y++;
		}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shop list</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/css/cat.css">
</head>
<body>

	<?php require './header.php'; ?>
	
	<section class="cat">
		<div class="cat_name">
			<?php $replace = '%20';
					$search = ' ';
					$name = str_replace($replace,$search,$name);
					echo $catItem['name'];

			?>

		</div>

		<div class="cats">	
			<?php foreach($catLists as $catList): ?>
				<?php if ($catList['order_cat']==0):?>
					<a href="/cat/show/<?php echo $catList['id'] ?>"><?php echo $catList['name'] ?></a>
				<?php endif; ?>
			<?php endforeach;?>
			
		</div>
		
		
		
		<section class="cats_show">
			<div class="container container_new">
				<div class="row">
					
						<?php foreach ($childCats as $childCat):?>
							
							<?php if($catItem['name']==$childCat['parent_cat']): ?>
								<div class="col-lg-4">
									<a href="/child/show/<?php echo $childCat['id'] ?>">
										<img src="<?php echo $childCat['image_cat'] ?>" alt="">
										<h6><?php echo $childCat['name']; ?></h6>
									</a>
								</div>
							<?php endif; ?>
						<?php endforeach;?>
					
			
					
				</div>
			</div>
		</section>

			<div class="products_show">
				<div class="container container_new">
					<div class="row">
						<?php foreach($prodLists as $prodList): ?>
							
							<?php if(ucfirst($prodList['cat'])==$catItem['name']){ ?>
							<div class="col-lg-3">
								
								<div class="product">
									<a href="/product/list/<?php echo $prodList['id']; ?>">
										<img src="<?php echo $prodList['img'] ?>" alt="" class="img1"> 
										
											<h4>
												<?php echo $prodList['name']; ?>
											</h4>
											<p>
												<?php echo $prodList['cat']; ?>

											</p>
											<p class="price">
												<span><?php echo $prodList['old_price'] ?> </span><?php echo $prodList['price'] ?>
											</p>
											<p>
												<?php echo $prodList['description']; ?>
											</p>
									</a>
											<div>
												<a class=" add-to-cart" href="/cart/addAjax/<?php echo $prodList['id'] ?>"> add to bag</a>
											</div>
									
								</div>
							
						
							</div>
							<?php }; ?>
						<?php endforeach;?>
					
						


					</div>
				</div>

			</div>

	
	</section>

	<?php require './footer.php'; ?>
</body>
	<script src="https://use.fontawesome.com/3acef40cae.js"></script>
	<script  src="/js/jquery.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/script.js"></script>
</html>