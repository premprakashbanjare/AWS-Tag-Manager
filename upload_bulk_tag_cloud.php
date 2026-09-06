<?php



$bulktag_upload_filename = $_POST['bulktag_upload_filename'];


$exec_command = escapeshellcmd("/bin/python3 upload_tag_cloud.py $bulktag_upload_filename");
$import_resources = shell_exec($exec_command);



echo $import_resources;




?>