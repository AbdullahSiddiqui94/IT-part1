<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="icon" href="title.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
ul {
    list-style-type: none;
    margin: 0;
	border-radius: 9px;
    padding: 0;
    overflow: hidden;
    background-color: brown;
}
.bottom{
			background-color:brown;
			padding-left:40;
			border-radius:10px;
			padding-right:40;
			padding-right:0px;
			padding-bottom:10px;
			padding-top:10px;
			
			}
.button31 {
    background-color: white; 
    color: lightblue; 
    border: 2px solid #f44336;
}

.button31:hover {
    background-color: #f44336;
    color: white;
}

.button51 {
    background-color: white;
    color: lightblue;
    border: 2px solid #555555;
}

.button51:hover {
    background-color: #555555;
    color: white;
}
.button21 {
    background-color: white; 
    color: lightyellow; 
    border: 2px solid #008CBA;
}

.button21:hover {
    background-color: #008CBA;
    color: white;
}
li {
    float: left;
	//color : white;
	font-size : 17px; 
	font-variant : small-caps;
	font-family : Arial, Helvetica, sans-serif;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ff5233;
}
.mySlides {display:none;}
body {
    background:color:white; ;
}
.shad{
padding:0px 0px 0px 0px;
border-radius: 10px;
}
.shad:hover{
	box-shadow:10px 10px 5px grey;
 }

.img{
	height: 300px;
    width: 550px;
	display: block;
}
.animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.content{max-width:980px;margin:auto}.w3-rest{overflow:hidden}
.section{margin-top:16px!important;margin-bottom:16px!important}

.box{
    width: 300px;
	max-height:10px;
    border: 3px solid gray;
    margin: 55px;
	padding: 25px;
}
.name{
color:#FFFFFF;
 font-size: 50px;
 font-family:"Monospace";
}
.container {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .8s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #7D1935;
  color: white;
  font-size: 16px;
  padding: 16px 16px;
  }

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
.ncontainer {
    position: relative;
}
#rcorners2
		{
			border-radius: 3px;
			background: #e5e5e5;	    
		}
.ncenter {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 28px;
	font-family: courier;
}
.footfont{
	color : white;
	font-size : 17px; 
	font-variant : small-caps;
	font-family : Arial, Helvetica, sans-serif;
}
.footfont2{
	color : white;
	font-size : 12px; 
	//font-variant : small-caps;
	font-family : Arial, Helvetica, sans-serif;
}



.footfont2 a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
}
.footfont2 a:visited {
    color: pink;
    background-color: transparent;
    text-decoration: none;
}
.footfont2 a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
.footfont2 a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}


</style>
</head>
<header>
            <div class="container">      
</div>                     
                    </div>
                </div>
            </div>
        </div>
<body>

<ul>
  <li><a class="active" href="home.php">Home</a></li>

  

  <li><a href="gallery.php">Gallery</a></li>

  <li><a href="aboutus.html">About Us</a></li>

  <li><a href="aduser.php">Login</a></li>

  
</ul>
<br />
<div class="content section" style="width:2000px">
  <img class="mySlides animate-fading" src="download (2).jpg" style="height:400px; width:100%" >
  <img class="mySlides animate-fading" src="download.jpg" style="height:400px; width:100%" >
  <img class="mySlides animate-fading" src="0_pid_3910.jpg" style="height:400px; width:100%" >
</div>
<table border="0px" align="center" style="background-color:Brown; width:100%; border-radius:9px">
		<tr>
			
	
	
		</tr>
		
	</table>

	<script>
		var myIndex = 0;
		carousel();
		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 5000);    
		}
	</script>
	<br />
	<footer>
		<div class="bottom" style="overflow-x:auto;">
			
		
			
			<center><table border="0px">
				<caption style="color:white; font-size:17px;  font-variant: small-caps; font-family: Arial, Helvetica, sans-serif;">Star Bakery</caption>
	
				<tr>
					<td style = "color : white; text-align : center;">Address: Phase 2, Mundargi Industrial Area, Ballari, Karnataka 583102</td></tr>
					<tr><td style = "color : white; text-align : center;">Contact: 083922 50591</td></tr>
<tr><td style = "color : white; text-align : center;">
<a href="info.php"> Write us: info@starbakery.in</a></td>
		
				</tr>
			</table></center>
			<br />
	
		</div>
	</footer>
</body>
</html>
