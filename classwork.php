<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> -->
<?php 

$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";

if( preg_match( "/MSIE/i", "$viewer" ) ){
 $browser = "Internet Explorer";
} elseif(preg_match('/Chrome/i', "$viewer")){
 	$browser = 'Google Chrome'; 
	} else if( preg_match( "/Mozilla/i", "$viewer" )){
 	$browser = "Mozilla";
	};

if ($browser == "Google Chrome") {
	echo ("
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<link rel='stylesheet' type='text/css' href='google_chrome.css'>
			</head>
			<body>
				<h1> this is $browser</h1>
			</body>
			</html>
		");
} elseif($browser == "Mozilla") {
	print("
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<link rel='stylesheet' type='text/css' href='mozilla.css'>
			</head>
			<body>
				<h1> this is $browser</h1>
			</body>
			</html>
		");
} elseif($browser == "Internet Explorer") {
	print("
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
				<link rel='stylesheet' type='text/css' href='internet_ex.css'>
			</head>
			<body>
				<h1> this is $browser</h1>
			</body>
			</html>
		");
}


?>
<!-- </body>
</html> -->