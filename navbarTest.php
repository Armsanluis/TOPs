
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TOPS</title>

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

		      		
		      		
		      	</ul>

		      	<ul class="nav navbar-nav navbar-right">

        			<li><a onclick="document.getElementById('loginForm').style.display='block'" style="width:auto;" href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a></li>

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
	

	<div id="loginForm" class="modal">
  
  <form class="modal-content animate" action="login_action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('loginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/user_avatar1.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <h3>Log In</h3>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit" id="loginbtn">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me</label><br>
    	<button type="button" onclick="document.getElementById('loginForm').style.display='none'" class="cancelbtn">Cancel</button><br>
      <span class="psw">Forgot <a href="#">password?</a></span><span class="text-right">Not yet a member? <a href="register.php" style="width:auto;">Sign Up</span></a>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('loginForm');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



 
