<?php
	session_start();
	if($_SESSION['set']==1)
	{

		session_destroy();
		echo "<!DOCTYPE html>
		<html>
		<head>
			<style>
				div {
					height: 500px;
					width: 60%;
					margin: auto;
					background: url(happybot.png) center center no-repeat;
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
			<h3>You have logged out successfully. Please visit our website again <a href='intro.html'>here</a>.</h3>
		</body>
		</html>";
		exit();
	}


?>



