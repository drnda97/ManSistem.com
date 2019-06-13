<?php

class Product
{

	public $data = array();

	/*
	 * Method for fetching all products from the database (All products page).
	 */
	public function getAll()
	{
		global $db_conn;
		$query = 'select * from products';
		$resource = $db_conn->query($query);
		while ($product = $resource->fetch_assoc()) {
			$this->data[] = $product;
		}
		return $this->data;
	}

	/*
	 * Method for fetching one products from the database (Single product page).
	 */
	public function getOneProduct($id)
	{
		global $db_conn;
		$query = 'select * from products where id= ' . $id;
		$resource = $db_conn->query($query);
		$res = $resource->fetch_assoc();
		return $res;
	}
	/*
	 * Method for fetching  products in cart from the database
	 */
	public function cart($id)
	{
		// start session
		session_start();

// connect to database
		include 'config/database.php';

// include objects
		include_once "objects/product.php";
		include_once "objects/product_image.php";

// get database connection
		$database = new Database();
		$db = $database->getConnection();

// initialize objects
		$product = new Product($db);
		$product_image = new ProductImage($db);

// set page title
		$page_title="Cart";




		// global $db_conn;
		// $query = 'select * from products where id= ' . $id;
		// $resource = $db_conn->query($query);
		// $res = $resource->fetch_assoc();
		// return $res;
	}

	// read all product based on product ids included in the $ids variable
	public function readByIds($ids){
 
	    $ids_arr = str_repeat('?,', count($ids) - 1) . '?';
	 
	    // query to select products
	    $query = "SELECT id, name, price FROM " . $this->table_name . " WHERE id IN ({$ids_arr}) ORDER BY name";
	    $stmt = $this->conn->prepare($query);
	    
    // execute query
	    $stmt->execute($ids);
	    
    // return values from database
	    return $stmt;
	}



	/*
	 * Method for storing new record in the database
	 */
	public function create($product_name, $description, $img_url, $price, $quantity)
	{
		global $db_conn;
		$query = 'insert into products values (null, "'.$product_name.'", "'.$description.'", '.$img_url.', "'.$price.'", "'.$quantity.'")';
		$res = $db_conn->query($query);
		return $res;
	}

	/*
	 * Method for deleting a record in the database
	 */
	public function delete($id)
	{
		global $db_conn;
		$query = 'delete from products where id = ' . $id;
		$res = $db_conn->query($query);
		return $res;
	}

}
