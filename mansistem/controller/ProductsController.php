<?php

// require('./classes/View.php');
class ProductsController
{



	public function about()
	{
		$view = new View();
		$view->load('products', 'about');
	}

	public function bracket()
	{
		$view = new View();
		$view->load('products', 'bracket');
	}
	/*
	*	Route for displaying all products.
	*/
	public function all()
	{

		$product_model = new Product();

		$view = new View();
		$view->data['products'] = $product_model->getAll();
		$view->load('products', 'all');

	}
	/*
	*	Route for displaying one product details.
	*/
	public function oneproduct()
	{
		$view = new View();
		$product_model = new Product();
		$view->data['products'] = $product_model->getOneProduct($_GET['id']);
		$view->load('products', 'oneproduct');
	}



	/*
	*	Route for displaying  product in cart.
	*/
	public function add_to_cart()
	{
		// start session 
		session_start();
		 
		// get the product id
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		 
		// make quantity a minimum of 1
		$quantity = $quantity <= 0 ? 1 : $quantity;
		 
		// add new item on array
		$cart_item = array(
		    'quantity' => $quantity
		);
		/*
		* check if the 'cart' session array was created
		* if it is NOT, create the 'cart' session array
		*/
		if(!isset($_SESSION['cart'])){
		    $_SESSION['cart'] = array();
		}
		// check if the item is in the array, if it is, do not add
		if(array_key_exists($id, $_SESSION['cart'])){
    	// redirect to product list and tell the user it was added to cart
			header('Location: products.php?action=exists&id=' . $id . '&page=' . $page);
		}

		// else, add the item to the array
		else{
			$_SESSION['cart'][$id]=$cart_item;

    	// redirect to product list and tell the user it was added to cart
			header('Location: products.php?action=added&page=' . $page);
		}





		// $view = new View();
		// $product_model = new Product();
		// $view->data['products'] = $product_model->bracket($_GET['id']);
		// var_dump($_GET['id']);
		// $view->load('products', 'bracket');

	}

	/*
	*	Route for displaying new product form.
	*/
	public function add_new()
	{


		$view = new View();
		$view->load('products', 'add_new');
	}

	/*
	*	Route for delete product from the database.
	*/
	public function save()
	{


		$err = array();

		// cashe vars


		$product_name = $_POST['product_name'];
		$description = $_POST['description'];
		$img_url = 'https://opusteno.rs/slike/desktop-pozadine/21289/slike-lava-desktop-t29.jpg';
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];

		// validate inputs

		if(trim($product_name) == ''){
			$err[] = 'Missing product_name';
		}
		if(trim($description) == ''){
			$err[] = 'Missing description';
		}
		if(trim($price) == ''){
			$err[] = 'Missing price';
		}
		if(trim($quantity) == ''){
			$err[] = 'Missing quantity';
		}
		if(count($err) > 0){
			$error_string = implode('&err[]=', $err);
			$error_string = str_replace(' ', '+', $error_string);
			// $redirect_url = 'http://localhost/mansistem/products/add_new?err[]=' . $error_string;
			// header('Location ' . $redirect_url);
			header('Location http://localhost/mansistem/products/add_new');
		}

		$product_model = new Product();
		$res = $product_model->create($product_name, $description, $img_url, $price, $quantity);

		if ($res){
			header('Location: http://localhost/mansistem/products/allproducts');
		} else {
			var_dump('neuspesno cuvanje u bazi');
		}

	}

		public function delete()
	{
		$product_id = $_GET['id'];
		$product_model = new Product();
		$res = $product_model->delete($product_id);

		if ($res){
			header('Location: http://localhost/mansistem/products/allproducts');
		} else {
			var_dump('neuspesno cuvanje u bazi');
		}
	}

}
