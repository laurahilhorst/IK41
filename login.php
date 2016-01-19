<?php

if (!empty($_POST['username'])) {
	include("connectdb.php");
	
	$success = false;
	print 'succes false';
	$stmt = $db->prepare('SELECT 1 FROM user WHERE username=? AND password=?');
		$stmt->bindValue(1, $_POST["Username"], PDO::PARAM_STR);
		$stmt->bindValue(2, $_POST["Password"], PDO::PARAM_STR);
		$stmt->execute();

	$result = $stmt->fetch(PDO::FETCH_NUM);
	if ($result) {
		print 'result';
		if ($result[0] === "1")
			$success = true;
			print 'succes true';
	}

	if ($success) {
		echo ("You are now logged in. Click <a href=\"frontpage.html\">here</a> to continue."); }
	else {
		echo ("Login failed. Click <a href=\"{$_SERVER['PHP_SELF']}\">here</a> to try again."); }
	}
?>

