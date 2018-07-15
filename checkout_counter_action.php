<?php 

session_start(); 

include 'db_config.php';

$name = $_SESSION['name'];

function referenceNumberGenerator() {
  $ref_number = '';

  $source = array ('0', '1', '2' , '3', '4', '5', '6', '7',
                '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');

            for ($i = 0; $i < 16; $i++) {
              $index = rand (0, 15); //Generate random Number

              $ref_number = $ref_number . $source[$index];
            }

            $today = getdate(); //seconds since Unix Epoc

            return $ref_number . '-'. $today[0];
    
}

date_default_timezone_set('Asia/Manila');
$mysqltime = date("Y-m-d H:i:s");

$reference = referenceNumberGenerator();
$orderUserId = $_SESSION["id"];
$_SESSION["reference"] = $reference;
$_SESSION["mysqltime"] = $mysqltime;
$new_order_id = $reference;


$sql1 = "SELECT * FROM users WHERE name = '$name'";

$result1 = mysqli_query($conn, $sql1);

	if(mysqli_num_rows($result1)>0){
		while($row = mysqli_fetch_assoc($result1)){
			$id = $row["id"];
			
		}
	}

// $sql2 = "INSERT INTO transaction_order (user_id, transaction_date, reference_number, total_price) VALUES ('$id', '$mysqltime', '$new_order_id', '$grand_total')";

mysqli_query($conn, $sql2);

// var_export( referenceNumberGenerator() );
$invoice_number = mysqli_insert_id($conn);

foreach($_SESSION['cart'] as $product_id => $quantity) {
	    $sql3 = "SELECT * FROM items where id = '$id'";
	    $result3 = mysqli_query($conn, $sql3);
	    
	    
	        if(mysqli_num_rows($result3) > 0){
	            while($row = mysqli_fetch_assoc($result3)){
		                // $product_id = $product_id ;	
	                $product_name = $row["product_name"];
	                $price = $row["price"];
	                                
	                //For computing the sub total and grand total
	                $subTotal = $quantity * $price;
	                $grand_total += $subTotal;
	                

	                	                
	        	}

	        		// $sql4 = "INSERT INTO checkout_counter(items_id, quantity, reference_number) VALUES ('$product_id', '$quantity', '$new_order_id')";

	        			$sql4 = "INSERT INTO checkout(user_id, items_id, quantity, subtotal_price, total_price, transaction_date, reference_number) VALUES ('$id', '$product_id', '$quantity', '$subTotal', '$grand_total', '$mysqltime', '$new_order_id')";
	                

		        	if (mysqli_query($conn, $sql4)) {
	                   
    			    }  else {
				  			echo "Failed" .  $sql . "<br>" . mysqli_error($conn);
						}
			} //


}
	$sql2 = "INSERT INTO transaction_order(user_id, total_price, transaction_date, reference_number ) VALUES ('$id', '$grand_total', '$mysqltime', '$new_order_id')";

		        	if (mysqli_query($conn, $sql2)) {
	                   
    			    }  else {
				  			echo "Failed" .  $sql . "<br>" . mysqli_error($conn);
						}

$sql5 = "UPDATE orders SET grandtotal = '$grand_total' WHERE reference_number = '$reference'";
$result5 = mysqli_query($conn, $sql5);

unset($_SESSION['cart']);

header("location: confirmation.php");




	





 ?>

 