<?php

$rowID=$_POST['rowID'];	
$Account_id = $_POST['Account_id'];
$user_name = $_POST['username'];
$pwd = $_POST['password'];
$secret_key = $_POST['secret_key'];
$access_key = $_POST['access_key'];
//echo "<script>{alert('$user_name');}</script>";

include 'database.php';

$sql =("UPDATE `aws_account_details` SET `account_id`='$Account_id',`username`='$user_name',`password`='$pwd',`secret_key`='$secret_key',`access_key`='$access_key' WHERE `secret_key`='$rowID'");
//echo $sql;
if ($db->query($sql) === TRUE) {

	echo "Updated successfully";

	// $msg = "New record created successfully";
	// echo "<script>{alert('$msg');}</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();

?>

