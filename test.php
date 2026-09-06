<?php  
include 'database.php';
 

$query="select DISTINCT column_name from Information_schema.columns where Table_name='tag_store' ORDER BY ordinal_position";
$run=mysqli_query($db,$query);
$data=mysqli_fetch_assoc($run);
$heading=$data["COLUMN_NAME"]."\t";
while($data=mysqli_fetch_assoc($run)){
  echo $data["COLUMN_NAME"];
    $heading=$heading.$data["COLUMN_NAME"]."\t";
}   
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=sheet.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($heading) . "\n" . $setData . "\n";  
 ?>