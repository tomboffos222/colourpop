<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/style.css">

</head>
<body>
<?php require ROOT.'/controllers/CartController.php' ;
if (!empty($_SESSION['products'])) {
	# code...


$cartInfo= CartController::actionMob();


$productsIncart=$cartInfo[2];
$totalPrice = $cartInfo[3];

$products = $cartInfo[1];
$count  = $cartInfo[0];}

?>
<div class="overlay">
		
	</div>
	<div class="cart_show">

		<div class="title_close">
			<h5>
				shopping bag
			</h5>
			<a href="" class="cart_close">
				<img src="https://cdn.shopify.com/s/files/1/1338/0835/files/icon-close.svg?11699190567998258922" alt="">
			</a>
		</div>
		<div class="cart_main_parts">
			<?php if (!empty($_SESSION['products'])):?>
			<?php foreach ($products as $product): ?>
			<div class="cart_prod">

				<div class="img_prod">
					<img src="<?php echo $product['img']; ?>" alt="">
				</div>
				
				<div class="info_prod_cart">
					<div class="name_cart">
						<?php echo $product['name']; ?>
					</div>
					<div class="cat_cart">
						<?php echo $product['cat']; ?>
					</div>
					<div class="price_cart">
						$<?php echo $product['price']; ?>
					</div>
					<div class="mob_count">
						
						<?php echo $productsIncart[$product["id"]] ?>

						
					</div>
				</div>



				<div class="reset_prod">
					<a href="/cart/delAjax/<?php echo $product['id'] ?>" data-id="" >
						<img src="https://cdn.shopify.com/s/files/1/1338/0835/files/icon-close.svg?11699190567998258922" alt="">

					</a>
				</div>
		
			</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php if(empty($_SESSION['products'])):?>
			<div class="cart_prod">
				<div class="info_prod_cart">
					The cart is empty
				</div>
			</div>
		<?php endif; ?>
		</div>
		<div class="button_subtotal">
			<div class="subtotal">
				<div>subtotal</div>
				<div>$ <?php if(!empty($_SESSION['products'])){echo $totalPrice;}	?></div>
			</div>

			<div class="add">
				<a href="/cart/show" class="addtocard ">
					secure checkout
				</a>
			</div>

		</div>

		
	</div>
	<header>
		<div class="menu_mob">
			<li><a href="/cats">Colourpop</a></li>
			<li><a href="/cat/show/8">Sol body</a></li>
			<li><a href="/cat/show/7">Fourth Ray Beauty</a></li>
			<li><a href="/cats">Disney</a></li>
		</div>
		<div class="container container_new">
			<div class="row">
				<div class="col-lg-12">
					<div class="colourpop_news">
						<a href="">Free US shipping over $30 | Free Global shipping over $50</a>
					</div>
				</div>
				<div class="col-lg-4 col-4">
					<div class="header_hamburger">
					
							<span class="top"></span>
							<span class="block"></span>
							<span class="down"></span>
						
					
					</div>
					<a href="index.php">
						<img src="https://cdn.shopify.com/s/files/1/1338/0835/t/39/assets/logo.svg?6830523516656068258" alt="" class="stick_logo">
					</a>
					
				</div>
				<div class="col-lg-5 col-5">
					<div class="header_logo">
						<a href="index.php">
							<img src="https://cdn.shopify.com/s/files/1/1338/0835/t/39/assets/logo.svg?6830523516656068258" alt="">
						</a>
					</div>
					<div class="header_menu">
						<nav>
							
								<li><a href="/cats">Colourpop</a></li>
								<li><a href="/cat/show/8">Sol body</a></li>
								<li><a href="/cat/show/7">Fourth Ray Beauty</a></li>
								<li><a href="/cats">Disney</a></li>
						
						</nav>
					</div>
				</div>
				<div class="col-lg-3 col-3">
					<div class="icons_functional">
						<a href="bag.html" class="bag">
							<img src="/image/shopping-bag.svg" alt="" class="shopping"><span id="cart-count"><?php if(!empty($_SESSION['products'])){echo $count;}else{
								echo "0";
							} ?></span>
						</a>
						
					</div>
				</div>
			</div>
		</div>
	</header>