<?php

	include 'connection.php';
	
	$p_name = $_POST['name'];
	$p_email = $_POST['email'];
	$p_package_type = $_POST['package_type'];
	$p_person = $_POST['person'];
	$p_mobile_number = $_POST['mobile_number'];
	
	if(!$_POST['submit']){
		echo "Please Fill Out The Form";
		header('Location: package1.php');
	}
	else{
		mysql_query("INSERT INTO `VehicleHire`.`showpackage` (`ID`,`Name`,`Email`,`Package Type`,`Person`,`Mobile Number`)
		VALUES(NULL,'$p_name','$p_email','$p_package_type','$p_person','$p_mobile_number')") or die(mysql_error());
		echo "User has been Added";
		header('Location: show_package.php');
	}

?>