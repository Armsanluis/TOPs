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
    include 'navbar.php';
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

<div class="container-fluid" id="fade1">

      <div class="row" id="fadecontent">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">
        <img src="assets/hydratorsOils.png">        
      </div>
      <div class="col-lg-1"></div>
      <div class="class-lg-3">
        <h1 class="text-center">Hydrators and Oils</h1>
        <h3 class="text-center">Skin feels taut? Or chalky?</h3>
        <h3 class="text-center">Or simply itchy? Try our hydrators.</h3>
        <h5><a href="shop.php">Go To Shop</a></h5>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>


<div class="container-fluid" id="fade2">

      <div class="row" id="fadecontent">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">
        <h1 class="text-center">Molecules</h1>
        <h3 class="text-center">Add-on skincare line</h3>
        <h3 class="text-center">for added skin benefits.</h3>
        <h5><a href="shop.php">Go To Shop</a></h5>
     
      </div>
      <div class="col-lg-1"></div>
      <div class="class-lg-3">
        <img src="assets/moreMolecules.png">   
        </div>
        <div class="col-lg-2"></div>
      </div>

</div>

<div class="container-fluid" id="fade1">

      <div class="row" id="fadecontent">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">
        <img src="assets/Retinoids1.png">        
      </div>
      <div class="col-lg-1"></div>
      <div class="class-lg-3">
        <h1 class="text-center">Retinoids</h1>
        <h3 class="text-center">Say bye bye to those</h3>
        <h3 class="text-center">pesky acnes and wrinkles.</h3>
        <h5><a href="shop.php">Go To Shop</a></h5>
        </div>
        <div class="col-lg-2"></div>
      </div>

</div>

<div class="container-fluid" id="fade2">

      <div class="row" id="fadecontent">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">
        <h1 class="text-center">Direct Acids</h1>
        <h3 class="text-center">For a clearer and brighter,</h3>
        <h3 class="text-center">and fresh new skin.</h3>
        <h5><a href="shop.php">Go To Shop</a></h5>        
      </div>
      <div class="col-lg-1"></div>
      <div class="class-lg-3">
        <img src="assets/directAcids.png">
        </div>
        <div class="col-lg-2"></div>
      </div>

</div>

<div class="container-fluid" id="fade1">

      <div class="row" id="fadecontent">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">
        <img src="assets/vitaC.png">        
      </div>
      <div class="col-lg-1"></div>
      <div class="class-lg-3">
        <h1 class="text-center">Vitamin C</h1>
        <h3 class="text-center">For a brighter, glowing,</h3>
        <h3 class="text-center">and healthy skin.</h3>
        <h5><a href="shop.php">Go To Shop</a></h5>
        </div>
        <div class="col-lg-2"></div>
      </div>

</div>

<div class="container"  id="fade1">
  <div class="row" id="fadecontent">
    <div class="col-lg-6">
      <h1>About TOPS</h1>
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
    </div>
    <div class="col-lg-6">
      <img src="assets/directacids.jpg" class="img-fluid img-responsive">
    </div>
</div>
</div>

<div class="container" id="fade1">
  <div class="row" id="fadecontent">
    <!-- <div class="col-lg-4"></div> -->
    <div class="col-lg-6">
      <h3>Contact Us</h3>
          <p><i class="fa fa-map-marker fa-fw fa-2x"></i> Makati City</p>
          <p><i class="fa fa-phone fa-fw fa-2x"></i> +63 917-123-4567</p>
          <p><i class="fa fa-envelope fa-fw fa-2x"> </i> TOPS@mail.com</p>
          <br>
    </div>
    <div class="col-lg-6">
      
          <h3>Lets get in touch. Send me a message:</h3>
          <br>
        <form action="/action_page.php" target="_blank">
          <p><input type="text" placeholder="Name" style="width: 100%;" required name="Name"></p>
          <p><input type="text" placeholder="Email" style="width: 100%;" required name="Email"></p>
          <p><input type="text" placeholder="Subject" style="width: 100%;" required name="Subject"></p>
          <p><input type="text" placeholder="Message" style="width: 100%; height: 40px;" required name="Message"></p>
          <p>
            <button type="submit">
              <i class="fa fa-paper-plane"><a href="#">SEND MESSAGE</a></i>
            </button>
          </p>
        </form>
      </div>
    </div>
</div>    



<!--   <div class="animated">
    <span>♫</span>
    <h3>Number Two</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis lacinia est. Nulla malesuada massa orci, vitae placerat lorem pharetra a.</p>
  </div>
  <div class="animated">
    <span>☂</span>
    <h3>Number Three</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis lacinia est. Nulla malesuada massa orci, vitae placerat lorem pharetra a.</p>
  </div>
</div> -->

    <script>


    	$('#carouselFade').carousel();

        $(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $('.scroll-animations .animated').each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('fadeInLeft');
      }
    });
  });
});
    </script>
<?php
include 'footer.php';
?>