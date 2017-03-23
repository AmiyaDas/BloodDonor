<?php
include_once("connection.php");

$em= $_POST['email'];
$pswd= $_POST['pswd'];
//$con=mysqli_connect("localhost","root","","blood");

if(!empty($em) and !empty($pswd))
{
$query = "Select * from user where email='$em';";
$qres=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($qres);
$id=$row['uid'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Home</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>
 
<body>
  <div class="login-wrap">
	<div class="login-html">
		<img src="img/lifeline2.png" height="80"><br/>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
				<?php
				if($row['password']==$pswd){
					echo "<input type=\"submit\" class=\"button\" value=\"Find Blood Donors\" onclick=\"location.href='finddonor.php?id=".$id."'\"><br/>";
					echo "<input type=\"submit\" class=\"button\" value=\"Find Nearby Hospitals\" onclick=\"location.href='#'\"><br/>";
					echo "<input type=\"submit\" class=\"button\" value=\"Find Nearby Blood Banks\" onclick=\"location.href='#'\"><br/>";
					echo "<input type=\"submit\" class=\"button\" value=\"Profile\" onclick=\"location.href='profile.php?id=".$id."'\">";
					echo "<br/><center><a class=\"button\" href=\"whatsapp://send?text=Donate blood to save lives!\" data-action=\"share/whatsapp/share\">Share on whatsapp</a></center>";
				
				}
				else{
					echo "Wrong password, try again.<br/>";
					echo"<br/><input type=\"submit\" class=\"button\" value=\"Log in\" onclick=\"location.href='login.php'\"><br/>";
				}
				?>
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
