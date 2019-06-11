<?php 

	$file=fopen('404count1.txt', 'r');
	$i=(int)fgets($file);
	$i++;
	fclose($file);

	$file=fopen('404count1.txt', 'w');
	fwrite($file,$i);
	fclose($file);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>
	<style>
			div {
				height: 500px;
				width: 60%;
				margin: auto;
				background: url(error.png) center center no-repeat;
				background-size: cover;
			}
			h3 {
				font-family: helvetica;
				text-align: center;
			}
			a {
				text-decoration: none;
			}
			a:links {
				color: #666;
			}
		</style>
		
</head>
<body>
	<div></div>
	<h3>The item that you are searching for does not exist. Please try again.</h3>
</body>
</html>