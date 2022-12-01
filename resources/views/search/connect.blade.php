<?php

	function getTableData($query){
	$servername = "localhost"; // 127.0.0.1
	$username = "root";
	$password = "12345";
	$databaseName = "mydb";
	$conn = new mysqli($servername, $username, $password,$databaseName);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	$res = array();
	$result = $conn->query($query);
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			$res[] = $row;
		}
	} 
	else{
		echo "0 results";	
	}
	// var_dump($conn);
	$conn->close();
	return $res;
	}
?>
