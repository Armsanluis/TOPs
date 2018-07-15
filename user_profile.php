<?php
session_start();
include "navbar.php";

include "db_config.php";
 
if (!isset($_SESSION['name'])){
  header('location: homepage.php');
} else {
  if ($_SESSION["role"] != "admin"){
  header('location: homepage.php');
} 
}

?>


	<div class="container">
	<!-- <div class="addnewcategory">
		<button class="btn btn-primary" id="simple"><a href="addProductItems.php" style="text-decoration: none; color: white;">Add New Users</a></button>
	</div> -->
	<?php

if(isset($_GET["del"])){
	echo "<div class='alert alert-danger'>
	<strong>Record was successfully deleted</strong>
	</div>";
};
?>
		<h1 style="text-align: center;">User Profile</h1>
		<?php
		//connect to the database
		include 'db_config.php';

		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);

		$data = "";
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row["id"];
                  $name = $row["name"];
                  $email = $row["email"];
                  $data .= "<div class='col-md-6 col-lg-4'>
      <div class='card-deck'>
     <div class='card'>
     <a href='user_profile.php'><span class='glyphicon glyphicon-user'></span></a>
    <div class='card-body'>
      <h5 class='card-title'>$name</h5>
      <h5 class='card-title'>$email</h5>
      <a href='viewUser2.php?id=$row[id]&name=$row[name]'<span class='glyphicon glyphicon-eye-open'></span></a>
      <a href='updateUser.php?id=$row[id]'<span class='glyphicon glyphicon-edit'></span></a>
      <a href='delUser.php?id=$row[id]'><span class='glyphicon glyphicon-trash'></span></a>
    </div>
    <div class='card-footer'>
      <small class='text'>Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>";

    }
              }
              echo $data;
            ?>

