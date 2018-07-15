<?php 


include "db_config.php"; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TOPS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

  <link rel="stylesheet" type="text/css" href="trial/css/style.css">
</head>

<body>
  <div id="webName">
    <?php 

    if (!isset($_SESSION['name'])){
  echo "<p id='webName'><strong>T</strong>he <strong>O</strong>rdinary <strong>P</strong>roduct <strong>S</strong>hop</p>";
} else {
  if ($_SESSION["role"] != "admin"){
  echo "<p id='webName'><strong>T</strong>he <strong>O</strong>rdinary <strong>P</strong>roduct <strong>S</strong>hop</p>";
} else {
  echo "<p id='webName'><strong>TOP Admin DashBoard</strong></p>";
}
}

    ?>
    
    </div>

  <nav class="navbar navbar-fixed">
      <div class="container"> <!-- occupies entire width when "fluid" is used -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a id="lg" class="navbar-brand" href="homepage.php"><strong>TOPS</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

          <ul class="nav navbar-nav">

            <?php 

            if (!isset($_SESSION["name"])) {
              echo "<li><a href='homepage.php'>Home</a></li>
              <li><a href='shop.php'>Shop</a></li>";
            } else {
                if ($_SESSION["role"] == "admin") {
                  echo "<li><a href='homepage.php'>Home</a></li>

              <li><a href='product_category.php'>Categories</a></li>
              <li><a href='product_items.php'>Items</a></li>
              <li><a href='user_profile.php'>Users</a></li>
              <li><a href='salesNorders.php'>Orders and Sales</a></li>";



                } else {
                  echo "<li><a href='homepage.php'>Home</a></li>
              <li><a href='shop.php'>Shop</a></li>";

              // <li><a href='myAccount.php'>My Account</a></li>";
                }
            }


             ?>

             
              
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <?php 
              if(!isset($_SESSION["name"])){
                echo "<li><a style.display='block' style='width:auto' href='registerloginform.php'><span class='glyphicon glyphicon-log-in'></span>&nbsp;Log in</a></li>
                <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp; Cart";
                if(isset($_SESSION["item_count"])){
                echo "<span class='badge'>".$_SESSION["item_count"]."</span>";
                } else {

                }

              } else {
                if ($_SESSION["role"] == "admin") {
                  echo "<li><a style.display='block' style='width:auto' href='logout.php'><span class='glyphicon glyphicon-log-out'></span>&nbsp;Log out</a></li>";
            }else {
              echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>&nbsp;Log Out</a></li>
              <li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span>&nbsp; Cart";
            if(isset($_SESSION["item_count"])){
                echo "<span class='badge'>".$_SESSION["item_count"]."</span>";
                } else {

                }
            }
          }
                ?>

              


 
            </a></li>
                
            </ul>

        </div>

    </div>

  </nav>
  

  



 
