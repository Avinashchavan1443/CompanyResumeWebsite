<script type = "text/javascript">

         document.body.addEventListener('load','startTimer',true);
         var seconds = 0;
         var clicks=0;
         //document.cookie="name=intro;time= ";
         var abc;

         function startTimer() 
         {         
         	//document.cookie="name=intro;time= ";
         	window.setInterval( "updateTime()", 1000 );

         } 
         function updateTime()
         {
            ++seconds;      
            document.cookie="name=intro;time="+seconds+";";          
            /*document.write('<?php add("'+seconds+'");?>');*/
            /*<?php $abc = "<script>document.write(seconds)</script>"; ?>*/   
            document.getElementById( "soFar" ).innerHTML = seconds;
            /*document.write('<?php add("'+seconds+'");?>');*/
         
         } 
         
         function click()
         {
         	++clicks;
         	document.cookie="clicks="+clicks;          
            document.getElementById( "soFar1" ).innerHTML = clicks;
         }
         function move(e)
         {
         	document.getElementById( "soFar2" ).innerHTML = e.clientX,e.clientY;
         }
         function showCoords(event) {
		    var x = event.clientX;
		    var y = event.clientY;
		    var coords = "X coords: " + x + ", Y coords: " + y;
		    document.getElementById("demo").innerHTML = coords;
		}
      </script>