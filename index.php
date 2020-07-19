<?php 
include ('include/config.php');
if(isset($_SESSION['user'])){
	unset($_SESSION['user']);
}
//$_SESSION['bloodgroup']="";
?>
<?php



?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
				<li><a href="login.php">LOG IN</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="container2">
		<div id="wrapper-2">
			<img src="img/appointment.jpg">
		</div>
		<div id="wrapper-2_1">
			<div id="wrapper-2_1_a">
				<div>
					<h1 style="text-align: center; background-color: red;opacity:.7;height: 50px; line-height: 50px; color: white; font-family: verdana">
						FIND BLOOD DONARS
					</h1>
				</div>
				<div id="search-form">
					<div id="search-form1">
						<form id="bloodsearch" name="search" method="get" action="searchresult.php"  onsubmit="return validate()">
						<table id="tableform">
							<tr>
								<td><label for="bloodgroup">Blood Group</label></td>
								<td>
									<select id="option" name="bloodgroup">
							<option value="">-----Select-----</option>
							<option value="1">O+</option>
							<option value="2">O-</option>
							<option value="7">A+</option>
							<option value="8">A-</option>
							<option value="3">AB+</option>
							<option value="4">AB-</option>
							<option value="5">B+</option>
							<option value="6">B-</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label for="select country">Select Country</label></td>
								<td>
										<select id="option">
							<option value="selectall">-----Select-----</option>
							<option value="bangladesh">Bangladesh</option>
										</select>
								</td>
							</tr>
							<tr>
								<td><label for="select division" >Select City</label></td>

								<td>
										<select id="citydd" name="cityvalue" onchange="change_city()">
										<option value="">-----Select-----</option>

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
								<td><label for="select district">Select District</label></td>
								<td>
									<div id="district" >
										<select id="district1" name="districtvalue">
										<option value="">-----Select-----</option>
							
										</select>
									</div>
								</td>
							</tr>
						</table>
						
							<input type="submit" value="Submit" id="submit">
						</form>
					</div>
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

From one unit of blood, red blood cells can be extracted for use in trauma or surgical patients. Plasma, the liquid part of blood, is administered to patients with clotting problems. the third component of blood, platelets, clot the blood when cuts or other open wounds occur, and are often used in cancer and transplant patients. Cryoprecipitated anti-hemophilic factor (AHF) is also used for clotting factors.

In a recent study supported by the National Blood Foundation (TRANSFUSION 2002;42:122S), more than 5,000 individuals who were current blood donors at the time or who had given blood in the past were asked why they donate blood. Nearly three-quarters of the respondents said that they give blood to help otders. Respondents also said that giving blood makes them feel good about themselves; supports their local communities and hospitals; supports their community culture; and “pays back” society for the times when they or their families have needed blood transfusions in the past.</p>
			</div>
			</div>
		</div>
		<?php include('footer.php') ?>


<script type="">
	
function change_city(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","ajax.php?city="+document.getElementById("citydd").value,false);
	xmlhttp.send(null);
	document.getElementById("district").innerHTML=xmlhttp.responseText;
}
</script>


</body>
</html>

<script type="">
	function validate(){
		var bloodgroup=document.forms["search"]["bloodgroup"].value.length;
		var cityvalue=document.forms["search"]["cityvalue"].value.length;
		if(bloodgroup==0){
			alert("SELECT BLOOD GROUP");
			return false;
		}
		if(cityvalue==0){
			alert("SELECT CITY PLEASE");
			return false;
		}
		else{
			return true;
		}
	}
</script>
						
				
						
