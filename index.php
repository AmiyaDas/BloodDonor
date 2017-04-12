<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="shortcut icon" href="img/fav1.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css">
    <title>Login Form</title>
</head>

<body>
	
  <div class="login-wrap">
	<div class="login-html">
		<img src="img/lifeline2.png" height="80"><br/>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<label for="tab-2" class="tab"><a href="signup.php">Sign Up</a></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="home.php" method="post">
				<div class="group">
					<label for="user" class="label">Email address</label>
					<input id="user" type="text" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="pswd" data-type="password">
				</div>
				<br/>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="forgot.php">Forgot Password?</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
  
  
</body>
</html>
