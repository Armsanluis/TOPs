<?php 
include "navbar.php";
?>



	<div class="container">



<?php

$id = $_GET["id"];
$name = $_GET["name"];


include "db_config.php";

$sql = "SELECT * FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div id='tableuser' style='overflow-x:auto;'>
  <table>
    <tr>
      <th>Username</th>
      <th>Role</th>
      <th>Email</th>
      <th>Password</th>
      <th>Home Address</th>
      <th>Alternative Address</th>
      <th>Mobile Number</th>
      <th>Credit Card Number</th>
    </tr>
    <tr>
      <td>$row[name]</td>
      <td>$row[role]</td>
      <td>$row[email]</td>
      <td>$row[password]</td>
      <td>$row[home_address]</td>
      <td>$row[alternative_address]</td>
      <td>$row[mobile_number]</td>
      <td>$row[credit_card_no]</td>
    </tr>
  </table>
</div>";
	}

}

mysqli_close($conn);
?>
</div>