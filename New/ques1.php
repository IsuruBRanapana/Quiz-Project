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
	<div>
		<form>
	<?php 
		$ans=array(4);
		$ans[0]='1';
		$ans[1]='2';
		$ans[2]='3';
		$ans[3]='4';
		
		shuffle($ans);

		for ($i=0; $i <4 ; $i++) { 
			echo "<input type='radio' name='answer'>".$ans[$i]."<br>";	
		}
		echo "<input type='submit' name='submit' value='Check'>";

	 ?>
	 </form>
	 </div>

</body>
</html>
<?php mysqli_close($connection); ?>