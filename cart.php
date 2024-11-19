<?php
session_start();
include("connect.php");
	$id = $_GET['id'];
	$qr = "SELECT * FROM product WHERE id_product = $id";
	$result = mysqli_query($conn,$qr);

	$product_cart = array();
	foreach ($result as $value) {
		$product_cart[$value["id_product"]]= $value;
	}
	$detail = $product_cart[$id];
	
	if (isset($_POST["addtocart"])) {
		$sl = $_POST["qty"];
			if (!isset($_SESSION["cart-add"])|| $_SESSION["cart-add"]==NULL) {
		$product_cart[$id]["qty"] = $sl;
		$_SESSION["cart-add"][$id] = $product_cart[$id];
	}
	else{
		if (array_key_exists($id, $_SESSION["cart-add"])) {
			$_SESSION["cart-add"][$id]["qty"] +=$sl;
		}
		else{
			$product_cart[$id]["qty"] = $sl;
			$_SESSION["cart-add"][$id] = $product_cart[$id];	
		}
	}
	header("location:shopping.php");
}
?>