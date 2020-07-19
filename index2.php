<?php 
include ('include/config.php');
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
						<table id="tableform">
							<tr>
								<th><label for="bloodgroup">Blood Group</label></th>
								<th>
									<select id="option">
							<option value="selectall">-----Select-----</option>
							<option value="opositive">O+</option>
							<option value="onegitive">O-</option>
							<option value="Apositive">A+</option>
							<option value="ABpositive">AB+</option>
							<option value="ABnegetive">AB-</option>
									</select>
								</th>
							</tr>
							<tr>
								<th><label for="selectcountry">Select Country</label></th>
								<th>
										<select id="option">
							<option value="selectall">-----Select-----</option>
							<option value="bangladesh">Bangladesh</option>
										</select>
								</th>
							</tr>
							<tr>
								<th><label for="selectdivision">Select City</label></th>
								<th>
										<select id="option">
							<option value="selectall">-----Select-----</option>
							<option value="dhaka">Dhaka</option>
							<option value="ctg">Chittagong</option>
							<option value="rajshahi">Rajshahi</option>
							<option value="khulna">Khula</option>
							<option value="sylhet">Sythet</option>
							<option value="barisal">Barisal</option>
							<option value="rangpur">Rangpur</option>
										</select>
								</th>
							</tr>
							<tr>
								<th><label for="selectdistrict">Select District</label></th>
								<th>
										<select id="option">
							<option value="selectall">-----Select-----</option>
							<option value="dhaka">Dhaka</option>
							<option value="ctg">Chittagong</option>
							<option value="rajshahi">Rajshahi</option>
							<option value="khulna">Khula</option>
							<option value="sylhet">Sythet</option>
							<option value="barisal">Barisal</option>
							<option value="rangpur">Rangpur</option>
										</select>
								</th>
							</tr>
						</table>
							<input type="submit"  value="Submit" id="submit">
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
					<li><a href="index2.php">CAN I DONATE BLLOD?</a></li>
					<li><a href="#">CONTACT US</a></li>
				</ul>
			</div>
			<div id="div2">
				<h1 style="margin-left: 25px; margin-top: 20px;">Can I donate blood?</h1>
				<p style="margin : 30px; font-size: 17px;">To ensure the safety of blood donation for both donors and recipients, all volunteer blood donors must be evaluated to determine their eligibility to give blood. The final determination will be made on the day of the donation at the blood drive or blood donation center. If you were deferred from donating in the past, you may be able to donate again.
					<br><br><br><br>
					1.Be in good general health and feeling well*<br><br>
						2.Be at least 17-years-old in most states<br><br>
							3.Weigh at least 110 lbs.
						</p>
			</div>
			</div>
		</div>
	<?php include('footer.php') ?>
</body>
</html>
						
				
						
						