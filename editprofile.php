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
		
		<form action="editedprofile.php" method="post" name="myform">
		<?php
		echo $tb;
		?>
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
