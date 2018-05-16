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
img {
    transition:transform 0.25s ease;
}

img:hover {
    -webkit-transform:scale(1.5); /* or some other value */
    transform:scale(1.5);
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
.img {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.img {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.img {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
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

<div>

<img src="d8ba661560ff6dde7dfd3c81509a1511.JPG" width="150" height="150">
<img src="cf6992059927fd57c72644264edb9e1f.JPG" width="150" height="150">
<img src="29542344_1008904709260201_2461660376853381120_o.JPG" width="150" height="150">
<img src="IMG-20171010-WA0021.JPG"width="100" height="150"> 
<img src="29497811_1008904749260197_8600622381892894720_o.JPG" width="150" height="150">
<img src="29510834_1008904632593542_2350007217320624128_o.JPG" width="150" height="150">
<img src="29497944_1008904542593551_8263844177918296064_o.JPG" width="150" height="150">
<img src="29496937_1008904572593548_450572928690421760_o.JPG" width="150" height="150">
<img src="d8ba661560ff6dde7dfd3c81509a1511.JPG" width="150" height="150">
<img src="29497811_1008904749260197_8600622381892894720_o.JPG" width="150" height="150">
<img src="IMG-20171010-WA0028.JPG" width="150" height="150">
<img src="karachstoo-1511340367.JPG" width="150" height="150">
<img src="29496592_1008904599260212_4802372052289847296_o.JPG"width="150" height="150">
<img src="29511877_1008904615926877_6616328176672964608_o (1).JPG" width="150" height="150">
<img src="images (1).JPG" width="100" height="150">
<img src="29511635_1008904732593532_283236634856521728_o.JPG" width="150" height="120"><img src="29542016_1008904649260207_4569255125977137152_o.JPG" width="150" height="100">

<img src="29513079_1008904742593531_5340919350155018240_o.JPG" width="150" height="120">
<img src="29510832_1008904719260200_916017220297949184_o.JPG" width="150" height="120">
<video width="150" height="120" controls>
  <source src="BAKERY.mp4" type="video/mp4">
</video>
<video width="150" height="120" controls>
  <source src="BAK2.mp4" type="video/mp4">
/video>
<video width="150" height="120" controls>
  <source src="bak3.mp4" type="video/mp4">
/video>
</video>
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
