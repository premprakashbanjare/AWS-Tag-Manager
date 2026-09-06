<?php
include 'database.php';
unset($_POST['tagArray']['update_tags_viewer']);
$formData = (json_encode($_POST['tagArray']));//pass this array of form key n values to python file 
$rowID = $_POST['rowID'];
$rowData = '';
#print_r($formData);
#print_r("*********************"); 
#$result = shell_exec('python3 ./update.py ' . escapeshellarg(json_encode($_POST['tagArray'])));
#echo $result;
$exec_command = escapeshellcmd("python3 update_tag.py '$formData'");
$createtags = shell_exec($exec_command);
#print_r($createtags);

#print_r($formData); //key as label name value as the value of the label
$compliance_Status = 'Compliant';
foreach ($_POST['tagArray'] as $key => $value) {
            $rowData .= "`".$key . '`= "' . $value . '",';
        if (empty($value)){ 
        	#print_r($key);
            $compliance_Status = 'Non-Compliant';
        } 
    }

$data = substr_replace($rowData, "", -1);
#print_r($data);
$sql1 = "update tag_store set " . $data . " where id =" . $rowID;
#print_r($sql1);
mysqli_query($db, $sql1);

$sql1 = "update tag_store set compliance='" .$compliance_Status . "' where id =" . $rowID;
// echo $sql1;
mysqli_query($db, $sql1);
echo "Updated successfully";
?>
