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
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body onload="setupZoom()">
<div id="container">
<div id="main" role="main">
	<?php
	$query = "";
	$input = $_GET["input"];
	$query .= urlencode($input);
	// failed%20that%20test
	// new%20phone%20number
	// 
	$feed = "http://search.twitter.com/search.atom?q=" . $query . "&rpp=10";

	function parse_feed($feed) {
	    $stepOne = explode("<content type=\"html\">", $feed);
		$pick = rand (1,10);
	    $stepTwo = explode("</content>", $stepOne[$pick]);
	    $tweet = $stepTwo[0];
		$tweet = htmlspecialchars_decode($tweet,ENT_QUOTES);
	    return $tweet;
	}

	$twitterFeed = file_get_contents($feed);
	echo('<p>'.parse_feed($twitterFeed).'</p><br><a href=\'http://nickheer.com/twitter/\'>New search</a>, or <a href="javascript:history.go(0)">load another confession</a>?');
	?>
</div>
</div> <!--! end of #container -->
</body>
</html>
