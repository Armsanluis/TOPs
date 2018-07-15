<?php
//updateBuildings.php
include "navbar.php";

$id = $_GET["id"];


include "db_config.php";
$sql = "SELECT * FROM users where id = '$id'";

$result = mysqli_query($conn, $sql);

if($result){
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];
		$name = $row["name"];
		$role = $row["role"];
		$email = $row["email"];
		$password = $row["password"];
		$home_address = $row["home_address"];
		$alternative_address = $row["alternative_address"];
		$mobile_number = $row["mobile_number"];
		$credit_card_no = $row["credit_card_no"];
		
		
	}
}



?>


	<div class="container">
		<h1 style="text-align: center;">Update User Profile</h1>
		<hr>
		<form class="form-horizontal" action="updateUser_action.php" method="POST">
			<h3>ID:</h3>
			<input type="text" name="id" hidden value="<?php echo $id;?>">
			<br>
			<h3>User Name:</h3>
			<input type="text" name="name" value = "<?php echo $name;?>" style="width: 100%;" required>
			<br>
			<h3>Role:</h3>
			<input type="text" name="role" value = "<?php echo $role;?>" style="width: 100%;" required>
			<br>
			<h3>Email Address:</h3>
			<input type="text" name="email" hidden value = "<?php echo $email;?>" style="width: 100%;" required>
			<br>
			<h3>Password:</h3>
			<input type="text" name="password" value = "<?php echo $password;?>" style="width: 100%;" required>
			<br>
			<h3>Home Address:</h3>
			<input type="text" name="home_address" value = "<?php echo $home_address;?>" style="width: 100%;" required>
			<br>
			<h3>Alternative Address:</h3>
			<input type="text" name="alternative_address" value = "<?php echo $alternative_address;?>" style="width: 100%;" required>
			<br>
			<h3>Mobile Number:</h3>
			<input type="text" name="mobile_number" value = "<?php echo $mobile_number;?>" style="width: 100%;" required>
			<br>
			<h3>Credit Card Number:</h3>
			<input type="text" name="credit_card_no" value = "<?php echo $credit_card_no;?>" style="width: 100%;" required>
			<br>
								
			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Update User</button>
			
		</form>
	</div>




<?php 
include "footer.php" 
?>
