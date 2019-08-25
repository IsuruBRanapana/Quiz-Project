<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css"/>
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>
<body>
	<div class="signin">
		<form action="login.php" method="post">
			<h2 style="color: white">Log In </h2>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="pass" placeholder="Password" required>
			<br>
			<br>
			<a href="cong.php"><input type="button" value="Log In" name="login_user"></a>
			<br>
			<br>
			<div id="container">
				<a href="re.php" style="margin-right:0px; font-size:13px; font-family:Tohoma, Geneva, sans-serif;">Reset Password</a> |
				<a href="for.php" style="margin-right: 0px; font-size: 13px; font-family: Tohoma, Geneva, sans-serif;">Forgot Password</a>
			</div>
			<br>
			<br>
			<br>
			<br>
			Don't have account ? <a href="Signup.php">&nbsp;Sign Up</a> 
		</form>	
	</div>
	<br>
	<br>
	<br>
	<br>
	<div id="home">
		<a href="home.php"><input type="button" value="Home" style="margin-left: 30px;"></a>
	</div>
</body>
</html>