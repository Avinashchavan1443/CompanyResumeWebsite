<?php

	$msg=$_POST['message'];
	//echo $msg;

	if(!empty($msg))
	{	

		$file=fopen('chat.txt', 'a');
		fwrite($file, $msg);
		fwrite($file, "\n");
		fclose($file);

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
				<h3>You data has been saved successfully. Please visit us again in a short time to view the response <a href='chat.php'>here</a>.</h3>
			</body>
			</html>";
			exit();
	}
	else
	{

			echo "<!DOCTYPE html>
			<html>
			<head>
				<style>
					div {
						height: 500px;
						width: 60%;
						margin: auto;
						background: url(brokenbot.jpg) center center no-repeat;
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
				<h3>The field has been left blank.Please fill it up <a href='chat.php'>here</a>.</h3>
			</body>
			</html>";
			exit();
	}

?>