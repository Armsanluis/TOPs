<?php
$description = addslashes($_POST["description"]);



// echo $buildingName . "<br>";
// echo $buildingAddress . "<br>";

//Create Connection
//call db_config.php file
include 'db_config.php';

//insert Record
$sql = "INSERT INTO categories(description)
VALUES('$description')";

if(mysqli_query($conn, $sql)){
	header("location: addCategory.php?add=yes");


} else{
	echo "Failed" .$sql. "<br>" . mysqli_error($conn);
}

?>