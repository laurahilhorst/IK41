<!DOCTYPE html>
<html>
<head>
<title>RHAPSODY</title>
<link rel="stylesheet" type="text/css" href="rhapsody.css" />
</head>

<body>
<?php
include("header.php") //include header content
?>
<?php
include("navbar.php")
?>
<?php 
include("sidebar.php")
?>

<article>
<h1>Sign Up for Rhapsody Membership</h1>

<form id='signup' method='post' action='signup.php' >
<label for='gender' >Gender: </label>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
<form action="action_page.php">
<input type='hidden' name='submitted' id='submitted' value='1'/><br><br>
<label for='name' >Full Name: </label>
<input type='text' name='name' id='name' maxlength="50" /><br><br>
<label for='birthdate' >Birthdate: </label>
<input type='date' name='birthdate' id="Date"><br><br>
<label for='name' >Country: </label>
<input type='text' name='country' id='country' maxlength="50" /><br><br>
<label for='email' >Email:</label>
<input type='text' name='email' id='email' maxlength="50" /><br><br>
<label for='username' >Username:</label>
<input type='text' name='username' id='username' maxlength="50" /><br><br>
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" /><br><br>
<label for='experience' >Music Experience Level: </label>
<input type="radio" name="experience" value="Beginner"> Beginner
<input type="radio" name="experience" value="Intermediate"> Intermediate
<input type="radio" name="experience" value="Expert"> Expert
<input type="radio" name="experience" value="Professional"> Professional <br><br>
<input type='submit' name='submit' value='Submit' />
</select>
</form>
</article>

<?php

include("footer.php")


?>
</form>
</body>
</html>
<?php
include("connectdb.php"); 

	if(isset($_POST['submit'])){

	$gender = $_POST['gender'];
	$name = $_POST['name'];
	$birthdate= $_POST['birthdate'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$experience = $_POST['experience'];

	if($gender==''){
	echo "<script>alert('Please enter gender')</script>";
	exit();
	}

	if($name==''){
	echo "<script>alert('Please enter name')</script>";
	exit();
	}

	if($birthdate==''){
	echo "<script>alert('Please enter birthdate')</script>";
	exit();
	}

	if($country==''){
	echo "<script>alert('Please enter country')</script>";
	exit();
	}

	if($email==''){
	echo "<script>alert('Please enter email')</script>";
	exit();
	}

	$check_email = "SELECT * FROM `user` where email='$email'";

	$run = mysql_query($check_email);

	if(mysql_num_rows($run)>0){

	echo "<script>alert('Email $email is already exist, please try another one')
	</script>";
	exit();
	}

	if($username==''){
	echo "<script>alert('Please enter username')</script>";
	exit();
	}

	if($password==''){
	echo "<script>alert('Please enter password')</script>";
	exit();
	}

	if($experience==''){
	echo "<script>alert('Please enter Music Experience Level')</script>";
	exit();
	}
}