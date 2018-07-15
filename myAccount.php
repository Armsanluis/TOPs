<?php
session_start();
include "navbar.php";

include "db_config.php";
 
if (!isset($_SESSION['name'])){
	header('location: homepage.php');
} else {
	if ($_SESSION["role"] == "admin"){
	header('location: homepage.php');
} 
}

?>

<div class="container">
	<div class="jumbotron">
		<h1>The page you are trying to access is under maintenance. Please contact admin if problem persists.</h1>
	</div>
</div>

<?php 
include "footer.php" 
?>