<?php
include_once("connection.php");

$id=$_GET['id'];
$stat= $_POST['state'];

//$con=mysqli_connect("localhost","root","","blood");
$tb="";

if($stat!="null"){
$query = "select distinct city_name from city where state='$stat' order by city_name;";

$query_res=mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($query_res))
{
	$tb=$tb."<option>".$row['city_name']."</option>";
}
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Find Donors</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="titl">Find Donors</div>
		<div class="login-form">
			<div class="sign-up-htm">
			<form method="POST" action="resdonor.php?id=<?php echo $id ?>">
				<div class="group">
					<label for="state" class="label">Select Cities</label>
					<select id="state" type="text" class="input" name="city">
						<option>--Select City--</option>
						<?php
						echo $tb;
						?>
					</select>
				</div>
				<div class="group">
					<label for="bg" class="label">Blood Group</label>
					<select id="bg" type="text" class="input" name="bg">
						<option>--Select Blood Group--</option>
						<option value="op">O+</option>
						<option value="ap">A+</option>
						<option value="bp">B+</option>
						<option value="abp">AB+</option>
						<option value="on">O-</option>
						<option value="an">A-</option>
						<option value="bn">B-</option>
						<option value="abn">AB-</option>
					</select>
				</div><br/>
				<div class="group">
					<input type="submit" class="button" value="Next"/>
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label><a href="home2.php?id=<?php echo $id ?>">Back</a></label>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
