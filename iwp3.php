<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Page Title</title>
<style>
body
{
font-family:latha;
color: white;
background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)), url('multimedia/1.jpg');
background-size:cover; 
width: 100%;
height: 100%;
background-repeat: no-repeat;
}
ul{
			list-style-type: none;
			margin: 0;
			padding:0;
			overflow: hidden;
		}
li{
			float: left;
		}
li  {
           display: block;
           color: white;
           text-align: center;
           padding:25px 30px;
           text-decoration: none;
           opacity: 0.9;
           font-size: 25px;
        }

li a:link, li a:visited {
       color: white;
       background-color: transparent;
       text-decoration: none;
        }
li a:hover, #demo:hover
{
 color: yellow;
 cursor: pointer;
}
.wd
{
width:400px;
height:890px;
background-color:black;
opacity:0.9;
padding:55px;
}
#menu-tile, #special-tile {
	height: 200px;
	width: 50%;
	padding: 50px 50px;
	margin-bottom: 15px;
	position: absolute;
	top: 100px;
	left:500px;
	border: 2px solid #3F0C1F;
	overflow: hidden;
}
#special-tile{
	position: absolute;
	top:300px;
	left:500px;
}
#momo-tile, #pizza-tile{
	height: 200px;
	width: 50%;
	margin-bottom: 15px;
	position: absolute;
	top: 500px;
	left:500px;
	border: 2px solid #3F0C1F;
	overflow: hidden;

}
#pizza-tile{
	height:300px;
	position: absolute;
	top:675px;
	left:500px;
}
#menu-tile:hover, #special-tile:hover, #momo-tile:hover, #pizza-tile:hover {
	box-shadow: 0 1px 5px 1px #cccccc;
}
#menu-tile{
	background: url('multimedia/5def64d72b692.jpg') no-repeat;
	background-position: center;
}
#special-tile{
	background: url('multimedia/buffet.jpg') no-repeat;
    background-position: center;
 }
 #pizza-tile{
 	background: url('multimedia/Dominos_Pizza_Offers_1545894728651.jpg') no-repeat;
 	background-position: center;
 } 
 #momo-tile{
 	background: url('multimedia/file745961w0uudq6jh12c9-1551128044.jpg') no-repeat;
 	background-position: center;
 } 
 #menu-tile span, #special-tile span ,#pizza-tile span, #momo-tile span {
 	position: absolute;
 	bottom: 0;
 	right: 0;
 	width: 100%;
 	text-align: center;
 	font-size: 1.6em;
 	text-transform: uppercase;
 	background-color: #000;
 	color: #fff;
 	opacity: 0.8;
 } 
h1
{
text-align:center;
text-transform:uppercase;
font-weight:100px;
}
h4
{
text-align:justify;
color:darkgrey;
font-weight:normal;
}
h2
{
text-align:center;
text-transform:uppercase;
font-weight:normal;
margin:40px auto;
}
.opt form,input[type="button"]
{
background-color:black;
color:white;
padding:10px;
margin:-14px auto;
padding-left:50px;
padding-right:50px;
text-align:center;
}
footer {
	text-align: center;
	color: black;
	width: 100%;
	background-color:darkgrey; 
}
.glyphicon{
  color: darkorange;
}
li button {
  width: 900px;
  padding: 6px 10px;
  margin-top: 2px;
  margin-right: 10px;
  font-size: 17px;
  border: none;
  cursor:pointer;
  float: right;
  opacity: 0.6;
}
 
</style>
</head>    if(empty($fname) || empty($lname) || empty($uname) || empty($email) || empty($phno) || empty($psw) || empty($rpsw))
    {
      echo "*All fields are required";
    }
    else if(!preg_match("/^([a-zA-Z' ]+)$/",$fname))
    {
        echo "<br>*Invalid Name, email ID or phone number";
    }
    else if(!preg_match("/^([a-zA-Z' ]+)$/",$lname))
    {
        echo "<br>*Invalid Name, email ID or phone number";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<br>*Invalid Name, email ID or phone number";
    }
    else if(!preg_match("/^[0-9]*$/", $phno))
    {
        echo "<br>*Invalid Name, email ID or phone number";
    }
    else   
    {
        
    }
<body>
<div class="box">
<ul>
<li><a herf=""><abbr title="Home"><span class="glyphicon glyphicon-home"></span></abbr></a></li>
<li><a herf=""><abbr title="Menu"><span class="glyphicon glyphicon-cutlery"></span></abbr></a></li>
<li><a herf="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
<li><a herf=""><abbr title="Contact Us"><span class="glyphicon glyphicon-phone Contact"></span></abbr></a></li>
<li><a href="explore.php"><abbr title="Explore"><span class="glyphicon glyphicon-gift"></span></abbr></a></li>
<li id="demo"></li>
<li id="mapholder"><button onclick="getLocation()" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span>Search your location</button></li>
</ul>
</div>
<div class="wd">
 <h1>Welcome:</h1>
 <h4>The safest online food delivery... Trusted by customers over 20 years and counting</h4>
 <h2>Offers</h2>
 <p>50% off for First Five Orders</p>
 <p>20% Discount For Orders Above &#8377 1000</p>
 <img src="multimedia/tenor.gif" alt="arrow" width="200px" height="350px">
</div>       
 </div>
 <div class="container-food" >
 <div id="home-tiles" class="row">
       
                 <a href="tulip.php"><div id="menu-tile"><span>Hotel Golden Tulip</span></div></a>
       
        
                 <a href="ratnadeep.php"><div id="special-tile"><span>Hotel Ratnadeep</span></div></a>
       
        
                 <a href="dominos.php"><div id="pizza-tile"><span>Domino's Pizza</span></div></a>
    
       
                 <a href="momo.php"><div id="momo-tile"><span>Momo's World</span></div></a>
</div> 
</div>                
<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geo-location is not supported by this browser.";
  }
}

function showPosition(position) {
  /*x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;*/
   var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center= "+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>
<footer class="panel-footer">
   <div class="container">
        <div class="row">
            <section >
              <span>Hours:</span><br>
              	Sun-Thrus:11am-9pm<br>
              	Sat closed
               <hr>
             </section>  
             <section class="right">
              	<span>Address:</span><br>
              	71 D Mahatma Gandhi Road<br>
              	Shahid Nagar, New Delhi
              	<hr>
             </section> 
            <div class="text-center">&copy;copyright sandy 2020</div>
    </div>
</footer> 
</body>
</html>
