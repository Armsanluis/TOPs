<?php

//connection details

$email = $_POST['email'];
$pass_word = sha1($_POST['psw']);

include 'db_config.php' ;


$users = "SELECT * FROM users WHERE email = '$email' AND password = '$pass_word'";

$result = mysqli_query($conn, $users);

		if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)){
		//echo $row["name"];

		session_start();
		$_SESSION["id"] = $row["id"];
		$_SESSION["name"] = $row["name"];
		$_SESSION["email"] = $row["email"];
		$_SESSION["role"] = $row["role"];

		if (!isset($_SESSION['name'])){
			header('location: homepage.php');
			} else {
				if($_SESSION['role'] != 'admin'){
					header('location: homepage.php');
				} else {
					header('location: dashboard.php');
				}
			}


		

		// header("location:homepage.php");

	}
} else {
	echo "<script>alert('Login Failed')</script>";
	echo "registerloginform.php";
}


?>