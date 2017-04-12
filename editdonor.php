<?php
include_once("connection.php");
$id=$_GET['id'];

$query = "select * from profile where uid='$id';";

$query_res=mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_res);

$tb="<div class=\"group\"><label for=\"name\" class=\"label\">Name</label><input value=\"".$row['name']."\" id=\"name\" name=\"name\" type=\"text\" class=\"input\"></div>";
$tb=$tb."<div class=\"group\"><label for=\"email\" class=\"label\">Email</label><input value=\"".$row['email']."\" id=\"email\" name=\"email\" type=\"text\" class=\"input\"></div>";
$tb=$tb."<div class=\"group\"><label for=\"phone\" class=\"label\">Phone</label><input value=\"".$row['phone']."\" id=\"phone\" name=\"phone\" type=\"text\" class=\"input\"></div>";
$tb=$tb."<input value=\"".$id."\" name=\"id\" type=\"hidden\">";


$bg="<div class=\"group\">
	<label for=\"bg\" class=\"label\">Blood Group</label>
	<select id=\"bg\" type=\"text\" class=\"input\" name=\"bg\">
	<option value=\"op\">O+</option><option value=\"ap\">A+</option>
	<option value=\"bp\">B+</option><option value=\"abp\">AB+</option>
	<option value=\"on\">O-</option><option value=\"an\">A-</option>
	<option value=\"bn\">B-</option><option value=\"abn\">AB-</option>
	</select></div>";
	

$q2 = "select * from donor where uid='$id';";
$q2_res=mysqli_query($con,$q2);
$r2 = mysqli_fetch_assoc($q2_res);


$query2 = "select distinct city_name from city order by city_name;";
$query_res2=mysqli_query($con,$query2);
$ct="";
while($row2 = mysqli_fetch_assoc($query_res2))
{
	if($r2['city']==$row2['city_name']){
		$ct=$ct."<option selected=\"selected\">".$row2['city_name']."</option>";
	}
	else{
		$ct=$ct."<option>".$row2['city_name']."</option>";
	}
}

$dt=$r2['lastdonated'];
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
		
		<form action="editeddonor.php" method="post" name="myform">
		<?php
		echo $tb;
		?>
		<?php
		echo $bg;
		?>
		<div class="group">
		<label for="city" class="label">City</label>
		<select id="city" type="text" class="input" name="city">
			<option>--Select City--</option>
			<?php
			echo $ct;
			?>
		</select>
		</div>
		<div class="group">
			<label for="date" class="label">Last Donated</label>
			<input id="date" type="date" class="input" name="date" value="<?php echo $dt; ?>"/>
		</div>
		<br/>
		<div class="group">
		<input type="submit" class="button" value="Update">
		</div>
		</form>
		<div class="foot-lnk">
			<label><a href="home2.php?id=<?php echo $id ?>">Back</a></label>
		</div>
		</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
