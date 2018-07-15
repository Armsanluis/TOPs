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

	<div class="container" id="topS">
		<button class="btn btn-primary"><a href="addProductItems.php" style="text-decoration: none; color: white;">Add New Product Items</a></button>
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
                                <h5><a href='item1.php?id=$row[id]'>$row[product_name]</a></h5>
                              
                                <a href='item1.php?id=$row[id]'><span class='glyphicon glyphicon-eye-open'></span></a> 
      <a href='updateProductItems.php?id=$row[id]'><span class='glyphicon glyphicon-edit'></span></a> 
      <a href='delProductItems.php?id=$row[id]'><span class='glyphicon glyphicon-trash'></span></a> 
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
                url:"show_items1.php",
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


