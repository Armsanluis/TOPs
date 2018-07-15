<?php

//connection details
include("db_connection.php");
$user_name = $_POST['user_name'];
$email_add = $_POST['email_add'];
$pass_word = sha1($_POST['pass_word']);

$query = "INSERT INTO users(name, email, password)
VALUES('$user_name', '$email_add', '$pass_word')";

$result = mysqli_query($con, $query);
if(!$result){
	exit(mysqli_error($con));
}else {
	echo "Congratulations! You may continue shopping.";
}

?>