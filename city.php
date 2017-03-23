<?php
include_once("connection.php");

$stat= $_POST['state'];

//$con=mysqli_connect("localhost","root","","blood");

$query = "select distinct city_name from city where state='$stat' order by city_name;";

$query_res=mysqli_query($con,$query);

$tb="";

while($row = mysqli_fetch_assoc($query_res))
{
	$tb=$tb."<option>".$row['city_name']."</option>";
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Select City</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="titl">Select City</div>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="state" class="label">Cities</label>
					<select id="state" type="text" class="input" name="city">
						<option>--Select City--</option>
						<?php
						echo $tb;
						?>
					</select>
				</div>
				<div class="group">
					<input type="button" class="button" value="Next" onclick="location.href='city.php'">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label><a href="index.php">Back</a></label>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
