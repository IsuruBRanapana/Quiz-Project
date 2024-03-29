<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="Signup.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
		#msg{
			visibility: hidden;
			min-width: 250px;
			background-color: yellow;
			color: #000;
			text-align: center;
			border-radius: 2px;
			padding: 16px;
			position: fixed;
			z-index: 1;
			right: 30%;
			top: 30px
			font-size:17px;
			margin-right: 30px;
		}

		#msg.show{
			visibility: visible;;
			-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;
			animation:fadein 0.5s, fadeout 0.5s 2.5s;
		}
		@-webkit-keyframes fadein{
			from{top: 0; opacity: 0;}
			to{top: 30px;opacity: 1;}
		}
		@keyframes fadein{
			from{top: 0; opacity: 0;}
			to{top: 30px;opacity: 1;}
		}
		@-webkit-keyframes fadeout{
			from{top: 30px; opacity: 1;}
			to{top: 0;opacity: 0;}
		}
		@keyframes fadeout{
			from{top: 30px; opacity: 1;}
			to{top: 0;opacity: 0;}
		}
	</style>
</head>
<body>
	<div class="signup">
		<form action="Signup.php" method="POST">
            <?php include('errors.php')?>
			<h2 style="color: #fff;">Sign Up</h2>
			<input type="text" name="username_1" placeholder="First name" required>
			<br>
			<br>
			<input type="text" name="username_2" placeholder="Last name" required>
			<br>
			<br>
			<input type="password" name="password_1" placeholder="Password" required>
			<br>
			<br>
			<input type="password" name="password_2" placeholder="Confirm Password" required>
			<br>
			<br>
			<input type="text" name="email" placeholder="Email Address" required="Please fill this field">
			<br>
			<br>
			<input type="button" value="Sign Up" name="signup_user" onclick="myFunction()">
			<br>
			<br>
			<div id="msg">Congratulation you sign up successfully!!!
			</div>
			<script>
				function myFunction(){
					var x = document.getElementById("msg");
					x.className="show";
					setTimeout(function(){x.className=
						x.className.replace("show","");},3000);
				}
			</script>
			Already have account?<a href="login.php" style="text-decoration: none;font-family:'Play',sans-serif; color: yellow;">&nbsp; Log in</a>
		</form>
	</div>
	<br>
	<br>
	<div id="home">
		<a href="home.php"><input type="button" value="Home" style="margin-left: 30px;"></a>
	</div>
</body>
</html>