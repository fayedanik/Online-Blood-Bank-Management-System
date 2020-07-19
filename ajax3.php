
<?php
include('include/config.php');
$city=$_GET["city"]; 
$sql="SELECT * FROM district_tbl WHERE city_id=$city";
$query_run=mysqli_query($conn,$sql);
	?> <form method="post" action="donareditprofile.php"><?php
	echo "<select id='option1' name='districtvalue'>";
	while($result=mysqli_fetch_assoc($query_run)){
		echo "<option >";echo $result["district"]; echo "</option>";
		//echo '<option value="">'.$result['district'].'</option>';
		//echo "<option id='option'>$result['district']</option>";
	}
	echo "</select>";
	?>
</form>
<?php

?>
<style type="text/css">
	#option1{
	border-radius: 2px;
	width: 251px;
	height: 33px;
	margin-left: 0px;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 45px;
	margin-top: 2px;
	cursor: pointer;
	color: black;
	padding: 0px;
	}

</style>
