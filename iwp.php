<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{
font-family: Arial, Helvetica, sans-serif;
background:url("multimedia/the.jpg") no-repeat;
background-size:cover; 
width: 100%;
height: 100%;
background-repeat: no-repeat;
background-attachment: fixed;
}

form
{
border: 3px solid red;
background:linear-gradient(to right, rgba(255,0,0,0),rgba(255,64,0,1));
width: 40%;
text-align: center;
margin: auto;

padding: 100px;
}

@font-face
{
font-family: Gloss_And_Bloom;
src: url("C:/Users/SATYAKI/Desktop/assets/Gloss_And_Bloom.ttf");
}

h1
{
font-family: Gloss_And_Bloom;
text-align: center;
color: red;
text-shadow: 2px 2px black;
font-size:100px;
}

input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: palegoldenrod;
}

marquee{
  color: black;
  text-shadow: 2px 2px yellow;
  font-size: 25px;
  font-style: italic;
}

.button, .signup {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  background-color: green;
}

.signup{
  background-color:red;
  color: white; 
  padding: 14px 20px;

}

.button:hover
{
  opacity: 0.8;
  background-color: grey;
}

.cancelbtn
{
  width: auto;
  padding: 10px 18px;
  background-color: deeppink;
}

.imgcontainer
{
  text-align: center;
  margin: auto;
  width: 200%;
  height: 200%;
  margin-left: auto;
  margin-right: auto;
}

img.avatar
{
  width: 10%;
  border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
}

.container
{
  padding: 16px;
}
a:link,a:visited
{
  text-decoration: none;
  color: white;
}

span.psw
{
  padding-top: 16px;
  color: white;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px)
{
  span.psw
  {
     display: block;
     float: none;
  }
  .cancelbtn
  {
     width: 100%;
  }
}
</style>
</head>
<body>

<h1>Welcome to SAS</h1>
<marquee width="100%" height="50px" direction="right" behaviour="scroll" scrollamount="15">Order your favourite food ,at any time ,any where!!!</marquee>
<script type="text/javascript">
  function newDoc() {
  window.location.assign("iwp1.php")
}
</script>
<script type="text/javascript">
function newDoc2()
{
  window.location.assign("iwp3.php")
}
</script>
<form action="iwp.php" method="get">
  <div class="imgcontainer">
    <img src="multimedia/Capture.PNG"  class="avatar">
  </div>

    <p><input type="text" placeholder="Enter Username" name="uname" required><p>
    <br>
    <p><input type="password" placeholder="Enter Password" name="psw" required><p>

    <input class="button" type="button" name="login" value="Login">
    <br>
    <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
 
   <br> 
   <input  type="button" class="signup" value="Sign Up" onclick="newDoc()">
  </div>  <br>
  <div class="container" style="background-color:lightseagreen;">
    <span class="psw" > <a href="#">Forgot password?</a></span>
  </div>
</form>

<?php
if(isset($_GET['login']))
{

  $uname= $_GET['uname'];
  $psw= $_GET['psw'];
  echo $uname;
  $connect = mysqli_connect('localhost', 'root','', 'iwp_project');
  if($connect)
  {
      die(mysqli_connect_error());
  }

  $query = "SELECT psw FROM user_data WHERE uname=$uname";
  $result = mysqli_query($connect, $query);
  $r=mysqli_fetch_assoc($result);
  $data = $r['psw'];

  echo "<br>";
  echo $data;
  if($data===$psw)
  {
    echo "<script>
    newDoc2();
    </script>";
  }
}
else
{
  echo "error";
}
?>
</body>
</html>


