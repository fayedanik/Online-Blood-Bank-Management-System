<?php
include('include/config.php');
session_start();
if(isset($_GET['num'])){
  $num=$_GET['num'];
  //echo $num;
 }
 else{
  $num=1;
 }
if(isset($_GET['bloodgroup']) and isset($_GET['cityvalue']) and isset($_GET['districtvalue'])){

  $bloodgroup=$_GET['bloodgroup'];
  $cityvalue=$_GET['cityvalue'];
  $district=$_GET['districtvalue'];
  //echo $bloodgroup;
  //echo $cityvalue;
  //echo $district;
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
      $lowlimit=$num*3-3;
      $lowlimit1=$lowlimit+1;
      $lowlimit2=$lowlimit+3;
      //$uplimit=$num*3;
      $sql3="SELECT * FROM `userinformation` where bloodgroup='$bloodgroup' and city='$cityname'";
      $query_run2=mysqli_query($conn,$sql3);
      $count=mysqli_num_rows($query_run2);
      $total=$count;
      $count=ceil($count/3);
      //echo $count;
      $sql="SELECT * FROM `userinformation` where bloodgroup='$bloodgroup' and city='$cityname' LIMIT $lowlimit,3";
      $query_run=mysqli_query($conn,$sql);
      $result=mysqli_num_rows($query_run);
      //echo $num;
      //echo $result;
      //echo $lowlimit;
      //echo $uplimit;
      //echo $result;
      //$sql1="SELECT * FROM `userinformation` where bloodgroup='$bloodgroup' and city='$cityname'";
      //$query_run1=mysqli_query($conn,$sql1);
      
}

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="searchresult.css">
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
				<li><a href="index.php?<">HOME</a></li>
				<li><a href="register.php">REGISTER AS DONAR</a></li>
				<li><a href="login.php">LOG IN</a></li>
			</ul>
			</div>
		</div>
	</div>
	<div id="container2" style="margin-bottom: 30px;">
		<h1 style="text-align: center; margin-bottom: 10px;">SEARCHING RESULT</h1>
    <h3 style="margin-bottom: 10px;margin-top: 50px;">Total records found:<?php echo " $total";?></h3>
    <?php if($total>0) {
      ?>
       <h4 style="margin-bottom: 10px;">Showing records:<?php echo $lowlimit1."-".$lowlimit2;?></h4>
      <?php
    }
    ?>
   
    <?php if(mysqli_num_rows($query_run)>0) {
        ?>
		<table class="table"> 
			<thead>
                <tr >
                    <th style="text-align: center;">DONAR NAME</th>
                    <th style="text-align: center;">BLOOD GROUP</th>
                    <th style="text-align: center;">MOBILE NO</th>
                    <th style="text-align: center;">DISTRICT</th>
                    <th style="text-align: center;">CITY</th>
                    <th style="text-align: center;">LAST TIME DONATION</th>
                </tr>
      </thead>
            <tbody>
            	<?php
                  if($query_run){
                  if(mysqli_num_rows($query_run)>0){
                      while($result=mysqli_fetch_assoc($query_run)){
                        ?>
                        <tr>
                              <td><?php echo $result['donarfullname']; ?></td>
                              <td>
                                <?php 
                                //echo $result['bloodgroup']; 
                                $id=$result['bloodgroup'];
                                $sql1="SELECT * FROM `bloodgroup` WHERE id='$id'";
                                $query_run1=mysqli_query($conn,$sql1);
                                if($query_run1){
                                      while($result1=mysqli_fetch_assoc($query_run1)){
                                            printf("%s",$result1['bloodgroup']);
                                             }
                                  }

                                ?>
                                
                              </td>
                              <td><?php echo "0".$result['mobileno']; ?></td>
                              <td>
                                  <?php 
                                    $districtname=$_GET['districtvalue'];
                                    if($districtname==$result['district']){
                                      ?> <div style="color:red;"> <?php echo $result['district']; ?> </div>
                                      <?php
                                    }
                                    
                                    else{
                                      echo $result['district'];
                                    }
                                    
                                  ?>
                               </td>
                              <td><?php echo $result['city']; ?></td>
                              <td><?php echo $result['lasttimedonation']; ?></td>
                        </tr>
                      <?php
                    }

                  }
                  
                }
              ?>
            </tbody>
		</table>
    <ul class="pagination modal-3" style="margin-left: -3px; margin-top: 31px;">
      <?php
      //echo $id;
        if($num>1){
          ?>
          <li><a href="searchresult.php?num=<?php echo ($num-1);?>&bloodgroup=<?php echo $bloodgroup; ?>&cityvalue=<?php echo $cityvalue; ?>&districtvalue=<?php echo $district;?>" class="prev">Prev</a></li>
          <?php
        }
        ?>
      <li><a href="searchresult.php?num=<?php echo $num; ?>&bloodgroup=<?php echo $bloodgroup; ?>&cityvalue=<?php echo $cityvalue; ?>&districtvalue=<?php echo $district;?>" class="active"><?php echo $num?></a></li>
      <?php
      if($num<$count){
        ?>
        <li><a href="searchresult.php?num=<?php echo ($num+1);?>&bloodgroup=<?php echo $bloodgroup; ?>&cityvalue=<?php echo $cityvalue; ?>&districtvalue=<?php echo $district;?>" class="next">Next</a></li>
        <?php
      }

      ?>
      
    </ul>
    <?php
  }
    else{
      ?>
        <h1 style="text-align: center;">Oppps!No result found</h1>
      <?php
    }

    ?>
	</div>

    <?php include('footer.php') ?>

	
	
</body>
</html>


<script type="text/javascript">
	alsolike(
  "xbyvmZ", "Radio Button List",
  "XJyqQr", "Loading",
  "GJpxoQ", "Simple Spinners"
);
</script>