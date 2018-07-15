<?php
session_start();

if (isset($_SESSION["name"])) {
  include "navbar.php";
} else {
  header('location: homepage.php');
}
?>

<div class="container-fluid" id="cartpage">
  <div class="row">
    <div class="checkout_counter">
      <form action="checkout_counter_action.php" method="post">
        <div class="submission" id="orderDtails">
          <div class="col-lg-7">
            

      <h3>My Personal Details</h3>
  <?php


     

  $dataDetails = "<table class='table table-striped table-responsive'>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Home Address</th>
        <th>Alternative Address</th>
        <th>Mobile Number</th>
        <th>Credit Card Number</th>
        
      </tr>
    </thead>
    <tbody>";

 
  $name = $_SESSION['name'];
  include 'db_config.php';

  $sql = "SELECT * FROM users WHERE name = '$name'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)){
      $counter = $counter + 1;
       $id = $row["id"];
      $name = $row["name"];
      $email = $row["email"];
      $home_address = $row["home_address"];
      $alternative_address = $row["alternative_address"];
      $mobile_number = $row["mobile_number"];
      $credit_card_no = $row["credit_card_no"];
    }
  }
  
      $dataDetails .=
        "<tr>
            <td>$name</td><input hidden name='name' value='$name'>
            <td>$email</td>
            <td>$home_address</td>
            <td>$alternative_address</td>
            <td>$mobile_number</td>
            <td>$credit_card_no</td>
        </tr>
        </tbody></table>
              <hr>";

    echo $dataDetails;

     ?>

  <hr>

</div>
          <div class="col-lg-1"></div>
          <div class="col-lg-4" id="order1">
            <h3>My Order Details</h3>

              <?php
              include "db_config.php";
               $data = "<table class='table table-striped table-responsive'>
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Sub-Total</th>
                      </tr>
                    </thead>
                    <tbody>";

                $grand_total = 0;
                foreach($_SESSION['cart'] as $product_id => $quantity) {
                    $sql = "SELECT * FROM items where id = '$product_id' ";
                              $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                      $product_name = $row["product_name"];
                                      $product_desc = $row["product_description"];
                                      $price = $row["price"];
                                                
                                        //For computing the sub total and grand total
                                        $subTotal = $quantity * $price;
                                        $grand_total += $subTotal;

                                        $data .=
                                          "<tr>
                                              <td>$product_name</td><input hidden name='product_name' value='$product_name'>
                                              <td id='price$product_id'> $price</td><input hidden name='price' value='$price'>
                                              <td>$quantity</td><input hidden name='quantity' value='$quantity'>
                                              <td id='subTotal$product_id'>$subTotal</td><input hidden name='subTotal' value='$subTotal'>
                                              
                                          </tr>";
                                    }
                                }
                }

                $data .="</tbody>
                </table>
 
                              <h5 'text-right'><strong>Total:</strong> &#x20B1; <span id='grandTotal'>$grand_total </span><input hidden name='grand_total' value='$grand_total'></h5>";

                echo $data;
                ?>
                <button type="submit" name="cancel_button" class="align-right">Cancel</button>
                <button type="submit" name="purchase_button" id="purchaseButton">Purchase</button>
                <br>
                <br>
              </div>

<div class="col-xs-12 col-md-4 col-lg-1"></div>
    </form>

  </div> 
</div>
</div>
</div>

<?php 
include "footer.php";
?>