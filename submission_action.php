<?php

//connection details
include 'db_config.php' ;

$user_name = $_POST["uname"];
$email_add = $_POST["email"];





	$query_submit = "INSERT INTO checkout_counter(status, product)
VALUES('$user_name', '$email_add')";


// header('location: homepage.php');
// }

?>