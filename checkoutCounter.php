<?php
session_start();
?>

<?php
include "navbarUser.php";
?>
  <div class="row">
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-md-4 col-lg-4" id="orderDtails">
      <h1>My Order Details</h1>

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
                              <td>$product_name</td>
                              <td id='price$product_id'> $price</td>
                              <td>$quantity</td>
                              <td id='subTotal$product_id'>$subTotal</td>
                              
                          </tr>";
                    }
                }
}

$data .="</tbody></table>
              <hr>
              <h3 align='right'>Total: &#x20B1; <span id='grandTotal'>$grand_total </span><br><hr></h3>";

echo $data;
?>
    
</div>
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-md-4 col-lg-4" id="orderDtails">
  <h1>My Details</h1>
  <?php 
  $dataDetails = "<table class='table table-striped table-responsive'>
    <thead>
      <tr>
        <th>Name/Username</th>
        <th>Email Address</th>
        
      </tr>
    </thead>
    <tbody>";

     $dataDetails .=
        "<tr>
            <td>".$_SESSION["name"]."</td>
            <td>".$_SESSION["email"]."</td>
        </tr>
        </tbody></table>
              <hr>";
    // foreach($_SESSION["name"] as $name => $email) {
    // $sql = "SELECT * FROM users where name = '$name' ";
    //           $resultDetails = mysqli_query($conn, $sql);
    //             if(mysqli_num_rows($resultDetails) > 0){
    //                 while($row = mysqli_fetch_assoc($result)){
    //                   $name = $row["name"];
    //                   $email = $row["email"];

                                
                       
                //     }
                // }
// }

    echo $dataDetails;

     ?>

</div>
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
      <h1>Mode of Payment</h1>
      <p>Credit card: Visa, Mastercard</p>
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
    <div class="col-xs-12 col-md-4 col-lg-4" id="submission" action="submission_action.php" method="post">
      <button type="submit" name="cancel_button">Cancel</button>
      <button type="submit" name="purchase_button" id="purchaseButton">Purchase</button>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-4"></div>
</div>



<?php 
include "footer.php";
?>