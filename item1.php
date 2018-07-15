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


