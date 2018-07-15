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
	<div class="addnewcategory">
		<button class="btn btn-primary" id="simple"><a href="addCategory.php" style="text-decoration: none; color: white;">Add New Product Category</a></button>
	</div>
  <br>




					<?php
              //connect to the database

              $sql = "SELECT * FROM categories ";
              $result = mysqli_query($conn, $sql);
              $data = "";
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row["id"];
                  $description = $row["description"];
                  $image = $row["image"];
                  $data .="<div class='col-xs-6 col-lg-4'>
                            <div class='thumbnail'>
                              <img src='$image' alt=''>
                              <div class='caption'>
                                <p>$description</p>
                                  <a href='updateCategory.php?id=$row[id]'<span class='glyphicon glyphicon-edit'></span></a>
                                  <a href='delCategory.php?id=$row[id]'><span class='glyphicon glyphicon-trash'></span></a>
                              </div>
                            </div>
                          </div>";
                }
              }
              echo $data;
            ?>



	







