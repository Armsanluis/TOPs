<?php 

session_start();
if (!isset($_SESSION['name'])){
			header('location: homepage.php');
			} else {
				if($_SESSION['role'] != 'admin'){
					header('location: homepage.php');
				} else {
					header('location: dashboard.php');
				}
			}
 ?>