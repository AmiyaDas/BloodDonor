<?php
include_once("connection.php");

$res= $_POST['id'];
$bg=  $_POST['bg'];
$city= $_POST['city'];
$date= $_POST['date'];

//$suc=$res.",".$bg.",".$city.",".$date;
$suc = "Try Again, Fill all details!";
if(!empty($res) and !empty($bg) and !empty($city))
{
$query = "INSERT INTO donor(uid, bgroup, lastdonated, city) VALUES ('$res','$bg','$date','$city');";
if (mysqli_query($con,$query)){
	$suc="Thank you!";
}
else
{
	$suc="Somethings wrong";
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
    <title>Signed up</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="login-form">
			<div class="sign-up-htm"><br/>
				<div class="group">
					<?php
					echo $suc;
					?><br/>Your donor account is created successfully.
				</div>
				<br/>
				<div class="group">
					<input type="submit" class="button" onclick="location.href='login.php'" value="Login now">
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
