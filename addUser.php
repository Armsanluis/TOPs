<?php 
include "navbarAdmin.php";
?>



	<div class="container">

	<?php

if(isset($_GET["del"])){
	echo "<div class='alert alert-danger'>
	<strong>Record was successfully deleted</strong>
	</div>";
};
?>
		<h1 style="text-align: center;">Add New User</h1>
		<hr>

		<form class="form-horizontal" action="addUser_action.php" method="POST">
			<h3>User Name:</h3>
			<input type="text" name="name" style="width: 100%;" required>
			<br>
			<h3>Role:</h3>
			<input type="text" name="role" style="width: 100%;" required>
			<br>
			<h3>Email Address:</h3>
			<input type="text" name="email" style="width: 100%;" required>
			<br>
			<h3>Password:</h3>
			<input type="text" name="password" style="width: 100%;" required>
			<br>
			<h3>Avatar:</h3>
			<input type="text" name="avatar" style="width: 100%;" required>
			<br>
			<h3>Home Address:</h3>
			<input type="text" name="home_address" style="width: 100%;" required>
			<br>
			<h3>Alternative Home Address:</h3>
			<input type="text" name="alternative_address" style="width: 100%;" required>
			<br>
			<h3>Mobile Number:</h3>
			<input type="text" name="mobile_number" style="width: 100%;" required>
			<br>
			<h3>Credit Card Number:</h3>
			<input type="text" name="credit_card_no" style="width: 100%;" required>
			<br>
			
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Add New User</button>
			
		</form>
	</div>