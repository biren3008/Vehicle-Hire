<?php

	include 'connection.php';
	
	$country_name = $_POST['country_name'];
	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: add_country.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`country` (`ID` ,`Country Name`)
					VALUES (NULL,'$country_name')") or die(mysql_error());
		echo "User has been Added";
		header('Location: add_country.php');
	}

?>