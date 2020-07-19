<?php
include ('include/config.php');
session_start();
mysqli_select_db($conn,'Blood Donation System');
if(isset($_SESSION['name'])){

}
else{
	header('Location:index.php');
}				
					//echo $name;
					//echo $gender;
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donarprofile.css">
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
				<li><a href="donarhome.php">HOME</a></li>
				<li><a href="donarprofile.php"><?php  echo $_SESSION['name'];?></a></li>
				<li><a href="donareditprofile.php">Edit Profile</a></li>
				<li><a href="donarlogout.php">LOG OUT</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div class="container2">
		<h1><u><?php echo $_SESSION['name']." Information"; ?></u></h1>
		<?php
					
					
					
		?>
		<div id="wrapper2">
			<div id="profilepic">
				<img src="img/userimage.png">
			</div>
			<div id="profileinfu">
				
				<div id="a">
					<strong>DONAR NAME</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;text-transform: uppercase;">
					<?php
					$name=$_SESSION['name'];

					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s",$result['donarfullname']);
							}

						}
					?>
					</strong>
					
				</div>
				<div id="a">
					<strong>GENDER</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;text-transform: uppercase;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s",$result['gender']);
							}

						}
					?>
					</strong>
					
				</div>
				<div id="a">
					<strong>EMAIL</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s",$result['email']);
							}

						}
					?>
					</strong>
					
				</div>
				<div id="a">
					<strong>MOBILE NO</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("0%s",$result['mobileno']);
							}

						}
					?>
					</strong>
				</div>
				<div id="a">
					<strong>BLOOD GROUP</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left; text-transform: uppercase;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								$id=$result['bloodgroup'];
								//printf("%s",$result['bloodgroup']);
							}
							$sql="SELECT * FROM `bloodgroup` WHERE id='$id'";
							$query_run=mysqli_query($conn,$sql);
							if($query_run){
								while($result1=mysqli_fetch_assoc($query_run)){
									printf("%s",$result1['bloodgroup']);
								}
							}

						}
					?>
					</strong>
				</div>
				<div id="a">
					<strong>CURRENT LOCATION</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left; text-transform: uppercase;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s,%s",$result['district'],$result['city']);
							}

						}
					?>
					</strong>
				</div>
				<div id="a">
					<strong>LAST TIME DONATION</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s",$result['lasttimedonation']);
							}

						}
					?>
					</strong>
				</div>
				<div id="a">
					<strong>USERNAME</strong>
				</div>
				<div id="b">
					<strong style="line-height: 41px; float: left;">
					<?php
					$name=$_SESSION['name'];
					$sql="SELECT * FROM `userinformation` WHERE username='$name'";
					$run_query=mysqli_query($conn,$sql);
					if($run_query){
							while($result=mysqli_fetch_assoc($run_query)){
								printf("%s",$result['username']);
							}

						}
					?>
					</strong>
				</div>
				
			</div>
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
