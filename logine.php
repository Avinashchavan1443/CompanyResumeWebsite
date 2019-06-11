<?php

	$userN = $_POST['username'];
	$passW = $_POST['pass'];
	$name="bilal";
	$pass="bilal";
	//$userlist = file ('reg.txt');

	$success = false;
	/*foreach ($userlist as $user) {
	    $user_details = explode('|', $user);
	    if ($user_details[0] == $userN && $user_details[4] == $passW) {
	        $success = true;
		$name2=$user_details[1];
		$fname=$user_details[2];
		$mname=$user_details[3];
	        break;
	    }
	}*/

	if( $userN==$name && $passW==$pass )
	{
		$success=true;

	}

	if ($success) {
	    //echo "<br> Hi $userN you have been logged in. </br>";
		session_start();
		$_SESSION['set']=1;
		$_SESSION['ename']="bilal";

		$arr=file('contact1.txt');


		//$details=file_get_contents('contact.txt');
		//$details=explode('|',$details);
?>
		
		<!DOCTYPE html>
		<html>
		<head>
			<title>Employee Portal Page</title>
			<style>
				body {
					font-family: helvetica;
					margin: 0;
					padding: 0;
				}
				.side {
					height: 100%;
					width: 20%;
					background-color: DimGray;
					position: fixed;
				}
				.face {
					height: 20%;
					width: 50%;
					margin: auto;
					margin-top: 10%;
					border-radius: 50%;
					background: url('srk.jpg') center center no-repeat;
					background-size: cover;

				}
				h3,a,p {
					text-align: center;
				}
				h4 {
					margin-left: 43%;
				}
				a {
					/*text-decoration: none;*/
					color: #272727;
				}
				p {
					text-align: center;
					wdth: 70%;
					margin: auto;
					margin-left: 25%;
					margin-right: 7%;

				}
				.boxes {
					width: 70%;
					margin-left: 25%;
				}
				button.accordion {
				    background-color: #eee;
				    color: #444;
				    cursor: pointer;
				    padding: 18px;
				    width: 100%;
				    border: none;
				    text-align: left;
				    outline: none;
				    font-size: 15px;
				    transition: 0.4s;
				}

				button.accordion.active, button.accordion:hover {
				    background-color: #ccc; 
				}

				div.panel {
				    padding: 0 18px;
				    display: none;
				    background-color: white;
				    transition: .5s ease-out;
				}
				.panelpara {
					margin-left: 10%;
					/*transition: .5s ease-out;*/
				}

				.table,.chat-table {
					width: 70%;
					margin-left: 25%;
					border: 2px solid #262626;
					border-collapse: collapse;

				}
				th,td {
					padding-left: 55px;
					padding-right: 55px;
					padding-top: 15px;
					padding-bottom: 15px; 
					text-align: center;

				}
				.chat-table {
					height: 20%;
					width: 70%;
					margin-left: 25%;
					margin-top: 5%;
				}
			</style>
		</head>
		<body>
			<div class='side'>
				<div class='face'></div>
				<h3>Name : Bilal</h3>
				<h3>Status : Employee</h3>
				<h3><a href='logout.php'>Logout</a></h3>
			</div>
			<div class='info'>
				<p><br /><br /><br /><br />How will any fired vehicle stick each designer? Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.How will any fired vehicle stick each designer? Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.How will any fired vehicle stick each designer? Will the painted ingredient triumph over a tasteless revenge? When can the manifesto represent the competitor? A disgusting dance disorders the wrath against a factual industry. The coal volunteers over the substitute bird. The continuous novel decides on top of the prayer.</p>
			</div><br /><br /><br />
			

			<div class='boxes'>
				<button class='accordion'>Section 1</button>
				<div class='panel'>
				  <p class='panelpara'>
				  	Time spent by the user in seconds is : 
				  	<script type="text/javascript">
				  		/*var cookie=document.cookie;
				  		if(cookie)
				  		
				  			var arr=document.cookie.split(';');
				  			var arr1=arr[1].split('=');
				  			document.getElementsByClassName('panelpara').textContent=arr1[1];*/

				  		document.write(localStorage.getItem("seconds"));

				  	</script>
				  </p>
				</div>

				<button class='accordion'>Section 2</button>
				<div class='panel'>
				  <p class='panelpara'>Users have encountered a 403 error trying to access directory structure   
				  	<!--<?php $file=fopen('404count1.txt', 'r');
							//$i=fgets($file);
							//fclose($file);

							//echo "$i";
					?>-->
					<script type="text/javascript">
						document.write(localStorage.getItem("count403"));
					</script>
					 times.
				  </p>
				</div>

				<button class='accordion'>Section 3</button>
				<div class='panel'>
				  <p class='panelpara'>
				  	<a href="intro.html" download> Download the source code for the intro page.</a><br />
				  	<a href="jobs.html" download> Download the source code for the login page.</a><br />
				  	<a href="contact-me.html" download> Download the source code for the contact page.</a><br />	
				  </p>
				</div>

				<button class='accordion'>Section 4</button>
				<div class='panel'>
				  <p class='panelpara'>
				  	<iframe style="width: 124%;margin-left: -14%;" src="http://localhost/Untitled-Folder-updated-3/2a.html">
  						<p>Your browser does not support iframes.</p>
					</iframe>
				  </p>
				</div>

				<button class='accordion'>Section 5</button>
				<div class='panel'>
				  <p class='panelpara'>
				  	No of chats and replies are
				  	<script type="text/javascript">
				  		document.write(localStorage.getItem("chat-count"));
				  	</script>
				  </p>
				</div>

			</div>

			<br/><br/><br/>

			<h4>People who've shown interest in being contacted : </h4>

			<div class='table'>
				<table>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
					</tr>
					<?php
						$pipe="|";
						echo "<tr>"; 
						$i=0;
						foreach ($arr as $key => $value) {
							if($i%3==0)
							{
								echo "</tr><tr>";
								echo "<td>$value</td>";
								$i++;
								continue;
							}
							echo "<td>$value</td>";
							$i++;
						}
					?>
					<!--<tr>
						<td><?php echo $arr[0]; ?></td>
						<td><?php echo $arr[1]; ?></td>
						<td><?php echo $arr[2]; ?></td>
					</tr>
					<tr>
						<td><?php echo $arr[3]; ?></td>
						<td><?php echo $arr[4]; ?></td>
						<td><?php echo $arr[5]; ?></td>
					</tr>-->
				</table>
			</div>	

			<br /><br /><br />

			<div class="c">
				<p>If you are having any technical problem visiting this site,please feel free to contact us <a href="mailto:volcanoeserupt@gmail.com">here</a>.</p>	
			</div>
			
			<script>
			var acc = document.getElementsByClassName('accordion');
			var i;

			for (i = 0; i < acc.length; i++) {
			    acc[i].onclick = function(){
			        this.classList.toggle('active');
			        var panel = this.nextElementSibling;
			        if (panel.style.display === 'block') {
			            panel.style.display = 'none';
			        } else {
			            panel.style.display = 'block';
			        }
			    }
			}
			</script>

		</body>
		</html>;
	    
<?php 	} 
	else {
		?> 
		<!DOCTYPE html>
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
			<h3>Your employee login credential login details are wrong or blank. Please try again <a href='jobs.html'>here</a>.</h3>
		</body>
		</html>;
		<?php exit();
	}?>

