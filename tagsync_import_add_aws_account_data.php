<?php
$Account_id_db=$_POST['Account_id'];
$username_db = $_POST['username'];
$password_db = $_POST['password'];
$secret_key_db = $_POST['secret_key'];
$access_key_db = $_POST['access_key'];
// echo $name2;
//echo "<script>{alert('$username_db','$Account_id_db');}</script>";

include 'database.php';
$sql=("INSERT INTO `aws_account_details` ( `account_id`, `username`, `password`, `secret_key`, `access_key`) VALUES ('$Account_id_db', '$username_db', '$password_db', '$secret_key_db', '$access_key_db')");


if ($db->query($sql) === TRUE) {

	echo "New record created successfully";

	// $msg = "New record created successfully";
	// echo "<script>{alert('$msg');}</script>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();

?>

