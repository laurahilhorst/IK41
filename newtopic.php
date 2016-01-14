<!DOCTYPE html>
<html>
<head>
	<title>Create new topic </title>
	<link rel="stylesheet" type="text/css" href="rhapsody.css">
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

<div class="title"><h1>Create a new topic</h1></div>
<section>
	<textarea placeholder="Title" rows="1" cols="100"></textarea>
	<textarea placeholder="Content" rows="30" cols="100"></textarea>
	<textarea placeholder="Tags" rows="1" cols="100"></textarea>
	<input type="submit" value="Post">
	<form action="newtopic.php">
    	<input type="submit" value="Create new topic">
    </form>
  </section>

<?php
include("footer.php")
?>
</body>
</html>