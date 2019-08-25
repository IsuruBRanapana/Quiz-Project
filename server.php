<?php
    session_start();
    //initialize variables
    $username="";
    $email="";
    $errors= array();

    //connect to db
    $db=mysqli_connect('localhost','root','','practice') or die("Not connected");

    //register users
    $username_1=mysql_real_escape_string($db, $_POST['username_1']);
    $username_2=mysql_real_escape_string($db, $_POST['username_2']);
    $email=mysql_real_escape_string($db,$_POST['email']);
    $password_1=mysql_real_escape_string($db, $_POST['password_1']);
    $password_2=mysql_real_escape_string($db, $_POST['password_2']);

    //form validation
    if (empty($username_1)) {array_push($errors, "First Name is requied")};
    if (empty($username_2)) {array_push($errors, "last Name is requied")};
    if (empty($email)) {array_push($errors, "E-mail is requied")};
    if (empty($password_1)) {array_push($errors, "Password is requied")};
    if (empty($password_2)) {array_push($errors, "Password do not match")};

    //check db for existing user with same user name
    $user_check_query="SELECT * FROM user WHERE username='$username_1' or email='$email' LIMIT 1";
    $result=mysqli_query($db,$user_check_query);
    $user=mysqli_fetch_assoc($result);

    if($user){
    	if($user["username_1"]===$username){
    		array_push(errors, "Username already exist");
    	}
    	if($user["email"]===$email){
    		array_push(errors, "email already exist");
    	}
    }
?>