<?php 
include "navbar.php" 
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-8">
			<h3>Contact Us</h3><br>
      		<p><i class="fa fa-map-marker fa-fw fa-2x"></i> Makati City</p>
      		<p><i class="fa fa-phone fa-fw fa-2x"></i> +63 917-123-4567</p>
      		<p><i class="fa fa-envelope fa-fw fa-2x"> </i> TOPS@mail.com</p>
      		<br>
      		<h3>Lets get in touch. Send me a message:</h3>
      		<br>
		    <form action="/action_page.php" target="_blank">
		      <p><input type="text" placeholder="Name" style="width: 50%;" required name="Name"></p>
		      <p><input type="text" placeholder="Email" style="width: 50%;" required name="Email"></p>
		      <p><input type="text" placeholder="Subject" style="width: 50%;" required name="Subject"></p>
		      <p><input type="text" placeholder="Message" style="width: 50%;" required name="Message"></p>
		      <p>
		        <button type="submit">
		          <i class="fa fa-paper-plane"></i> SEND MESSAGE
		        </button>
		      </p>
		    </form>
    	</div>
    </div>
</div>      
   

<?php 
include "footer.php" ?>