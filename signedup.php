<?php
include_once("connection.php");

$name= $_POST['name'];
$id=  $_POST['email'];
$pswd= $_POST['pwd'];
$sex= $_POST['sex'];
$phon= $_POST['phon'];
$donr= $_POST['donor'];

//$con=mysqli_connect("localhost","root","","blood");

$suc = "Try Again";

if(!empty($name) and !empty($id) and !empty($pswd))
{
$q1="select max(uid) as count from user;";
$qres=mysqli_query($con,$q1);
$row=mysqli_fetch_assoc($qres);
$res=$row['count'];
if($res==null)
	$res=1;
else
	$res=$res+1;
$query = "INSERT INTO profile (uid, email, name, sex, phone, donor) VALUES ($res, '$id', '$name', '$sex', '$phon', upper('$donr'));";
$q2="INSERT INTO user(uid, email, password) VALUES ($res,'$id','$pswd')";
	if (mysqli_query($con,$query)){
		$suc="Sign up successful";
	}
	if(mysqli_query($con,$q2)){
		$suc="Welcome ".$name.", Sign up successful!";
	}
	else
	{
		$suc="Somethings wrong";
	}*/
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
