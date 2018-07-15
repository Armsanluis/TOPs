<?php
$id = $_POST["id"];
$description = $_POST["description"];


echo $description."<br>";
echo $id;

include 'db_config.php';
$sql = "UPDATE categories SET description = '$description' WHERE id = '$id'"; 

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Record Updated";
	header("location: product_category.php");
} else {
	echo "Failed";
	header("location: product_category.php");
}


?>