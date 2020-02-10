<?php 
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


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/css/cat.css">
</head>
<body>
	<?php require './header.php' ?>
	<div class="cat_title">
		<div class="shop">
			shop
		</div>
		<div class="cats">
			<?php foreach($catLists as $catName): ?>
				<?php if ($catName['order_cat']!=0)continue; ?>
					
				
					<a href="/cat/show/<?php echo $catName['id'] ?>"><?php echo $catName['name']; ?></a>
			<?php endforeach; ?>
		
		</div>
	</div>
	<section class="cats_show">
		<div class="container container_new">
			<div class="row">
				<?php foreach ($catLists as $catShow):?>
					<?php if($catShow['order_cat']!=0)continue; ?>
					<div class="col-lg-4">
						<a href="/cat/show/<?php echo $catShow['id'] ?>">
							<img src="<?php echo $catShow['image_cat'] ?>" alt="">
							<h6><?php echo $catShow['name']; ?></h6>
						</a>
					</div>
				<?php endforeach;?>
				
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