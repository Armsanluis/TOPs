<?php

//connection details
include 'db_config.php' ;
$user_name = $_POST['uname'];
$email_add = $_POST['eadd'];
$pass_word = sha1($_POST['pswd']);
$home_add = $_POST['home_address'];
$alt_add = $_POST['alt_address'];
$mobile_no = $_POST['mobile_number'];
$credit_number = sha1($_POST['credit_card_number']);


$user_check_query = "SELECT * FROM users WHERE name = '$user_name' OR email='$email_add'";
$result_query = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result_query);

	// if($user){
		if ($user['name'] == $user_name && $user['email'] == $email_add) {
			echo "
			<h1>Username/email already taken. Choose new username/email add. Click <a href='registerloginform.php'>here.</h1>
			";
}	
	else {
	$query = "INSERT INTO users(name, email, password,  home_address, alternative_address, mobile_number, credit_card_no)
VALUES('$user_name', '$email_add', '$pass_word', '$home_add', '$alt_add', '$mobile_no', '$credit_number')";

if(mysqli_query($conn, $query)){
header('location:homepage.php');











	

}

// header('location: homepage.php');
	}
// }

?>

