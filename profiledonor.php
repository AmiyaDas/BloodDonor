<?php
include_once("connection.php");
$id=$_GET['id'];
$did=$_GET['did'];

$query = "select * from profile where uid='$did';";
$query2 = "select * from donor where uid='$did';";

$query_res=mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_res);
$sx=$row['sex'];

if($sx=="M")
	$sx="Male";
else if($sx=="F")
	$sx="Female";
$tb="<tr><td>Name:</td><td>".$row['name']."</td></tr>	<tr><td>Email:</td><td>".$row['email']."</td></tr>";
$tb=$tb."<tr><td>Phone:</td><td>".$row['phone']."</td></tr>	<tr><td>Sex:</td><td>".$sx."</td></tr>";

if($row['donor']=="Y"){
$query_res=mysqli_query($con,$query2);
$row2 = mysqli_fetch_assoc($query_res);
$bg2=$row2['bgroup'];
switch($bg2){
	case 'ap':
	$bg="A+";
	break;
	case 'bp';
	$bg="B+";
	break;
	case 'abp';
	$bg="AB+";
	break;
	case 'op';
	$bg="O+";
	break;
	case 'an':
	$bg="A-";
	break;
	case 'bn';
	$bg="B-";
	break;
	case 'abn';
	$bg="AB-";
	break;
	case 'on';
	$bg="O-";
	break;
	default:
	$bg="Blood Group Not Defined";
}

$tb2="<tr><td>Blood Group:</td><td>".$bg."</td></tr>
	<tr><td>Last Donated:</td><td>".$row2['lastdonated']."</td></tr>
	<tr><td>Current City:</td><td>".$row2['city']."</td></tr>";
}
else{
	$tb2="You are not a blood donor. <br/>If you want to change this detail please edit your profile.";
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="img/fav1.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/fav1.ico" type="image/x-icon" />
    <title>Index</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
	
  <div class="login-wrap">
	<div class="login-html">
		<img src="img/lifeline2.png" height="80"><br/>
		<div class="login-form">
		<div class="sign-up-htm">
		<img src="img/<?php echo $bg2;?>.png" height="70" border="2"><br/><br/>
		<div class="details">
		
		<table cellpadding="2">
		<?php
		echo $tb;
		?>
		</table>
		<br/>
		<table id="donr" cellpadding="2">
		<?php
		echo $tb2;
		?>
		</table>
		<br/><br/>
		<div class="group">
		<input type="submit" class="button" onclick="location.href='#'" value="Send Request">
		</div>
		<div class="group">
		<input type="submit" class="button" onclick="location.href='#'" value="Call Donor">
		</div>
		<div class="group">
		<input type="submit" class="button" onclick="location.href='#'" value="Send Email">
		</div>
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
