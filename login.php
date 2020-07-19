<?php 
include ('include/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
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
		<div id="wrapper-2">
			<img src="img/appointment.jpg">
		</div>
		<div id="wrapper-2_1">
			<div id="wrapper-2_1_a">
				<div>
					<h1 style="text-align: center; background-color: red;opacity:.7;height: 50px; line-height: 50px; color: white; font-family: verdana">
						SIGN IN
					</h1>
				</div>
				<div id="login-form">
					<div id="login-form1">
						<form id="login" name="loginform" method="POST" action="userlogin.php">
							<label for="email">Username*</label><br>
							<input type="text" placeholder="Email or Username" name="username" id="email" style="width: 250px; height:30px;text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff; margin-top: 10px;margin-bottom: 22px; font-size: 15px;"><br>
							<label for="email">Password*</label>
							
							<input type="password" name="password" id="password" placeholder="password" style="width: 250px; height:30px;text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff; margin-top: 10px;font-size: 15px;"><br>
							<a href="#" id="forgot">forgot password?</a><br>
							<input type="submit" name='submitbtn' value="SIGN IN" id="signin">
						</form>
						<div style="padding: 3px; position: center; margin: 22px;">
							<?php
							if(isset($_SESSION['error'])){
								echo $_SESSION['error'];
								unset($_SESSION['error']);
							}

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php include('footer.php') ?>
</body>
</html>




<style>
	input[type="radio"]{
		margin-left:58px;
		border: 1px solid black;
		color: white;
		-webkit-appearance: none;
		padding: 1.5em;
	}
	input[type="radio"]:checked {
  		background: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///////yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==) no-repeat center center;
  		background-size: 9px 9px;
	}
	#login-form1{
	margin: auto;
	width: 258px;
	height: 300px;
	margin-top: 10px;
	font-weight: bold;
	}
	#login-form{
	background-color: #DF4242;
	color:white;
	width: 600px;
	height: 300px;
	position: absolute;
	}
	#forgot{
		list-style: none;
		font-size: 14px;
		float:right;
		text-decoration: none;
		padding: 3px; 
		color: #F9F2F1;
	}
	#forgot:hover{
		color: black;
	}
	#signin{
		width: 100px;
		height: 35px;
		margin-left:33%;
		border-radius: 8px 8px 8px 8px;
		font-size: 13px;
		background-color: white;
		color: black;
		margin-top: 19px;
	}
	#signin:hover{
		background-color: #DF4242;
		color: white;
		cursor: pointer;
	}
</style>