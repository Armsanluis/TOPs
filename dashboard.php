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
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="card-deck">
     <div class="card">
    
  <a href="user_profile.php"><span class="glyphicon glyphicon-user"></span></a>
    <div class="card-body">
      <h5 class="card-title">User Profile</h5>
      <span class="glyphicon glyphicon-eye-open"></span>
      <span class="glyphicon glyphicon-edit"></span>
      <span class="glyphicon glyphicon-trash"></span>
    </div>
    <div class="card-footer">
      <small class="text">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-deck">
  <div class="card">
    
    <a href="product_category.php"><span class="glyphicon glyphicon-barcode"></span></a>
    <div class="card-body">
      <h5 class="card-title">Product Categories</h5>
      <span class="glyphicon glyphicon-eye-open"></span>
      <span class="glyphicon glyphicon-edit"></span> 
      <span class="glyphicon glyphicon-trash"></span>
    </div>
    <div class="card-footer">
      <small class="text">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-deck">
  <div class="card">
    
    <a href="product_items.php"><span class="glyphicon glyphicon-list"></span></a>
    <div class="card-body">
      <h5 class="card-title">Product Items</h5>
      <span class="glyphicon glyphicon-eye-open"></span>
      <span class="glyphicon glyphicon-edit"></span>
      <span class="glyphicon glyphicon-trash"></span>
    </div>
    <div class="card-footer">
      <small class="text">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-deck">
  <div class="card">
    
    <a href="salesNorders.php"><span class="glyphicon glyphicon-piggy-bank"></span></a>
    <div class="card-body">
      <h5 class="card-title">Oders and Sales</h5>
        <span class="glyphicon glyphicon-eye-open"></span></a> 
        <span class="glyphicon glyphicon-edit"></span></a> 
        <span class="glyphicon glyphicon-trash"></span></a> 
    </div>
    <div class="card-footer">
      <small class="text">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

</body>
</html>
