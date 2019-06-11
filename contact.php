<?php

	extract($_POST);

	$name=$_POST['name'];
	$email=$_POST['replyto'];
	$message=$_POST['message'];


	if( !empty($name) && !empty($email) )
	{
		$file=fopen('contact1.txt', 'a');
		$pipe="|";

		fwrite($file, $name);
		fwrite($file, "\n");
		fwrite($file, $email);
		fwrite($file, "\n");
		fwrite($file, $message);
		fwrite($file, "\n");
		/*fwrite($file, $pipe);
		fwrite($file, "\n");*/

		//echo "$name $email $message";

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
			<h3>Your information has been saved successfully. We will get in touch with you soon. Please resume browsing <a href='intro.html'>here</a>.</h3>
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
			<h3>You might have left the text fields empty. Please try again <a href='contact-me.html'>here</a>.</h3>
		</body>
		</html>";
		exit();
	}

?>