<?php
include 'database.php';

$subscription_id = $_POST['sub_id'];

$exec_command = escapeshellcmd("/bin/python3 list_resources_azure.py $subscription_id");
$import_resources = shell_exec($exec_command);

$sql=("select * from `tag_store` where account_id='$subscription_id'");
$result = $db->query($sql);
      if ($result->num_rows > 0) {
		  echo "successfull";		  	

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$db->close();


?>