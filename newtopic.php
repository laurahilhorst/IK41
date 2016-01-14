<!DOCTYPE html>
<html>
<head>
	<title>Create new topic </title>
	<link rel="stylesheet" type="text/css" href="rhapsody.css">
</head>

<body>
<?php
include("header.php"); //include header content

include("navbar.php");
 
include("sidebar.php");
?>

<div class="title"><h1>Create a new topic</h1></div>
<section>
	<div id="topictitle">
		<textarea placeholder="Title" rows="1" cols="100"></textarea>
	</div>
	<div class="message_buttons">
        <input type="button" value="Bold" onclick="javascript:insert('[b]', '[/b]', 'message');" /><!--
        --><input type="button" value="Italic" onclick="javascript:insert('[i]', '[/i]', 'message');" /><!--
        --><input type="button" value="Underlined" onclick="javascript:insert('[u]', '[/u]', 'message');" /><!--
        --><input type="button" value="Image" onclick="javascript:insert('[img]', '[/img]', 'message');" /><!--
        --><input type="button" value="Link" onclick="javascript:insert('[url]', '[/url]', 'message');" /><!--
        --><input type="button" value="Left" onclick="javascript:insert('[left]', '[/left]', 'message');" /><!--
        --><input type="button" value="Center" onclick="javascript:insert('[center]', '[/center]', 'message');" /><!--
        --><input type="button" value="Right" onclick="javascript:insert('[right]', '[/right]', 'message');" />
    </div>
	<div id="topic_content">
		<textarea placeholder="Content" rows="30" cols="100"></textarea>
	</div>
	<div id="topic_tags">
		<textarea placeholder="Tags" rows="1" cols="100"></textarea>
	</div>
	<div class="button">
		<input type="submit" value="Post">
	</div>
  </section>

<?php
include("footer.php")
?>
</body>
</html>