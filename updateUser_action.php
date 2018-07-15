<?php
$id = $_POST["id"];
$name = $_POST["name"];
$role = $_POST["role"];
$email = $_POST["email"];
$password = $_POST["password"];
$home_address = $_POST["home_address"];
$alternative = $_POST["alternative_address"];
$mobile_number = $_POST["mobile_number"];
$credit_card_no = $_POST["credit_card_no"];



echo $id;

include 'db_config.php';
$sql = "UPDATE users SET name = '$name', role = '$role', email = '$email', password = '$password', home_address = '$home_address', alternative_address = '$alternative_address', mobile_number = '$mobile_number', credit_card_no = '$credit_card_no' WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
	echo "Record Updated";
	header("location: user_profile.php");
} else {
	echo "Failed";
	header("location: user_profile.php");
}


?>