<!DOCTYPE html>
<html>
<head>
<title>rhapsody</title>
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
<article>
<p>Tags, widgets. Content voor de overige pagina's wordt anders (en met een andere padding).</p>
<div class="twitter">
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/RHAPSODY_010/lists/music" data-widget-id="687271695216959489">Tweets from https://twitter.com/RHAPSODY_010/lists/music</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div>
<div>
<div>
<p><b> Spotify's Top 40 </p></b>
<iframe src="https://embed.spotify.com/?uri=spotify:user:sonymusicnl:playlist:7yhMkuwajPWTpbEfc7y6oJ&theme=white" width="300" height="600" frameborder="0" allowtransparency="true"></iframe>
</div>
</article>

<?php
include("footer.php")
?>
</body>
</html>