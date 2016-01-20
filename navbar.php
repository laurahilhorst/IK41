<?php
if (!empty($_POST['Username'])) {
	include("connectdb.php");
	
	$success = false;
	$stmt = $db->prepare('SELECT 1 FROM user WHERE username=? AND password=?');
		$stmt->bindValue(1, $_POST["Username"], PDO::PARAM_STR);
		$stmt->bindValue(2, $_POST["Password"], PDO::PARAM_STR);
		$stmt->execute();


	$result = $stmt->fetch(PDO::FETCH_NUM);
	if ($result) {
		if ($result[0] === "1") {
			$success = true;
		}
	}

	if ($success) {
		echo ("Login succesful.");
	}

	else {
		echo ("Login failed. <a href=\"{$_SERVER['PHP_SELF']}\">Try again.</a>"); 
	}
}
?>
<nav>
    <a href="frontpage.php">Home</a>
    <a href="myprofile.php">My Profile</a>
	<button type="button" id="loginButton">
		<a id="toggle-loginBox" href='#'>
			login/signup
		</a>
		<div id="loginBox">
			<form method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
				<input id="username" type="username" name="Username" placeholder="Username" required>
				<input id="password" type="password" name="Password" placeholder="Password" required>
				<input id="submit" type="submit" name="submit">
				<a id="signupLink" href="signup.php">
						Sign Up
				</a>
		
			</form>
		</div>
	</button>
</nav>