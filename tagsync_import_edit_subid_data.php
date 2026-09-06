<?php
include 'database.php';
$id=$_POST['id_new'];
$sql = "SELECT * FROM aws_account_details where secret_key='$id'";
mysqli_query($db,$sql);
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
$i=1;
$data='';
// $data ='<div class="form-group"><div class="row">';

foreach($row as $key=>$value){
	if($i>1 && $i<7){
		if($i==5 || $i==6){
		$data.='<div class="form-group" ><label>' .$key. '</label>
		<input type="password"  class="form-control form-control-rounded" id="' . $key . '_update" value="' .$value. '" name="' . $key . '">
		</div>';	

	}
	else{
		
		$data.='<div class="form-group">
		
		<label>'.$key.'</label>
		<input type="text"  class="form-control form-control-rounded"  id="' . $key . '_update" value="' .$value. '" name="' . $key . '">
		</div>';
	
	}
	}
	$i++;
}

// $data.='</div>';
echo trim($data);

?>