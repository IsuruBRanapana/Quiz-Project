<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="re.css"/>
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
	<div class="reset">
		<form>
			<h2 align="center" style="color: #fff;">Reset password</h2>
			<input type="password" name="username" placeholder="Old Password"/>
			<br>
			<br>
			<input type="password" name="username" placeholder="New Password">
			<br>
			<br>
			<input type="password" name="username" placeholder="Confirm new password">
			<br>
			<br>
			<input type="button" value="Save" onclick="myFunction()"/>
			<br>
			<br>
			<a href="login.php" style="text-decoration: none;">Go back to Log In page</a>
			<br>
			<br>
			<div id="msg">Your password changed successfully!!!</div>
			<script>
				function myFunction(){
					var x = document.getElementById("msg");
					x.className="show";
					setTimeout(function(){x.className=
						x.className.replace("show","");},3000);
				}
			</script>
		</form>
	</div>
	<br>
	<br>
	<div id="home">
		<a href="home.php"><input type="button" value="Home" style="margin-left: auto;"></a>
	</div>
</body>
</html>