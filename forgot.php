<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Login Form</title>
  
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
	
  <div class="login-wrap">
	<div class="login-html">
		<img src="img/lifeline2.png" height="80"><br/>
		<label class="titl">Password Reset</label>
		<div class="login-form">
			<div class="sign-up-htm">
			<label for="name" class="label">Fill all details below to reset your password.</label>
			<form action="forgot2.php" method="post" name="myform">
				<div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="email" class="label">Email address</label>
					<input id="email" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="phone" class="label">Phone number</label>
					<input id="phone" name="phon" type="text" class="input">
				</div><br/>
				<div class="group">
					<input type="submit" class="button" value="Next">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label><a href="index.php">Login</a></label>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
