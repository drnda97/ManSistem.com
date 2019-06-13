			<main class="productContainer">
				<div class="productdesc">
					<?php $product = $this->data['products']; ?> 
					<div class="productInfoContainer">
						<h1><?php echo $product['product_name']; ?></h1>
						<div class="productImgContainer">
							<img src="<?php echo $product['img_url']; ?>">
						</div>
						<p><?php echo $product['description']; ?></p>
						<h3>Cena:<span> <?php echo $product['price']; ?></span> rsd.</h3>
						<form action="http://www.mansistem.com/products/bracket" method="post">
							Unesi količinu:<input type="number" name="quantity" min="1" max="1000">
							<input type="submit" name="" value="Dodaj u korpu!">
						</form>
						<a href="<?php echo WEBROOT; ?>/products/all">Nazad u proizvode</a>
					</div>
				</div>
			</main>