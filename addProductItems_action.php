<?php
$product_name = addslashes($_POST["product_name"]);
$price = addslashes($_POST["price"]);
$category_id = addslashes($_POST["category_id"]);
$image = addslashes($_POST["image"]);
$product_description = addslashes($_POST["product_description"]);
$instructions = addslashes($_POST["instructions"]);
$ingredients = addslashes($_POST["ingredients"]);
$availability = addslashes($_POST["availability"]);


include 'db_config.php';

//insert Record
$sql = "INSERT INTO items(product_name, price, category_id, image, product_description, instructions, ingredients, availability)
VALUES('$product_name', '$price', '$category_id', '$image', '$product_description', '$instructions', '$ingredients', '$availability')";

if(mysqli_query($conn, $sql)){
	header("location: addProductItems.php?add=yes");


} else{
	echo "Failed" .$sql. "<br>" . mysqli_error($conn);
}

?>