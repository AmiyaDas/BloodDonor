<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Login Form</title>
  
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript">
  function sel()
  {
	  v1=document.getElementById("yes");
	  v2=document.getElementById("no");
	  
	  if(v2.checked==true){
		  document.myform.action="signedup.php";
	  }
	  else if(v1.checked==true){
		  document.myform.action="donor.php";
	  }
	  else{
		  alert("Select if you are a donor or not! It can save someone's life..");
	  }
  }
  </script>
  
</head>

<body>
	
  <div class="login-wrap">
	<div class="login-html">
		<img src="img/lifeline2.png" height="80"><br/>
		<label for="tab-1" class="tab"><a href="login.php">Sign In</a></label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-up-htm">
			<form action="" method="post" name="myform" onsubmit="sel()">
				<div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="email" class="label">Email address</label>
					<input id="email" name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pwd" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass2" class="label">Repeat Password</label>
					<input id="pass2" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="phone" class="label">Phone number</label>
					<input id="phone" name="phon" type="text" class="input">
				</div>
				<div class="group">
					<label for="sex" class="label">Gender</label>
					<select id="sex" type="text" class="input" name="sex">
						<option value="M">Male</option>
						<option value="F">Female</option>
					</select>
				</div>
				<div class="group">
					<label class="label">Are you a blood donor?</label>
					<input id="yes" type="radio" class="radio" name="donor" value="y"><label for="yes">Yes</label>
					<input id="no" type="radio" class="radio" name="donor" value="n"><label for="no">No</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label><a href="login.php">Already Member?</a></label>
				</div>
			</div>
		</div>
	</div>
</div>
  
  
</body>
</html>
