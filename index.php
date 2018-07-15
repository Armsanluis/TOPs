<?php 
session_start();
//create session variable that will hold the products
$_SESSION["cart"] = array();
//create a session variable for item counter
$_SESSION["item_count"] = 0;

?>
<?php
include 'navbar.php';
?>
	<div class="container" id="topS">
		<div class="row">
			<div class="col-xs-12 col-lg-12">
				<ul class="list-inline">
					<?php
              //connect to the database
              include 'db_config.php' ;
              $sql = "SELECT * FROM categories ";
              $result = mysqli_query($conn, $sql);
              $data = "";
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row["id"];
                  $description = $row["description"];
                  $data .= "<li><a href='#' onclick='showCategories($id)' 
                            class='list-inline-item'>$description</li></a>";
                }
              }
              echo $data;
            ?>
				</ul>
			</div>
		</div>
		
	</div>

	<div class="container" id="products">
		<div class="row">
                <?php
                    //connect to the database
                    include 'db_config.php' ;

                    $sql = "SELECT * FROM items";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                      $counter = 0;
                      while($row = mysqli_fetch_assoc($result)){
                        $counter = $counter+1;
                        $id =$row["id"];
                        echo "
                          <div class='col-xs-6 col-lg-4'>
                            <div class='thumbnail'>
                              <img src='$row[image]' alt=''>
                              <div class='caption'>
                                <h5><a href='item.php?id=$row[id]'>$row[product_name]</a></h5>
                                <p>&#8369; $row[price]</p>
                              </div>
                            </div>
                          </div>";
                      }
                    };
                  ?>
            </div>
          </div><!-- Display Products Ends here -->
      </div>

    </div>

<script>

  
    function showCategories(categoryId){
      var categoryId = categoryId
        //alert(categoryId);
            $.ajax({
                url:"show_items.php",
                method:"POST",
                data:
                    {
                      categoryId: categoryId
                    },
                dataType:"text",
                success:function(x){
                $("#products").html(x);
            }
          })
    }


</script>



<?php
include 'footer.php';
?>

