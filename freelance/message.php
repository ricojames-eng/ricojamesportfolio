<?php
	require_once('config.php');
    require_once('classes/DBConnection.php');

    $M_DATE = date('m/d/Y', time());
    $M_NAME = $_POST['firstname'];
    $M_ADDRESS = $_POST['address'];
    $M_CONTACT = $_POST['contact'];
    $M_ORG = $_POST['organization'];
    $M_TYPE = $_POST['softwaretype'];
    $M_SIZE = $_POST['softwaresize'];
    $M_MESSAGE = $_POST['subject'];

    $sql = "INSERT into message (M_DATE, M_NAME, M_ADDRESS, M_CONTACT, M_ORG, M_TYPE, M_SIZE, M_MESSAGE) VALUES ('$M_DATE', '$M_NAME', '$M_ADDRESS', '$M_CONTACT', '$M_ORG' ,'$M_TYPE', '$M_SIZE', '$M_MESSAGE')";

    if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

	header('location: index.php');
?>