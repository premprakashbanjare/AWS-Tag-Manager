<?php
include 'database.php';
$tag_name = strtolower($_POST['tag_name']);
$tag_type = strtolower($_POST['tag_type']);
$resource_type=strtolower($_POST['resource_type']);

$sql=("delete from tag_template where tag_type='$tag_type' and tag_name='$tag_name' and resource_type='$resource_type'");
// echo $sql;

//check if col is der in tag_tore dn execute....................
if ($db->query($sql) === TRUE) {
  $delete_col_tag_store = "ALTER TABLE tag_store DROP `$tag_name`";
  #print_r($delete_col_tag_store);
  #echo "<script>{alert('delete_col_tag_store');}</script>";
  if($db->query($delete_col_tag_store)===TRUE){
$list_columns ="desc tag_store;";
$list_column_names=$db->query($list_columns);




$sql_update="update tag_store set compliance='Compliant' where";
while($row = $list_column_names->fetch_assoc()){
$sql_update=$sql_update." `".($row['Field'])."` IS NOT NULL OR ";

}
$str_update= preg_replace('/\W\w+\s*(\W*)$/', '$1', $sql_update);
$str_update=$str_update.";";
$db->query($str_update);
#echo $str;
    echo "Record deleted successfully";
  }
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();

?>

