<?php
//connect to the database
include 'db_config.php' ;
$categoryId = $_POST['categoryId'];

$sql = "SELECT * FROM items where category_id = '$categoryId ' ";
$result = mysqli_query($conn, $sql);
$data = "<div class='row'>";

if(mysqli_num_rows($result) > 0){
  $counter = 0;
    while($row = mysqli_fetch_assoc($result)){
      $counter = $counter+1;
       $id =$row["id"];
       $data .= "
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
}
echo $data;
?>
