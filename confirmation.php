<?php 
session_start(); 

include 'db_config.php';

include "navbar.php";
 ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4" id="formconfirm">
			<h3 id="alignform">Hi <?php echo $_SESSION["name"]; ?>,</h3>
			<h3 id="alignform">On behalf of TOPs, we would like to thank you for your recent purchase. We hope you have a wonderful experience with our products.</h3>
			<h3 id="alignform">Should you have any questions, plese feel free to contact us.</h3>
			<hr>
			<h3 id="alignform">Your reference no. is: <?php echo $_SESSION["reference"]; ?></h3>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>

<?php 
include "footer.php" ?>