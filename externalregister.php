<?php
session_start();
if(isset($_POST['submit'])){
	include('include/config.php');
$donarname=htmlentities($_POST["username"]);
$gender=htmlentities($_POST["sex"]);
$bloodgroup=htmlentities($_POST["bloodgroup"]);
$status=htmlentities($_POST["frequency"]);
$email=htmlentities($_POST["email"]);
$mobile=htmlentities($_POST["mobile"]);
$country=htmlentities($_POST["country"]);
$city=htmlentities($_POST["city"]);
$district=htmlentities($_POST["district"]);
$lasttimedonation=htmlentities($_POST["lasttimedonation"]);
$username=htmlentities($_POST["username1"]);
$password=htmlentities($_POST["password"]);
$password2=htmlentities($_POST["password2"]);
//echo $mobile.$country.$city.$district.$lasttimedonation.$username;
if($password2==$password){
	$_SESSION['user']=$username;
	//echo $password;
	//$password=md5($password2);
	$row="SELECT * FROM `userinformation` WHERE username='$username'";
	$r=mysqli_query($conn,$row);
	$row1="SELECT * FROM `userinformation` WHERE email='$email'";
	$r1=mysqli_query($conn,$row1);
	if(@mysqli_num_rows($r)==0 && mysqli_num_rows($r1)==0){
		$sql="INSERT INTO `userinformation`(`id`, `donarfullname`, `gender`, `bloodgroup`, `email`, `mobileno`, `city`, `district`, `lasttimedonation`, `username`, `password`) VALUES ('','$donarname','$gender','$bloodgroup','$email','$mobile','$city','$district','$lasttimedonation','$username','$password')";
		$query=mysqli_query($conn,$sql);
		$_SESSION['username']="Welcome ".$username;
		$_SESSION['welcomemessage']="Your regestration is successfull.Please Log in to view your data";
	}
	else{
		if(@mysqli_num_rows($r)>0){
			$_SESSION['username']="";
			$_SESSION['welcomemessage']="Username already exits.Try another username";
		}
		if(@mysqli_num_rows($r1)>0){
			$_SESSION["username"]="";
			$_SESSION['welcomemessage']="Email already exits.Try another email";
		}
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Online blood donation</title>
    
</head>
<body>
	<?php include ('include/header.php');?> 
	<div id="container1">
		<div id="logo">
			<img src="img/logo.png">
		</div>
		<div id="nav-bar">
			<div id="wrapper-1">
				<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="register.php">REGISTER AS DONAR</a></li>
				<li><a href="login.php">SIGN IN</a></li>
			</ul>
			</div>
		</div>
	</div>

	<div id="container2">
		<div id="wrapper2">
			<center><strong><?php echo $_SESSION['username'] ?></strong></center>
			<?php echo $_SESSION['welcomemessage'];?>
		</div>
		
	</div>
	<div class="container3">
		<div id="wrapper3">
			<div id="div1">
				<ul>
					<li><a href="index.php">WHY DONATE BLOOD</a></li>
					<li><a href="index1.php">HOW TO DONATE BLOOD</a></li>
					<li><a href="index2.php">CAN I DONATE BLOOD?</a></li>
					<li><a href="#">CONTACT US</a></li>
				</ul>
			</div>
			<div id="div2">
				<h1 style="margin-left: 25px; margin-top: 20px; ">Why Donate Blood?</h1>
				<p style="margin : 30px; font-size: 17px;">A blood donation truly is a “gift of life” that a healthy individual can give to others in their community who are sick or injured. In one hour’s time, a person can donate one unit of blood that can be separated into four individual components that could help save multiple lives.

From one unit of blood, red blood cells can be extracted for use in trauma or surgical patients. Plasma, the liquid part of blood, is administered to patients with clotting problems. The third component of blood, platelets, clot the blood when cuts or other open wounds occur, and are often used in cancer and transplant patients. Cryoprecipitated anti-hemophilic factor (AHF) is also used for clotting factors.

In a recent study supported by the National Blood Foundation (TRANSFUSION 2002;42:122S), more than 5,000 individuals who were current blood donors at the time or who had given blood in the past were asked why they donate blood. Nearly three-quarters of the respondents said that they give blood to help others. Respondents also said that giving blood makes them feel good about themselves; supports their local communities and hospitals; supports their community culture; and “pays back” society for the times when they or their families have needed blood transfusions in the past.</p>
			</div>
			</div>
		</div>
		<?php include('footer.php') ?>
</body>
</html>


<style type="">
	#container2{
		width: 1000px;
		height: 200px;
		margin: auto;
		margin-top: 30px;
	}
	#wrapper2{
		width: 500px;
		height: 100px;
		border: 2px solid white;
		margin:auto;
		background-color: #D8CFCF;
		font-weight: bold;
		text-align: center;
		line-height: 100px;
		box-shadow: 0px 10px 5px #888888;
	}
</style>