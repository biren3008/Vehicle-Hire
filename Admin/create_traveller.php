<?php

	include 'connection.php';
	
	$name = $_POST['t_name'];
	$email = $_POST['t_email'];
	$password = $_POST['t_password'];	
	$contact_information = $_POST['contact_information'];
	$country = $_POST['country'];
	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: add_traveller.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`traveller` (`ID` ,`Name` ,`Email` ,`Password`,`Contact Information`,`Country`)
					VALUES (NULL,'$name','$email','$password','$contact_information','$country')") or die(mysql_error());
		echo "User has been Added";
		header('Location: add_traveller.php');
	}

?>