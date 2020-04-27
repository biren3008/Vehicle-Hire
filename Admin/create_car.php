<?php

	include 'connection.php';
	
	$image = $_POST['c_image'];
	$type = $_POST['c_type'];
	$seating_capacity = $_POST['seating_capacity'];
	$price = $_POST['c_price'];
	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: add_car.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`car` (`ID` ,`Car Image` ,`Car Type` ,`Seating Capacity` ,`Price Per Day`)
					VALUES (NULL,'$image','$type','$seating_capacity','$price')") or die(mysql_error());
		echo "User has been Added";
		header('Location: add_car.php');
	}

?>