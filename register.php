<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/register.css">
    
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
	<div id="registerheader">
		<div id="r1">
			<div id="header" style="margin-bottom: 50px;"><h1 style="color: grey; position: absolute; margin-bottom: 20px;">Donar Registration Form</h1></div>
		<ul style="position: absolute;">
			<li>We are glad that you want to signup as a blood donar.</li>
			<li>Before signup please check up the <strong>eligibility</strong> requirements.</li>
			<li>Once you are a registered donar,you will have the privilige to donate  blood.</li>
			<li>Your information is safe with us.Please check the <span><a href="#">Privacy policy</a></span> for details.</li>
		</ul>
		</div>
		<div id="r2">
			<img src="img/signup.jpg">
		</div>
	</div>
	<div id="container2">
		<h2 style="margin: 20px; color: #6C4343">Personal Information</h2>
		<div id="r3">
			<form name="myform" onsubmit="return validate()" method="post" action="externalregister.php">
			<table id="registerform">
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Donar Full Name</p></div></th>
					<th>
						<div id="registerform_input"><input type="text" name="username" placeholder="Enter full name" id="temp">
							<div id="error_username" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>

				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Gender</p></div></th>
					<th>
						<div id="registerform_input">
							<select id="temp1" name="sex">
								<option value="gender">Select</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							<div id="error_sex" style="margin-right: -511px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Blood Group</p></div></th>
					<th>
						<div id="registerform_input">
							<select id="temp1" name="bloodgroup">
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
							<div id="error_bloodgroup" style="margin-right: -533px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>
				</tr>
				
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Date of Birth(YYYY/MM/DD)</p></div></th>
					<th><div id="registerform_input"><input type="text" name="birth" placeholder="Enter your date of birth" id="temp"></div></th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Frequency</p></div></th>
					<th>
						<div id="registerform_input">
							<select id="temp1" name="frequency">
								<option value="freq">Select</option>
								<option value="available">Available Donar</option>
								<option value="notavailable">On need basis</option>
							</select>
							<div id="error_frequency" style="margin-right: -533px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Email</p></div></th>
					<th><div id="registerform_input"><input type="text" name="email" placeholder="Enter your valid email" id="temp" style="margin-top: 0px;"></div>
						<div id="error_email" style="margin-right: -517px; margin-top: -23px; color: red; font-weight: bold;"></div>
					</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Mobile No</p></div></th>
					<th><div id="registerform_input"><input type="text" name="mobile" placeholder="+880" id="temp">
							<div id="error_mobile" style="margin-right: -526px; margin-top: -31px; color: red; font-weight: bold;"></div>
					</div>
				</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Country</p></div></th>
					<th>
						<div id="registerform_input">
							<select id="temp1" name="country">
								<option value="select">Select</option>
								<option value="male">Bangladesh</option>
							</select>
							<div id="error_country" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*City</p></div></th>
					<th>
						<div id="registerform_input">
							<select id="temp1" name="city">
								<option value="select">Select</option>
								<option value="DHAKA">Dhaka</option>
								<option value="CHITTAGONG">Chittagong</option>
								<option value="RAJSHAHI">Rajshahi</option>
								<option value="KHULNA">Khula</option>
								<option value="SYLHET">Sythet</option>
								<option value="BARISAL">Barisal</option>
								<option value="RANGPUR">Rangpur</option>
							</select>
							<div id="error_city" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
						</div>
					</th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*District</p></div></th>
					<th><div id="registerform_input"><input type="text" name="district" placeholder="Enter your district" id="temp">
							<div id="error_district" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
					</div></th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Last time donation</p></div></th>
					<th><div id="registerform_input"><input type="text" name="lasttimedonation" placeholder="YYYY/DD/MM" id="temp">
							<div id="error_lasttimedonation" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
					</div></th>
				</tr>

			</table>
		</div>
		<h2 style="margin: 20px; color: #6C4343">Login Information</h2>
		<div id="r4">
			<table id="registerform">
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Username</p></div></th>
					<th><div id="registerform_input"><input type="text" name="username1" placeholder="Enter your unique username" id="temp">
						<div id="error_username1" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
					</div></th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Password</p></div></th>
					<th><div id="registerform_input"><input type="password" name="password" placeholder="Enter your password" id="temp"></div></th>
				</tr>
				<tr>
					<th><div id="registerform_th"><p style="font-weight: normal;">*Retype Password</p></div></th>
					<th><div id="registerform_input"><input type="password" name="password2" placeholder="Re-enter your password" id="temp">
						<div id="error_password" style="margin-right: -484px; margin-top: -31px; color: red; font-weight: bold;"></div>
					</div></th>
				</tr>
			</table>
		</div>
		<h2 style="margin: 20px; color: #6C4343">Terms & Conditions</h2>
		<div id="r4">
			<input type="radio" name="termsandcondition" id="termsandcondition" style="float: left;margin-top: 4px;margin-right:4px;margin-left: 192px;"><p style="font-weight: bold;margin-left:8px;font-family: arial;font-size: 18px;">I full agree with the terms and condition</p>

			<input type="submit" name="submit" value="REGISTER" id="registersubmit" onclick="validateemail(document.myform.email)&validatemobile(document.myform.mobile)==1">
		</div>
		</form>
	</div>

	<?php include('footer.php') ?>
</body>
</html>



<style type="text/css">
	#registerheader{
		width: 1200px;
		height: 282px;
		margin: 20px auto;
	}
	#registerheader ul li{
		font-size: 16px;
		margin-top: 25px;   
		margin-left: 40px;
		font-family: arial;
	}
</style>
<script src="js/registerform.js"></script>
<script>
	function validate(){
		var username=document.forms["myform"]["username"].value;
		var sex=document.forms["myform"]["sex"].value;
		var frequency=document.forms["myform"]["frequency"].value;
		var bloodgroup=document.forms["myform"]["bloodgroup"].value;
		var country=document.forms["myform"]["country"].value;
		var city= document.forms["myform"]["city"].value;
		var district=document.forms["myform"]["district"].value;
		var lasttimedonation=document.forms["myform"]["lasttimedonation"].value.length;
		var username1=document.forms["myform"]["username1"].value;
		var username1len=document.forms["myform"]["username1"].value.length;
		var password=document.forms["myform"]["password"].value;
		var password2=document.forms["myform"]["password2"].value;
		//var email=document.forms["myform"]["email"].value;
		if(username==""){
			error_username.textContent="*Name is required";
			//username.focus();
			alert("name required");
			return false;
		}

		else{
			error_username.textContent="";
		}
		if(sex=="gender"){
			error_sex.textContent="*Please Select Gender";
			//sex.focus();
			alert("select gender");
			return false;
		}
		else{
			error_sex.textContent="";
		}
		if(bloodgroup=="select"){
			error_bloodgroup.textContent="*Select Blood Group";
			alert("Select Blood Group");
			return false;
		}
		else{
			error_bloodgroup.textContent="";
		}
		if(frequency=="freq"){
			error_frequency.textContent="*Please Select Something";
			//frequency.focus();
			alert("select frequency");
			return false;
		}
		else{
			error_frequency.textContent="";
		}
		if(country=="select"){
			error_country.textContent="*Select Country";
			return false;
		}
		else{
			error_country.textContent="";
		}
		if(city=="select"){
			error_city.textContent="*Select City";
			return false;
		}
		else{
			error_city.textContent="";
		}
		if(district==""){
			error_district.textContent="*Please enter district";
			return false;
		}
		else{
			error_district.textContent="";
		}
		if(username1==""){
			error_username1.textContent="Enter your username";
			return false;
		}
		if(username1len>10){
			error.username.textContent="*username have atmost 10 character";
			return false;
		}
		else{
			error_username1.textContent="";
		}
		if(password!=password2 || password==""){
			error_password.textContent="*Password donot match";
			return false;
		}
		else{
			error_password.textContent="";
		}
		if(document.getElementById('termsandcondition').checked){
			return true;
		}
		else{
			alert("PLease accept terms and condition");
			return false;
		}

		
	}
	function validateemail(inputemail){
			var emailformat= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(inputemail.value.match(emailformat)){
				document.myform.email.focus();
				error_email.textContent="";
				return true;
			}
			else{
				alert("Invalid Email address");
				error_email.textContent="*Invalid Email address";
				return false;
			}
		}
	function validatemobile(inputmobile){
		var mobilenumber=document.forms["myform"]["mobile"].value.length;
		var numberformat= /^[0-9]+$/;
		if(mobilenumber==11 && inputmobile.value.match(numberformat)){
			document.myform.mobile.focus();
			//document.write(inputmobile.length);
			error_mobile.textContent="";
			return true;
		}
		else{
			alert("Invalid mobile number");
			error_mobile.textContent="*Invalid Mobile number";
			return false;
		}
	}
</script>