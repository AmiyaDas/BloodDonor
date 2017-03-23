<?php
/*include_once("connection.php");

$id=$_GET['id'];
$city= $_POST['city'];
$bg= $_POST['bg'];

$query = "SELECT name from profile where(donor='y' or donor='Y') and uid in (SELECT uid FROM donor where city='$city' and bgroup='$bg');";

$query_res=mysqli_query($con,$query);

$tb="";

while($row = mysqli_fetch_assoc($query_res))
{
	//$tb=$tb."<option>".$row['city_name']."</option>";
}
*/
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Find Donors</title>
  
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<div class="titl">Donors</div><br/>
		<label class="label">Click on the donor's name to view their profile</label><br/>
		<div class="notice">Amiya</div>
		<div class="notice">pogo</div>
		<div class="hr"></div>
			<div class="foot-lnk">
			<label><a href="index.php">Back</a></label>
			</div>
		</div>
</div>
  
  
</body>
</html>
