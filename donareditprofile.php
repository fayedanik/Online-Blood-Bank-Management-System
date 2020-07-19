<?php
session_start();
$servername="localhost";
$username="Admin";
$password="12345";
$db="Blood Donation System";
$conn=mysqli_connect($servername,$username,$password,$db);
if(isset($_SESSION['name'])){

}
else{
	header('Location:index.php');
}
?>
<?php
if(isset($_POST['submit']) and isset($_POST['cityvalue']) and isset($_POST['districtvalue']) and isset($_POST['date'])){
	$cityvalue=$_POST['cityvalue'];
	$districtvalue=$_POST['districtvalue'];
	$date=$_POST['date'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$name=$_SESSION['name'];
	//echo $name;
	if(!empty($password) and !empty($password2) and !empty($cityvalue) and !empty($districtvalue) and !empty($date)){
		$sql="SELECT * FROM `userinformation` WHERE username='$name'";
		$run_query=mysqli_query($conn,$sql);
		if($run_query){
			while($result=mysqli_fetch_assoc($run_query)){
				$pass=$result['password'];
				//echo $pass;
			}
		}
		if($password2==$password and $password==$pass){
			//echo $cityvalue;
			//echo $districtvalue;
			if($cityvalue=='1'){
				$cityname="DHAKA";
			}
			else if($cityvalue=='2'){
				$cityname="CHITTAGONG";
			}
			else if($cityvalue=='3'){
				$cityname="RAJSHAHI";
			}
			else if($cityvalue=='4'){
				$cityname="KHULNA";
			}
			else if($cityvalue=='5'){
				$cityname="BARISAL";
			}
			else if($cityvalue=='6'){
				$cityname="SYLHET";
			}
			else if($cityvalue=='7'){
				$cityname="RANGPUR";
			}
			
			$sql1="UPDATE `userinformation` SET `city`='$cityname', `district`='$districtvalue',`lasttimedonation`='$date' WHERE username='$name'";
			$query_run=mysqli_query($conn,$sql1);
			header('Location:donarprofile.php');
			
		}
		else{
			$message="Wrong Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
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
    <link rel="stylesheet" type="text/css" href="donareditprofile.css">
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
	<div id="fayedanik" style="width: 980px;margin-bottom: 50px; background-color: #EFEBEA">
		<h1 style="text-align: center;"><u>EDIT INFORMATION</u></h1>
		<div id="infu">
			<div class="form-style-2">
<div class="form-style-2-heading">Provide your information</div>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table>
	<tr>
		<td><label for="field1"><span>Current City: <span class="required">*</span></span></label></td>
		<td>
		<select id="citydd" name="cityvalue" onchange="change_city()">
			<option value="selectall">----SELECT----</option>
			<?php
										$sql="SELECT * FROM city_tbl";
										$query_run=mysqli_query($conn,$sql);
										if($query_run){
											while($result=mysqli_fetch_array($query_run)){
											?>
											<option value="<?php echo $result["id"];?>"><?php echo $result["city"]; ?> </option>
											<?php
											}
										}

										?>
		</select>
		</td>
	</tr>
	<tr>
		<td><label for="field2"><span>Current District<span class="required">*</span></span></label></td>
		<td>
			<div id="district">
					<select id="district1" name="district">
							<option value="selectall">-----Select-----</option>
							
					</select>
			</div>
		</td>
	</tr>
	<tr>
		<td><label for="field3"><span>Last Time Donation <span class="required">*</span></span></label><td>
		<td>
			<input type="text" id="lasttimedonation" name="date" value="" />
		</td>
	</tr>
	<tr>
		<td><label for="field4"><span>Password<span class="required">*</span></span></label><td>
		<td>
			<input type="password" id="lasttimedonation" name="password" value="" />
		</td>

	</tr>
	<tr>
		<td><label for="field5"><span>Confirm Password<span class="required">*</span></span></label><td>
		<td>
			<input type="password" id="lasttimedonation" name="password2" value="" />
		</td>

	</tr>
</table>
	<label><span>&nbsp;</span><input type="submit" id="submit" name="submit" value="Submit" /></label>

</form>
</div>
		<center><h4 style="color:red; font-weight: bold;margin-left: -229px; margin-top: 33px;">**PLEASE UPDATE YOUR LOCATION ATLEAST ONCE**</h4></center>
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
<script type="">
function change_city(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","ajax3.php?city="+document.getElementById("citydd").value,false);
	xmlhttp.send(null);
	document.getElementById("district").innerHTML=xmlhttp.responseText;
}
</script>



<style type="text/css">
#citydd{
	border-radius: 2px;
	width: 249px;
	height: 33px;
	margin-left: 40px;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 8px;
	margin-top: 11px;
	cursor: pointer;
	color: black;
	padding: 0px;
	}
#district1{
	border-radius: 2px;
	width: 249px;
	height: 33px;
	margin-left: 0px;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 8px;
	margin-top: 2px;
	cursor: pointer;
	color: black;
	padding: 0px;
}
#district{
	border-radius: 2px;
	width: 249px;
	height: 33px;
	margin-left: 40px;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 8px;
	margin-top: 11px;
	cursor: pointer;
	color: black;
	padding: 0px;
}
#lasttimedonation{
	 margin-left: -251px;
	 width: 249px;
	 height: 30px;
	 padding: 0px;
	 margin-top: 15px;
	 background-color: #d0cdcd;
	 border-radius:5px 5px 5px 5px;
}
#submit{
	border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    margin-left: 109px;
    margin-top: 25px;
}
#submit:hover{
	background: #EA7B00;
    color: #fff;
}
</style>