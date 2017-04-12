<?php
include_once("connection.php");

$pswd= $_POST['pwd'];
$uid= $_POST['uid'];

$suc = "Try Again";

if(!empty($uid) and !empty($pswd))
{
$query = "update user set password='$pswd' where uid='$uid';";
if(mysqli_query($con,$query)){
		$suc="Password successfully reset!";
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
		<img src="img/lifeline2.png" height="80"><br/>
		<div class="login-form">
			<div class="sign-up-htm"><br/>
				<div class="group">
					<?php
					echo $suc;
					?>
				</div>
				<div class="group">
					<input type="submit" class="button" onclick="location.href='index.php'" value="Login now">
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
