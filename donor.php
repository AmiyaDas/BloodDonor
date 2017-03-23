<?php
include_once("connection.php");

$name= $_POST['name'];
$id=  $_POST['email'];
$pswd= $_POST['pwd'];
$sex= $_POST['sex'];
$phon= $_POST['phon'];
$donr= $_POST['donor'];

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
$query = "INSERT INTO profile (uid, email, name, sex, phone, donor) VALUES ($res, '$id', upper('$name'), '$sex', '$phon', upper('$donr'));";
$q2="INSERT INTO user(uid, email, password) VALUES ($res,'$id','$pswd')";
	if (mysqli_query($con,$query)){
		$suc="Sign up successful";
	}
	if(mysqli_query($con,$q2)){
		$suc="Welcome ".$name.", Sign up successful!!<br/>Please fill some more details.";
	}
	else
	{
		$suc="Somethings wrong";
	}
}

$query = "select distinct city_name from city order by city_name;";

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
    <title>Profile Details</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="titl">Profile</div>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<?php
					echo $suc;
					?>
				</div>
				<form method="post" action="donorfilled.php">
				<div class="group">
					<label for="user" class="label">User id</label>
					<input id="user" type="text" class="input" name="id" value="<?php echo $res; ?>" readonly>
				</div>
				<div class="group">
					<label for="bg" class="label">Blood Group</label>
					<select id="bg" type="text" class="input" name="bg">
						<option value="op">O+</option>
						<option value="ap">A+</option>
						<option value="bp">B+</option>
						<option value="abp">AB+</option>
						<option value="on">O-</option>
						<option value="an">A-</option>
						<option value="bn">B-</option>
						<option value="abn">AB-</option>
					</select>
				</div>
				<div class="group">
					<label for="city" class="label">City</label>
					<select id="city" type="text" class="input" name="city">
						<option>--Select City--</option>
				<?php
				echo $tb;
				?>
					</select>
				</div>
				<div class="group">
					<label for="date" class="label">When did you last donated?</label>
					<input id="date" type="date" class="input" name="date">
					Leave it blank if you never donated.
				</div>
				<br/>
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
