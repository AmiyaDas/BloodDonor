<?php
include_once("connection.php");

$query = "select distinct city from hospital order by city;";

$query_res=mysqli_query($con,$query);

$tb="";

while($row = mysqli_fetch_assoc($query_res))
{
	$tb=$tb."<option>".$row['state']."</option>";
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Finf Donors</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="titl">Find Donors</div>
		<div class="login-form">
			<div class="sign-up-htm">
				<form method="POST" action="hospital2.php">
					<div class="group">
					<label for="state" class="label">Select Your City</label>
					<select id="city" type="text" class="input" name="city">
						<option value="null">--Select City--</option>
				<?php
				echo $tb;
				?>
					</select>
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Next">
				</div>
				</form>
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
