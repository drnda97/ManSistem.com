		<div class="container-middle">
			<aside class="asideContainer">
				<h3>Filter</h3>
				<ul>
					<li><a href="#">Hidračna Creva</a></li>
					<li><a href="#">Vazdušna Creva</a></li>
					<li><a href="#">Čaure</a></li>
					<li><a href="#">Spojnice</a></li>
					<li><a href="#">Podloške</a></li>
					<li><a href="#">Šuplji vijci</a></li>
					<li><a href="#">Reduciri</a></li>
				</ul>
			</aside>
		<!-- </div>
		<div> -->
			<main class="mainContainer">
				
				<h1>Proizvodi</h1>

				<?php foreach ($this->data['products'] as $product) : ?> 
					 <div class="cardContainer">
						<div class="cardImg">
							<a href="http://localhost/mansistem/products/oneproduct?id=<?php echo $product['id']; ?>">
								<img src="<?php echo $product['img_url']; ?>" alt="product-image">
							</a>
						</div>
						<h4><?php echo $product['product_name']; ?></h4>
						<p><?php echo substr($product['description'], 0, 51); ?> ...</p>
						<span class="holder">Cena: <?php echo $product['price']; ?> din</span>
						<a href="<?php echo WEBROOT; ?>/products/oneproduct?id=<?php echo $product['id']; ?>" class="productBtn">Detaljnije</a>
						  <!-- <span>Količina: <?php echo $product['quantity']; ?>  kom.</span>  -->
					</div> 
				 <?php endforeach; ?>
			  	<div class="pagination">
			  		<a href="#">Prethodna</a>
			  		<a href="#">Sledeca</a>
			  	</div>
			</main>
		</div>
			
