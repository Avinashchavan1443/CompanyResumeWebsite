<html>
<head>

  <title>Chat Room
  </title>
<style>
body{
  margin: 0 auto;
  background-image: url("bg.jpg");
  background-repeat: repeat-x;
  background-repeat: repeat-y;
  font-family: helvetica;

}

.nav-bar {
  height: 10%;
  width: 80%;
background-color: #000;
  position: fixed;

}

ul {
  list-style-type: none;
  display: inline;
  float: right;
  /*margin-left: 25%;*/
  
}

li {
  display: inline;
  margin-right: 25px;

}

.nav-a {
  text-decoration: none;
  text-transform: uppercase;
  font-family: arial;
  font-size: 18px;
  color: #fff;
  letter-spacing: 1px;  
  position: relative;
  top: 30%;
  padding-top: 15px;
  padding-bottom: 18px;
}

.nav-a:hover {
  border: 2px solid #fff;
}

div.main{

  padding:20px;
  margin:0 auto;

  background-color:rgba(066, 108, 031,0.7);
  border-radius: 15px;
  border: solid 2px rgba(204, 102, 0,0.5);
  /*margin-top: 40px;*/
  width: 85%;


}


.button {
  display: block;
  margin: auto;
  padding: 10px 17px;
  font-size: 12px;
  cursor:pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 50px;
  box-shadow: 0 4px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 3px #666;
  transform: translateY(4px);
}
h1 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 2px red, 0 0 4px darkblue;
}
h2 {
  margin-top: -50px;
  text-align: center;
  color: #fff;  
}
canvas{
  margin-left: 1000px;
  margin-top: -20px;
  padding-left: 50px;
  padding-top: 50px;
}
textarea {
  display: block;
  margin: auto;
  font-family: helvetica;
}


</style>
</head>
<body  onload="startTime()">

  <div class="nav-bar">
      <ul>
        <li><a class="nav-a" href="intro.html">Welcome!</a></li>
        <li><a class="nav-a" href="#">About Us</a></li>
        <li><a class="nav-a" href="buttons.html">Our Sample Work</a></li>
        <li><a class="nav-a" href="#">Articles</a></li>
        <li><a class="nav-a" href="contact-me.html">Contact Us</a></li> 
        <li><a class="nav-a" href="2a.html">Chat</a></li>     
        <?php session_start();  if($_SESSION['set']==1) echo "<li><a class='nav-a' href='logout.php'>Logout</a></li>"; ?>
      </ul>   
    </div>

  <canvas id="canvas" width="150" height="150">
</canvas>
  <p id="count"></p>
  <h1 style="margin-left:20px;margin-top:-210px;padding:100px;padding-left:-300px;">Your suggestions are always Welcome!</h1>
  <h2>You can always discuss important matters with the other members on this forum</h2>

  <div class="main" id="main">

<p id="commen">Comments:</p><br>
<textarea id="myTextarea" placeholder="Type Your Comment here" style="width:50%;height:30%;"></textarea name="av">
<br>
    <button class="button" type="button" onclick="myFunction()"> Submit</button>
    <br><br>
</div>

<script>
var count=0;
function myFunction() {
    var x = document.getElementById("myTextarea").value;
    if(x){
    var divi = document.createElement("div");
    	 divi.setAttribute("id", "f1");
       var comm= document.createElement("pre");
       	comm.textContent = x;
        divi.appendChild(comm);
        var but = document.getElementById("main");
        var post = but.firstChild;
        but.appendChild(divi);
        divi.style.background="rgba(255, 230, 128,0.4)";
        divi.style.border="2px solid ";
        divi.style.padding="10px";
        divi.style.margin="20px";
        divi.style.borderRadius="10px";
        divi.style.overflow="hidden";
        divi.style.textOverflow= "ellipsis";
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        count++;

        var com= document.createElement("pre1");
        	com.textContent =   h + ":" + m + ":" + s+" IST";

          divi.appendChild(com);
          com.style.marginLeft="830px";
          com.style.font="Castellar";
          com.style.padding="20px";

          divi.style.boxShadow= "10px 10px 2px rgba(255, 240, 179,0.4)";
          document.getElementById("commen").innerHTML=" COMMENTS : "+ count;

      //  alert("Thank you for your response")


      }

    else {
      alert("Please Enter Your comment")
    }

}

// Timer

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s+" IST"+"";
    var t = setTimeout(startTime, 100);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}


// Clock

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}

</script>

</body>
<html>
