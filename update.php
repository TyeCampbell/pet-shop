<?php

$servername = "localhost";
$username = "root";
$password = "pwdpwd";
$dbname = "pet_shop";


$db = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	echo 'Could not connect: ' . mysql_error();
} else {

	function clean_data($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$groomingid = clean_data($_POST['aptgroomingid']);
	$firstname = clean_data($_POST['aptfirstname']);
	$lastname = clean_data($_POST['aptlastname']);
	$address = clean_data($_POST['aptaddress']);
	$city = clean_data($_POST['aptcity']);
	$state = clean_data($_POST['aptstate']);
	$zip = clean_data($_POST['aptzip']);
	$phonenumber = clean_data($_POST['aptphonenumber']);
	$email = clean_data($_POST['aptemail']);
	$petname = clean_data($_POST['aptpetname']);
	$petbirthday = clean_data($_POST['aptpetage']);
	$neutered = clean_data($_POST['aptneutered']);
	$pettype = clean_data($_POST['aptpettype']);
	$breed = clean_data($_POST['aptbreed']);


	if ($neutered == "true") {
		$neutered = "Yes";
	} else {
		$neutered = "No";
	}

	if ($petbirthday == "select") {
		$petbirthday = "Not Specified";
	}

	if ($pettype == "Cat") {
		$breed = ""; 
	}

	$sql = "UPDATE grooming SET Address = '$address', Breed = '$breed', City = '$city', Email = '$email', FirstName = '$firstname', LastName = '$lastname', NeuteredOrSpayed = '$neutered', PetBirthday = '$petbirthday', PetName = '$petname', PetType = '$pettype', PhoneNumber = '$phonenumber', State = '$state', Zip = '$zip' WHERE GroomingID = '$groomingid'";

	if ($db->query($sql) === TRUE) {
		echo "success";	
	} else {
		echo "Error: " . $sql . "<br>" . $db->error;
	}

	$db->close();
}


?>