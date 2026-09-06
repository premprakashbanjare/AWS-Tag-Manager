<?php
include 'database.php';
$resource_type=($_POST['resource_type']);
$tag_name = ($_POST['tag_name']);
$tag_type = ($_POST['tag_type']);

$check = mysqli_query($db, "select * from tag_template where tag_type='$tag_type' and tag_name='$tag_name' and resource_type='$resource_type'");
$checkrows = mysqli_num_rows($check);


if ($checkrows > 0) {
	$msg = "Tag already exits";	
	echo $msg;
} else {
	$sql = "INSERT INTO tag_template (`resource_type`,`tag_type`,`tag_name`) VALUES ('$resource_type','$tag_type','$tag_name')";
	$col = $tag_name;	    
	mysqli_query($db,$sql);
	$sql_tag_store = "ALTER TABLE tag_store ADD COLUMN `".$col."` VARCHAR(256)";
	// echo "$sql_tag_store";
	mysqli_query($db,$sql_tag_store);
	
	$sql = "select * FROM tag_store";
	$result = mysqli_query($db,$sql);
	$i = 1;
	$where_condition='';
	$rowNum = mysqli_num_fields($result);
	while ($i < $rowNum)		{
		$meta = mysqli_fetch_field_direct($result, $i);
		if ($i==$rowNum-1) {
			$where_condition.= "`".$meta->name."`>'' ";
		}else{
			$where_condition.="`".$meta->name."`>'' OR ";
		}

		$i = $i + 1;
	}
	$sql1 = "update tag_store set compliance='Non-compliant' where ".$where_condition;
	// echo "$sql1";
	if (mysqli_query($db,$sql1)) {
		echo "success";
		
	}else{
		echo "Error";
	}

	$db->close();
}
?>