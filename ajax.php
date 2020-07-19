
<?php
include('include/config.php');
$city=$_GET["city"]; 
$sql="SELECT * FROM district_tbl WHERE city_id=$city";
$query_run=mysqli_query($conn,$sql);
	?> <form method="post" action="searchresult.php"><?php
	echo "<select id='option1' name='districtvalue'>";
	while($result=mysqli_fetch_assoc($query_run)){
		echo "<option>";echo $result["district"]; echo "</option>";
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
	border: 1px solid red;
	border-radius: 2px;
	width: 253px;
	height: 34px;
	margin-left: -3px;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 8px;
	margin-top: -1px;
	cursor: pointer;
	color: black;
	padding: 0px;
	}

</style>