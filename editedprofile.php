<?php
include_once("connection.php");

$name= $_POST['name'];
$em=  $_POST['email'];
$phon= $_POST['phone'];
$id=$_POST['id'];

$suc = "Try Again";

$query = "update profile set name='$name', email='$em', phone='$phon' where uid=$id;";
	if (mysqli_query($con,$query)){
		$suc="Updated Successful";
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
