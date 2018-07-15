<?php
$id = $_GET["id"];

include("db_config.php");
$sql = "SELECT * FROM items where id = '$id'";
$result = mysqli_query($conn, $sql);
$tableDesc = "";
	while ($row = mysqli_fetch_assoc($result)) {
	$tableDesc .= <<<Thumbnil
					<div class="col-xs-12 col-lg-4">
						<div class='thumbnail'>
            				<img src='$row[image]' alt=''>
              		<div class='caption'>
                		<h5>$row[product_name]</a></h5>
                  		<p>&#8369; $row[price]</p>
                    <div class='form-group'>
                      <input class='form-control' id='quantity$id' type='number' min='1' value='1'>
                    </div>
                    <div class='form-group'>
                        <button class='btn btn-default btn-block btn-lg' role = 'button'  onclick='addToCart($id)' ><span class='glyphicon glyphicon-shopping-cart'></span>Add to Cart</button>
                    </div>
                </div>
            </div>
                	</div>

					<div class="col-xs-12 col-lg-8">
						
						<div class="desc">
							<ul class="nav nav-tabs" id="tabdescription">
								<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
								<li><a data-toggle="tab" href="#direction">Direction</a></li>
								<li><a data-toggle="tab" href="#ingredients">Ingredients</a></li>
								<li><a data-toggle="tab" href="#reviews">Reviews</a></li>
							</ul>
							<div class="tab-content">
								<div id="description" class="tab-pane active">
									<p>$row[product_description]</p>
								</div>
								<div id="direction" class="tab-pane fade">
									<p>$row[instructions]</p>
								</div>
								<div id="ingredients" class="tab-pane fade">
									<p>$row[ingredients]</p>
								</div>
								<div id="availability" class="tab-pane fade">
								<p>$row[availability]</p>
								</div>
							</div>
						</div>
					</div>
Thumbnil;
	}



?>




<?php
include 'navbar.php';
?>

<div class="container">
	<div class="row" id="productdescription">
			<?php 
			echo $tableDesc;
			 ?>
	</div>
		
</div>


<script>

	function addToCart(itemId){
      var quantity = $("#quantity"+itemId).val();
      console.log("This is item ID:" + itemId);
      console.log("This is the quantity:" + quantity);
    

          $.ajax({
              url:"add_to_cart.php",
              method:"POST",
              data:
                    {
                      item_id: itemId,
                      item_quantity: quantity
                    },
                dataType:"text",
                  success:function(data, status){
                  $('a[href="cart.php"]').html(data);
            }
          })
    }
    
</script>



<?php
include 'footer.php';
?>