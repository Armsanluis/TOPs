<?php 
include "navbarAdmin.php";
?>



	<div class="container">



<?php

$id = $_GET["id"];
$category_id = $_GET["category_id"];

include "db_config.php";

$sql = "SELECT * FROM items WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
	echo "<ol>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<li>" . $row["product_name"]. "</li>";
	}
	echo "</ol>";
}

mysqli_close($conn);
?>