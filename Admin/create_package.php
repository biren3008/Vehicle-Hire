<?php

	include 'connection.php';
	
	$image = $_POST['p_image'];
	$name = $_POST['p_name'];
	$type = $_POST['p_type'];	
	$facility = $_POST['facility_image'];
	$date = $_POST['p_date'];
	$price = $_POST['p_price'];

	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: add_package.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`package` (`ID` ,`Image` ,`Name` ,`Type`,`Facility`,`Date`,`Price`)
					VALUES (NULL,'$image','$name','$type','$facility','$date','$price')") or die(mysql_error());
		echo "User has been Added";
		header('Location: add_package.php');
	}

?>