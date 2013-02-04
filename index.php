<?php
	
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Anonymous Public Confessions</title>
	<meta name="description" content="Describe the page">
	<meta name="author" content="Nick Heer">
	<meta name="viewport" content="width=940">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="tuxedo.css">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body onload="setupZoom()">
<div id="container">
<div id="main" role="main">
	<h2>Find anonymized confessions about:</h2>
	<form action="search.php" class="dark">
		<input type="text" name="input">
		<input type="submit" value="Submit">
	</form>
	<h3>Examples:</h3>
	<ul>
		<li><a href="search.php?input=failed+that+test">failed that test</a></li>
		<li><a href="search.php?input=new+phone+number">new phone number</a></li>
		<li><a href="search.php?input=shouldn%27t+have+broken+up">shouldn't have broken up</a></li>
		<li><a href="search.php?input=drug+addiction">drug addiction</a></li>
	</ul>
</div>
</div> <!--! end of #container -->
</body>
</html>