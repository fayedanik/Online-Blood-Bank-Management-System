<?php
session_start();
$servername="localhost";
$username="Admin";
$password="12345";
$db="Blood Donation System";
$conn=mysqli_connect($servername,$username,$password,$db);

?>
<?php

if ((isset($_POST['submitbtn']) && isset($_POST['username']) && isset($_POST['password']))) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username) && !empty($password)){
		$query = "SELECT * FROM userinformation WHERE username='$username' AND password='$password' ";
		$query_run=mysqli_query($conn,$query);
		if(mysqli_num_rows($query_run)==1){
			$_SESSION['name']=$username;
			header('Location:donarhome.php');
		}
		else{
			$_SESSION['error']="Wrong username or password";
			//echo $_SESSION['msg'];
			header('Location:login.php');
			exit;
			
		}
	}
	else{
		header('Location:login.php');
	}
}	//mysqli_free_result($results);
?>