<?php
include 'database.php';
$id=$_POST['id_new'];
$sql = "SELECT * FROM tag_store where id=$id";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);
$i=1;
$data ='<div class="form-group">
			    <div class="row">';
foreach($row as $key=>$value){

	if ($key=='id' || $key =='compliance') {
		
	}else{
		if ($i%3==0) {
			$data.='<div class="col-md-4"><label>' .$key. '</label>
			        	<input type="text" class="form-control" value="' .$value. '" name="' . $key . '">
			        </div>			       
			    </div>
			</div><div class="form-group">
			    <div class="row">';
		}else{
			$data.='<div class="col-md-4"><label>' .$key. '</label>
			        	<input type="text" class="form-control" value="' .$value. '" name="' . $key . '">
			        </div>';
		}
		
		$i++;
	}	
}
echo $data;

?>

