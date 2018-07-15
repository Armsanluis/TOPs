
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Account</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="webName">
		<p id="webName"><strong>T</strong>he <strong>O</strong>rdinary <strong>P</strong>roduct <strong>S</strong>hop</p>
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
		      		<li><a href="homepage.php">Home</a></li>

		      		<li><a href="shop.php">Shop</a></li>

		      		<li><a href="about.php">About</a></li>

		      		<li><a href="contact.php">Contact</a></li>

		      		<li><a href="userAccount.php">My Account</a></li>

		      		
			      </a></li>
		      		
		      	</ul>

		      	<ul class="nav navbar-nav navbar-right">

        			<li><a style.display='block'" style="width:auto;"><img src="assets/me.jpg" alt="" style="width:24px; height:24px; border-radius:50%">&nbsp; 
              <?php 
              if(isset($_SESSION["name"])){
                echo "Welcome,  " . $_SESSION["name"];
              }
                ?>
              </a></li>
        			<li><a style.display='block'" style="width:auto;" href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</a></li>

        			<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Cart
		      		<?php 
			        if(isset($_SESSION["item_count"])){
			          echo "<span class='badge'>".$_SESSION["item_count"]."</span>";
			          } 
			          ?>
              		</a></li>
   			
      			</ul>

 		    </div>

		</div>

	</nav>
	

	

 
