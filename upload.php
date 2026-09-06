<?php
$target_dir = "./tag_file_upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
echo $target_file;
$msg = "";
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
$msg = "Successfully uploaded";
}else{
$msg = "Error while uploading";
}
echo '<script type="text/javascript">window.onload=function(){alert("hi");}</script>';

?>