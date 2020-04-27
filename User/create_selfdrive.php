<?php

	include 'connection.php';
	
	$s_car_type = $_POST['car_type'];
	$s_name = $_POST['name'];
	$s_email = $_POST['email'];
	$s_mobile_number = $_POST['mobile_number'];
	$s_pick_up_city = $_POST['pick_up_city'];
	$s_pick_up_date = $_POST['pick_up_date'];
	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: selfdrive1.php');
	}
	else{
		mysql_query("INSERT INTO `VehicleHire`.`showselfdrive` (`ID` ,`Car Type` ,`Name` ,`Email` ,`Mobile Number` ,`Pick Up City` ,`Pick Up Date`)
				VALUES (NULL,'$s_car_type','$s_name','$s_email','$s_mobile_number','$s_pick_up_city','$s_pick_up_date')") or die(mysql_error());
		echo "User has been Added";
		header('Location: show_selfdrive.php');
	}

?>