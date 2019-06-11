<?php

	extract($_POST);

	if(!empty($name1) && $passwd==$conpasswd)
	{
		/*echo "Name : ".$name1;
		echo "<br />";
		echo "Last Name : ".$name2;
		echo "<br />";
		echo "Father's Name : ".$fname;
		echo "<br />";
		echo "Mother's Name : ".$mname;
		echo "<br />";
		echo "Password : ".$passwd;
		echo "<br />";*/

	
		$file=fopen("reg2.txt", "a");

		rewind($file);

		fwrite($file, $name1);
		fwrite($file, "|");
		/*fwrite($file, $name2);
		fwrite($file, "|");
		fwrite($file, $fname);
		fwrite($file, "|");
		fwrite($file, $mname);
		fwrite($file, "|");*/
		fwrite($file, $passwd);
		//fwrite($file, "\n");
		fwrite($file, "|");

		fclose($file);

		//echo "Your data has been saved successfully.To login ";

		echo "<!DOCTYPE html>
			<html>
			<head>
				<style>
					.image {
						height: 450px;
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
				<div class='image'></div>
				<h3>
					Name : $name1;
					<br />
					Last Name : $name2;
					<br />
					Father's Name : $fname;
					<br />
					Mother's Name : $mname;
					<br />
					Password : $passwd;
					<br />

				</h3>
				<h3>Your data has been saved successfully.To login try <a href='jobs.html'>here.</a></h3>
			</body>
			</html>";
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
				<h3>Your data can't be saved. Please try again <a href='jobs.html'>here.</a><br />Probable causes include <br />i)Name is empty <br />ii)Passwords do not match <br />iii)Both are empty</h3>
			</body>
			</html>";
			exit();
		}
?>
