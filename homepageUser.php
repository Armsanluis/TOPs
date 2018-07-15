<?php 
session_start();
//create session variable that will hold the products
if(!isset($_SESSION["cart"])){
$_SESSION["cart"] = array();
}

//create a session variable for item counter
if(!isset($_SESSION["item_count"])){
$_SESSION["item_count"] = 0;
}

?>
<?php
include 'navbarUser.php';
?>
   <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">  
                <div class="carousel-caption">
                  <h3>Effective product doesn't have to be expensive</h3>
                  <a href="shop.php">Shop now</a>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>Clinical formulations with integrity</h3>
                  <a href="shop.php">Shop now</a>
                </div>
            </div>
            <div class="item"> 
                <div class="carousel-caption">
                  <h3>Only the needed ingredients are included in every drop.</h3>
                  <a href="shop.php">Shop now</a>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
    	$('#carouselFade').carousel();
    </script>
<?php
include 'footer.php';
?>