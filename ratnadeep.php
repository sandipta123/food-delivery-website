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
background: linear-gradient(rgba(0,0,0,0.65),rgba(0,0,0,0.38),rgba(0,0,0,0)), url('C:\Users\SATYAKI\Desktop\iwpproject\multimedia\hotel-ratnadeep-jalpaiguri.jpg');
background-size:cover; 
width: 100%;
height: 100%;
background-repeat: no-repeat;
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
font-weight:normal;
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
.checked {
  color: orange;
}
#menu-tile span {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  text-align: center;
  font-size: 1.1em;
  text-transform: uppercase;
  background-color: #000;
  color: #fff;
  opacity: 0.8;
 } 
/* #category-tile {
  position: absolute;
  bottom:500px;
  left:500px;
  border: 2px solid #3F0C1F;
  overflow: hidden;
  width: 250px;
  height: 250px;
  margin: 0 auto 15px;
 }
 #category-tiles{
  position: absolute;
  left:500px;
  bottom: 200px;
  border: 2px solid #3F0C1F;
  overflow: hidden;
  width: 250px;
  height: 250px;
  margin: 0 auto 15px;
 }

 #category-tile:hover , #category-tiles:hover {
  box-shadow: 0 1px 5px 1px #cccccc;
 }*/

 #category-tile {
 	position: relative;
 	border: 2px solid #3F0C1F;
 	overflow: hidden;
 	width: 200px;
 	height: 200px;
 	margin: 0 auto 15px;
 }
 #category-tile span {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  text-align: center;
  font-size: 1.1em;
  text-transform: uppercase;
  background-color: #000;
  color: #fff;
  opacity: 0.8;
 }
 #category-tile:hover {
 	box-shadow: 0 1px 5px 1px #cccccc;
 }
 #menu-categories-tile + div {
 	margin-bottom:50px;
 }
 .glyphicon{
  color: darkorange;
}
</style>
</head>
<body>
<ul>
   <li><a herf=""><span class="glyphicon glyphicon-home"><abbr title="Home"></abbr></span></a></li>
   <li><a herf=""><span class="glyphicon glyphicon-cutlery"><abbr title="Menu"></abbr></span></a></li>
   <li><a herf=""><span class="glyphicon glyphicon-shopping-cart"><abbr title="Cart"></abbr></span></a></li>
   <li><a herf=""><span class="glyphicon glyphicon-phone Contact"><abbr title="Contact Us"></abbr></span></a></li>
</ul>
 <h1>RATNADEEP</h1>
 <h4>Ratings: 4.2
 <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></h4>
 <h4>Address: Club Road, Opposite State Bank Of India (Main Branch), Jalpaiguri, West Bengal- 735101<br>
Phone: 03561 222 501</h4>
<h1> </h1>
<div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\Skillet-Chicken-Greenbeans_-3.jpg" alt="lunch">
                          <span>rice ₹70</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\Red-Lentil-Dhal-in-a-pan.jpg" alt="lunch">
                          <span>dal ₹120</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="250" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\Soft-Homemade-Naan-500x500.jpg" alt="lunch">
                          <span>naan ₹40</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\Paneer-Butter-Masala-678x381.jpg" alt="lunch">
                           <span>Paneer Butter masala ₹180</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\unnamed.jpg" alt="lunch">
                           <span>chicken Curry ₹180</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\mild-fish-curry-recipe_733822723.jpg" alt="lunch">
                           <span>Fish Curry ₹140</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                      <a href="single-categories.html">
                        <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\biryani.5_.jpg" alt="lunch">
                           <span>Biryani ₹180</span>
                        </div>
                      </a>
                    </div> 
                    <div id="category-tile">
                          <img width="200" height="200" src="C:\Users\SATYAKI\Desktop\iwpproject\multimedia\Restaurant-Style-Paneer-Tikka-recipe.jpg" alt="lunch">
                           <span>paneer tikka ₹180</span>
                        </div>
                      </a>
                    </div>

              
</body>
</html>