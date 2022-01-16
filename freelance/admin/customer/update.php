<?php
	require_once('../../config.php');
    require_once('../../classes/DBConnection.php');


    $STATUS = $_POST['updatestatus'];


    $sql = "UPDATE message SET M_STATUS = '$STATUS'";

    if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

	header('location: ../?page=customer');
?>