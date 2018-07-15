<?php
//updateBuildings.php
include "navbarAdmin.php";

$id = $_GET["id"];


include "db_config.php";
$sql = "SELECT * FROM categories where id = '$id'";
$result = mysqli_query($conn, $sql);

if($result){
	while ($row = mysqli_fetch_assoc($result)) {
		$description = $row["description"];
		
		
	}
}



?>


	<div class="container">
		<h1 style="text-align: center;">Update Product Category</h1>
		<hr>
		<form class="form-horizontal" action="updateCategory_action.php" method="POST">
			<h3>Description:</h3>
			<input type="text" name="id" hidden value="<?php echo $id;?>">
			<input type="text" name="description" value = "<?php echo $description;?>" style="width: 100%;" required>
			<br>
			
			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Update Product Category</button>
			
		</form>
	</div>




<?php 
include "footer.php" 
?>
