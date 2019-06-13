			<main class="cartContainer">

				<!-- <?php //if (!isset($_SESSION['bracket'])): ?> -->

					<h1>Vaša korpa je prazna!</h1>
					<?php 
					if(!isset($_SESSION['cart'])){
		   	 			$_SESSION['cart'] = array();
					}else{

						$action = isset($_GET['action']) ? $_GET['action'] : "";

						echo "<div class='col-md-12'>";
							if($action=='removed'){
							echo "<div class='alert alert-info'>";
								echo "Product was removed from your cart!";
							echo "</div>";
					}
					else if($action=='quantity_updated'){

						echo "<div class='alert alert-info'>";
							echo "Product quantity was updated!";
						echo "</div>";
					}
					echo "</div>";

						 if(count($_SESSION['cart'])>0){
 
    						// get the product ids
						 	$ids = array();
						 	foreach($_SESSION['cart'] as $id=>$value){
						 		array_push($ids, $id);
						 	}
						 	
						 	$stmt=$product->readByIds($ids);
						 	
						 	$total=0;
						 	$item_count=0;
						 	
						 	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						 		extract($row);
						 		
						 		$quantity=$_SESSION['cart'][$id]['quantity'];
						 		$sub_total=$price*$quantity;
						 		
						 		echo "<div class='cart-row'>";
						 		echo "<div class='col-md-8'>";
						 		
						 		echo "<div class='product-name m-b-10px'><h4>{$name}</h4></div>";
						 		
                				// update quantity
						 		echo "<form class='update-quantity-form'>";
						 		echo "<div class='product-id' style='display:none;'>{$id}</div>";
						 		echo "<div class='input-group'>";
						 		echo "<input type='number' name='quantity' value='{$quantity}' class='form-control cart-quantity' min='1' />";
						 		echo "<span class='input-group-btn'>";
						 		echo "<button class='btn btn-default update-quantity' type='submit'>Update</button>";
						 		echo "</span>";
						 		echo "</div>";
						 		echo "</form>";
						 		
                // delete from cart
						 		echo "<a href='remove_from_cart.php?id={$id}' class='btn btn-default'>";
						 		echo "Delete";
						 		echo "</a>";
						 		echo "</div>";
						 		
						 		echo "<div class='col-md-4'>";
						 		echo "<h4>&#36;" . number_format($price, 2, '.', ',') . "</h4>";
						 		echo "</div>";
						 		echo "</div>";
        // =================
						 		
						 		$item_count += $quantity;
						 		$total+=$sub_total;
						 	}
						 	
						 	echo "<div class='col-md-8'></div>";
						 	echo "<div class='col-md-4'>";
						 	echo "<div class='cart-row'>";
						 	echo "<h4 class='m-b-10px'>Total ({$item_count} items)</h4>";
						 	echo "<h4>&#36;" . number_format($total, 2, '.', ',') . "</h4>";
						 	echo "<a href='checkout.php' class='btn btn-success m-b-10px'>";
						 	echo "<span class='glyphicon glyphicon-shopping-cart'></span> Proceed to Checkout";
						 	echo "</a>";
						 	echo "</div>";
						 	echo "</div>";
						 	
						 }
						 
// no products were added to cart
						 else{
						 	echo "<div class='col-md-12'>";
						 	echo "<div class='alert alert-danger'>";
						 	echo "No products found in your cart!";
						 	echo "</div>";
						 	echo "</div>";
						 }
					}
				 ?>

					<!-- <a class="cartBtnn" href="<?php //echo WEBROOT; ?>/products/all">Nazad u proizvode</a>
				<div class="cartTable">
					<h1>Vaša korpa<img class="cartIcon" src="<?php// echo WEBROOT; ?>/assets/css/pictures/cart.png"></h1>
					<table cellspacing="0" cellpadding="10">
						<thead>
							<tr>
								<th>PROIZVOD</th>
								<th>opis</th>
								<th>CENA</th>
								<th>KOLIČINA</th>
								<th>UKUPNO</th>
							</tr>
						</thead>
						<tbody>
							<tr> -->
								<!-- <td><img src="<?php //echo $product['img_url']; ?>"></td> -->
								<!-- <td><p><?php //echo $product['product_name']; ?></p><?php //echo $product['description']; ?></td> -->
								<!-- <td><?php// echo $product['price']; ?></td>
								<td><form><input type="number" name="quantity" min="1" max="1000"></form></td>
								<td>2400$</td> -->
							<!-- </tr>
							<tr class="even">
								
								<td><img src="https://docs.microsoft.com/en-us/windows/uwp/design/controls-and-patterns/images/color-picker-casual.png"></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</td>
								<td>240$</td>
								<td><input type="number" name="number" value=""></td>
								<td>2400$</td>
							</tr>
							<tr>
								
								<td><img src="https://docs.microsoft.com/en-us/windows/uwp/design/controls-and-patterns/images/color-picker-casual.png"></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</td>
								<td>300$</td>
								<td><input type="number" name="number" value=""></td>
								<td>3000$</td>
							</tr>
							<tr class="even">
								
								<td><img src="https://docs.microsoft.com/en-us/windows/uwp/design/controls-and-patterns/images/color-picker-casual.png"></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad .</td>
								<td>240$</td>
								<td><input type="number" name="number" value=""></td>
								<td>2400$</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>TOTAL:</td>
								<td>$1200</td>
							</tr>
						</tfoot>
						
					</table>
				</div>
				<a class="cartBtn" href="#">KUPI!</a> -->

					


				<!-- <?php //else: ?> -->
					<!-- <?php //foreach ($this->data['products'] as $product) : ?> 

						<div class="cardContainer">
							<div class="cardImg">
								<a href="http://localhost/mansistem/products/oneproduct?id=<?php// echo $product['id']; ?>">
									<img src="<?php// echo $product['img_url']; ?>" alt="product-image">
								</a>
							</div>
							<h4><?php// echo $product['product_name']; ?></h4>
							<p><?php //echo $product['description']; ?></p>
							<span>Cena: <?php //echo $product['price']; ?>  din</span>
							<span>Količina: <?php //echo $product['quantity']; ?>  din</span>
							<a href="http://localhost/mansistem/products/oneproduct?id=<?php //echo $product['id']; ?>" class="product-btn">Detaljnije</a>
						</div> 
					<?php //endforeach; ?>
				 -->
				 <!-- <?php// endif; ?> -->
			</main>

