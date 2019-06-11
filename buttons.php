<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link href="buttons.css" type="text/css" rel="stylesheet" />

		<script>
			function myFunction(x) {
    				x.classList.toggle("change");
			} 
		</script>
	</head>
	<body onload="startTimer()">
		<div class="header">
			<div class="header-big"><big>Bg</big></div>
			<ul class="header-list">
				<li><a class="h-a" href="intro.php">Welcome!</a></li>
				<li><a class="h-a" href="#">About Me</a></li>
				<li><a class="h-a" href="#">Sample</a></li>
				<li><a class="h-a" href="#">Articles</a></li>
				<li><a class="h-a" href="contact-me.php">Contact</a></li>
				<li><a href="2a.php">Chat</a></li>
				<!--<li><a href="jobs.html">Login</a></li>
				<li><a class="h-a" href="./Untitled Folder 2/buttonsnew.html">Alternate</a></li>-->
				<?php session_start();	if($_SESSION['set']==1) echo "<li><a class='h-a' href='logout.php'>Logout</a></li>"; ?>
			</ul>		
		</div>
		
		<!--<div class="intro" id="particles-js">
			<script src="p1.js" type="text/javascript"></script>
			<script src="app2.js" type="text/javascript"></script>			
		</div>-->


		<div class="b"><ul class="bubbles">
			<li class="bli"></li>
			<li class="bli"></li>
			<li class="bli"></li>
			<li class="bli"></li>
			<li class="bli"></li>
			<li class="bli"></li>
		</ul></div>


		<div class="work">
			<span class="w1-t">Work</span>
			<hr />
		</div>

		<div class="work-container">
			<div class="button1">
				<a href="#" class="flip" title="button-1">Button</a>
			</div>
			<!--<div class="button2">
				<a href="#" class="rotate" title="button-2">
					<span data-attr="Buy">Buy</span>
					<span data-attr="Now">Now</span>
				</a>
			</div>-->
			<div class="button2"><!--<h3>Hover over the button!</h3>-->
				<a class="button">
  				<span class="away">Download</span>
  				<span class="over">File Size: 30MB</span>
				</a>
			</div>
			<div class="button3">
				 <div class="ham-container" onclick="myFunction(this)">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
				</div> 
			</div>

			<div class="button4">
				<button class="button45" type="button" onclick="myFunction()"> Submit</button>
			</div>
			
		</div>
		<div class="cardboard-container">
		<div class="cardboard">
		<div class="cardBox">
			<div class="card facebook">
				<div class="card-front">
					<i class="fa fa-facebook" aria-hidden="true">
						<a href="https://www.facebook.com">
							<svg class="facebook icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" 	height="42" viewBox="0 0 25 42">
								<title>facebook</title>
								<path fill="#8b9dc3" d="M22.477 0.281v6.187h-3.68c-2.883 0-3.422 1.383-3.422 3.375v4.43h6.867l-0.914 6.938h-5.953v17.789h-7.172v-17.789h-5.977v-6.938h5.977v-5.109c0-5.93 3.633-9.164 8.93-9.164 2.531 0 4.711 0.187 5.344 0.281z"></path>
							</svg>
						</a>
					</i>
				</div>
				<div class="card-back">Facebook</div>			
			</div>		
		</div>
		<div class="cardBox">
			<div class="card twitter">
				<div class="card-front">
					<i class="fa fa-twitter" aria-hidden="true">
						<a href="https://twitter.com/?lang=en">
							<svg class="twitter icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="39" height="42" viewBox="0 0 39 42">
							<title>twitter</title>
							<path fill="#0084b4" d="M37.969 9.563c-1.031 1.5-2.32 2.836-3.797 3.914 0.023 0.328 0.023 0.656 0.023 0.984 0 10.008-7.617 21.539-21.539 21.539-4.289 0-8.273-1.242-11.625-3.398 0.609 0.070 1.195 0.094 1.828 0.094 3.539 0 6.797-1.195 9.398-3.234-3.328-0.070-6.117-2.25-7.078-5.25 0.469 0.070 0.937 0.117 1.43 0.117 0.68 0 1.359-0.094 1.992-0.258-3.469-0.703-6.070-3.75-6.070-7.43v-0.094c1.008 0.562 2.18 0.914 3.422 0.961-2.039-1.359-3.375-3.68-3.375-6.305 0-1.406 0.375-2.695 1.031-3.82 3.727 4.594 9.328 7.594 15.609 7.922-0.117-0.562-0.187-1.148-0.187-1.734 0-4.172 3.375-7.57 7.57-7.57 2.18 0 4.148 0.914 5.531 2.391 1.711-0.328 3.352-0.961 4.805-1.828-0.562 1.758-1.758 3.234-3.328 4.172 1.523-0.164 3-0.586 4.359-1.172z"></path>
							</svg>
						</a>
					</i>
				</div>
				<div class="card-back">Twitter</div>			
			</div>		
		</div>
		<div class="cardBox">
			<div class="card googleplus">
				<div class="card-front">
					<i class="fa fa-google-plus" aria-hidden="true">
						<a href="https://plus.google.com/discover">
							<svg class="google-plus icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="54" height="42" viewBox="0 0 54 42">
								<title>google-plus</title>
								<path fill="#d34836" d="M33.68 21.398c0 9.82-6.586 16.781-16.5 16.781-9.492 0-17.18-7.688-17.18-17.18s7.688-17.18 17.18-17.18c4.641 0 8.508 1.688 11.508 4.5l-4.664 4.477c-1.266-1.219-3.492-2.648-6.844-2.648-5.859 0-10.641 4.852-10.641 10.852s4.781 10.852 10.641 10.852c6.797 0 9.352-4.898 9.75-7.406h-9.75v-5.906h16.219c0.164 0.867 0.281 1.734 0.281 2.859zM54 18.539v4.922h-4.898v4.898h-4.922v-4.898h-4.898v-4.922h4.898v-4.898h4.922v4.898h4.898z"></path>
							</svg>
						</a>
					</i>
				</div>
				<div class="card-back">Google+</div>			
			</div>		
		</div>
		</div>
		</div>
		
		<div class="moon-container">
			<div class="moon behind">
			</div>

			<div class="moon">
			</div>
		</div>

		<div class="earth-container">
		<div id="earth"></div></div>

		<div class="meter">
			<meter id="m1" value="0" min="0" max="10">2 out of 10</meter><br>
		</div>

		<!--<div class="text-container">	
			<h1>happy holidays</h1>
		</div>-->

		<!--<div class="e404">
			<div class="error404page">
				  <div class="newcharacter404">
				  	<div class="chair404"></div>
				    	<div class="leftshoe404"></div>
				    	<div class="rightshoe404"></div>
				    	<div class="legs404"></div>
				    	<div class="torso404">
				      		<div class="body404"></div>
				      		<div class="leftarm404"></div>
				      		<div class="rightarm404"></div>
				      		<div class="head404">
							<div class="eyes404"></div>
				      		</div>
				    	</div>
				    	<div class="laptop404"></div>
				  </div>
			</div>
		</div>-->
	</body>

	<script type="text/javascript">
	 var seconds = 0;
     var v=0;

    function startTimer() 
    {         
      	window.setInterval( "updateTime()", 1000 );
    } 

    function updateTime()
    {
        ++seconds;              
      	var m1=document.getElementById('m1');
      	
      	if (v<=10) 
      	{
      		m1.value=v++;

      		var but=document.getElementById('button');
      		var a=document.getElementById('a');
      		but.removeChild(a);
      		document.body.removeChild(but);
  		}
  		else
  		{

  			v=0;
  			m1.value=v;

  			var but=document.createElement("button");
  			var a=document.createElement("a");
  			but.setAttribute("id","button");
  			a.setAttribute("id","a");
  			a.setAttribute("href","jobs.html");
  			a.innerHTML="Proceed";
  			but.appendChild(a);
  			document.body.appendChild(but);
  		}
    }
	</script>
</html>






























