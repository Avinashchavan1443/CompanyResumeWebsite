<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Chat Room</title>
	<style type="text/css">
		body {
			/*margin: 0;*/
			padding: 0;
		}
		h3 {
			font-family: helvetica;
			text-align: center;
		}
		.enclose {
			display: flex;
			height: 750px;
			width: 100%;
		}
		.c1 {
			height: 80%;
			width: 50%;
			background-color: #272727;
			margin-right: 5%;
		}
		.c2 {
			height: 80%;
			width: 50%;
			background-color: #000;
		}
		form {
			height: 20%;
		}
		.msg {
			display: block;
			margin: auto;
			height: 60%;
			width: 60%;
			border: 2px solid #272727;
			font-family: helvetica;
		}
		input {
			margin-left: 7%;
			margin-top: 2%;
			border: 2px solid #000;
			height: 30px;
			/*border-radius: 20%;*/

		}
	</style>
</head>
<body>
	<h3>Chat Forum</h3>
	<div class="enclose">
		<div class="c1">
			<h3>Register Your Complaint</h3>
			<form action="chat-reg.php" method="POST">
				<input type="text" id="msg" name="message" placeholder="Type in your Complaints here"></input>
				<input type="submit" />
				<input type="reset" />
			</form>
		</div>
		<div class="c2"></div>
	</div>
</body>

</html>


