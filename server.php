<?php  
// session_start();
$username = "";
$role = "";
$errors = array();
$db = mysqli_connect('localhost', 'root','P@ssw0rd1','tagsync');
 if(isset($_POST['login_user'])){
 	$username = mysqli_real_escape_string($db,$_POST['username']);
 	$password = mysqli_real_escape_string($db,$_POST['password']);

 	if (count($errors)==0) {
 		$password =md5($password);
 		$query = "SELECT * FROM user_reg where username='$username' and password ='$password'";
 		$results = mysqli_query($db,$query);
// 		echo $query;
//                echo mysqli_num_rows($results);
 		if(mysqli_num_rows($results)==1){
 			$_SESSION['username'] = $username;
 			$_SESSION['success']  = "you are logged in";
 			header('location:TagSync_home.php');
 		}	
 		else{
 			array_push($errors,"Wrong credentials");
 	    }	
 	}
 

 }
?>