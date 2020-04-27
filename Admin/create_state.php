<?php

	include 'connection.php';
	
	$state_name = $_POST['state_name'];
	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: add_state.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`state` (`ID` ,`State Name`)
					VALUES (NULL,'$state_name')") or die(mysql_error());
		echo "User has been Added";
		header('Location: add_state.php');
	}

?>
