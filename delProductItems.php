<?php

$id = $_GET['id'];


//Establish a connection
$conn = mysqli_connect("localhost", "root", "", "tops");
if(!$conn){
	die("Failed Connection" . mysqli_connect_error());
}

$sql = "DELETE FROM items where id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: product_items.php?del=yes");
}
else {
	echo "Delete Failed";
}
?>