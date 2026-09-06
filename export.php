<?php  
include 'database.php';
 
$sql = "SELECT * FROM `tag_store`"; 
$setRec = $db->query($sql);   
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . ",";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
$query="select DISTINCT column_name from Information_schema.columns where Table_name='tag_store' ORDER BY ordinal_position";
$run=mysqli_query($db,$query);
$data=mysqli_fetch_assoc($run);
$heading=$data["COLUMN_NAME"].",";
while($data=mysqli_fetch_assoc($run)){
    $heading=$heading.$data["COLUMN_NAME"].",";
}   
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=sheet.csv");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($heading) . "\n" . $setData . "\n";  
 ?>
