<?php
$id = $_POST["id"];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$category_id = $_POST["category_id"];
$image = $_POST["image"];
$product_description = $_POST["product_description"];
$instructions = $_POST["instructions"];
$ingredients = $_POST["ingredients"];
$availability = $_POST["availability"];


echo $product_name."<br>";
echo $id;

include 'db_config.php';
$sql = "UPDATE items SET product_name = '$product_name', price = '$price', category_id = '$category_id', image = '$image', product_description = '$product_description', instructions = '$instructions', ingredients = '$ingredients', availability = '$availability' WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Record Updated";
	header("location: product_items.php");
} else {
	echo "Failed";
	header("location: product_items.php");
}


?>