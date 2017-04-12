<?php
include_once("connection.php");

$name= $_POST['name'];
$em=  $_POST['email'];
$phon= $_POST['phon'];

$tb="";
$bx="";

if(!empty($name) and !empty($em) and !empty($phon))
{

$query = "select * from profile where name='$name' and email='$em' and phone=$phon;";

$query_res=mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_res))
{
	$tb="Welcome ".$row['name'];
	$bx="<label for=\"pass\" class=\"label\">Enter New Password</label><input id=\"pass\" name=\"pwd\" type=\"password\" class=\"input\"><input name=\"uid\" type=\"hidden\" value=".$row['uid'].">";
}
}
if($tb==""){
	$tb="Oops";
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
					echo $tb;
					?>
				</div>
				<form action="reset.php" method="post">
				<div class="group">
					<?php
					echo $bx;
					?>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset">
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
