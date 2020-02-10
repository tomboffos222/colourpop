<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product show</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="/css/product.css">
</head>
<body>
	<?php require './header.php'; ?>
	<section class="product_show">
		<div class="container container_new">
			<div class="row">
				<div class="col-lg-7">
					<div class="dots_img">
						<div class="dots">
							<span></span>
							<span></span>
						</div>
						<div class="imgs">
							<img src="<?php echo $productItem['img']; ?>" alt="">
							<img src="<?php echo $productItem['img_2']; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="prod_info">
						<h5><?php echo $productItem['name']; ?></h5>
						<p>
							<?php echo $productItem['cat']; ?>

						</p>
						
						<p class="price">
							<span><?php echo $productItem['old_price']; ?> </span> $<?php echo $productItem['price']; ?>
						</p>
						<p class="availability">
							<img src="https://static.afterpay.com/integration/product-page/logo-afterpay-black.png" alt=""> available for orders between $35 - $1000 ⓘ


						</p>
						<hr>
						
						
						
						<p class="desc">
							<?php echo $productItem['description']; ?>
						</p>
						<p class="props">
							<?php echo $productItem['props']; ?>

						</p>
						<div class="buttons">
							<button class="email">email me</button><a href="/cart/addAjax/<?php echo $productItem['id'] ?>" >add to bag</a>
						</div>
						<div class="social_links prods">
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-pinterest"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
						</div>
					</div>
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
	<script>

	var numCount = $('#num_count');
    var plusBtn = $('#button_plus');
    var minusBtn = $('#button_minus');
    
    plusBtn.onclick = function() {
      var qty = parseInt(numCount.value);
      qty = qty + 1;
      numCount.value = qty;
    }
    minusBtn.onclick = function() {
      var qty = parseInt(numCount.value);
      qty = qty - 1;
      numCount.value = qty;};
	</script>
</html>