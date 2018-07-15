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


  <div class="container">

  <?php

if(isset($_GET["del"])){
  echo "<div class='alert alert-danger'>
  <strong>Record was successfully deleted</strong>
  </div>";
};
?>
    <h1 style="text-align: center;">Transaction Records</h1>
    <hr>
    <?php
    //connect to the database
    include 'db_config.php';

    $sql = "SELECT * FROM transaction_order";
    $result = mysqli_query($conn, $sql);
    echo "<table class='table table-bordered'>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Total Price</th>            
            <th>Date of Transaction</th>
            <th>Reference Number</th>
            <th>Action</th>            
          </tr>
        </thead>
        <tbody>";
    if(mysqli_num_rows($result) > 0 ){  //mysqli_num_rows ---- is used to check if row is empty or not
      $counter = 0;
      while ($row = mysqli_fetch_assoc($result)) {  //mysqli_fetch_assoc - returns all 
        $counter = $counter+1;
        echo "<tr>";
          echo "<td>".$counter."</td>";
          echo "<td>" . $row["user_id"] . "</td>";
          echo "<td>" . $row["total_price"] . "</td>";
          echo "<td>" . $row["transaction_date"] . "</td>";
          echo "<td>" . $row["reference_number"] . "</td>";
          
          echo "<td><a href='admin_userorder.php?reference_number=$row[reference_number]' class='btn btn-success btn-md' role='button'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;view</a></td>";

        echo "</tr>";
      }
      
    } else {
      echo "No Records Found";
    }
      echo "</tbody></table>";

    mysqli_close($conn);
    ?>

    

  </div>







