<?php
$name = addslashes($_POST["name"]);
$role = addslashes($_POST["role"]);
$email = addslashes($_POST["email"]);
$password = addslashes($_POST["password"]);
$avatar = addslashes($_POST["avatar"]);
$home_address = addslashes($_POST["home_address"]);
$alternative = addslashes($_POST["alternative_address"]);
$mobile_number = addslashes($_POST["mobile_number"]);
$credit_card_no = addslashes($_POST["credit_card_no"]);


include 'db_config.php';

//insert Record
$sql = "INSERT INTO users(name, role, email, password, avatar, home_address, alternative_address, mobile_number, credit_card_no)
VALUES('$name', '$role', '$email', '$password', '$avatar', '$home_address', '$alternative_address', '$mobile_number', '$credit_card_no')";

if(mysqli_query($conn, $sql)){
	header("location: addUser.php?add=yes");


} else{
	echo "Failed" .$sql. "<br>" . mysqli_error($conn);
}

?>