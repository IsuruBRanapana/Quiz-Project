<?php require_once('inc/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="Signup.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>
<body>
	<h1>Users</h1>
	<?php 
			$ques=array(5);
			$ques[0]='login.php';
			$ques[1]='2';
			$ques[2]='3';
			$ques[3]='4';
			$ques[4]='5';

			$num=rand(0,4);
			echo $ques[$num];
			if ($num==0) {
				header('Location: ques1.php');
			}elseif ($num==1) {
				header('Location: ques2.php');
			}elseif ($num==2) {
				header('Location: ques3.php');
			}elseif ($num==3) {
				header('Location: ques4.php');
			}elseif ($num==4) {
				header('Location: ques5.php');
			}
	 ?>
</body>
</html>
<?php mysqli_close($connection); ?>