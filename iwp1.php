<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
<style>
  body{
    background: url("multimedia/fast.jpg");
    background-size:cover; 
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
  }
  h1{
    font-size: 40px;
    color: LemonChiffon;
    text-shadow: 3px 3px  MediumOrchid;
  }
  label,input{
    color: coral;
    padding: 10px;
    position: center;
    font-size:  17px;
    margin: 7px;
  }
  input{
    background-color: coral;
    padding: 10px;
    width:40%;
  }
  .container{
    margin: auto;
    width: 60%;
    text-align: center;
  }
  hr{
    background-color: black;
  }
  .signup{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    background-color: green;
}
</style>
</head>
<body>
<script type="text/javascript">
function newDoc()
{
  window.location.assign("iwp.php")
}
</script>  
<div class="container">
  <form action="iwp1.php" method="get">
    <h1>Sign up</h1><hr>
    <p><input type="text" placeholder="Enter first name" name="fname" required></p>
    <p><input type="text" placeholder="Enter last name" name="lname" required></p>
    <p><input type="text" placeholder="Enter username" name="uname" required></p>
    <p><input type="text" placeholder="Enter Phone number" name="phno" required> </p>
    <p><input type="text" placeholder="Enter email" name="email" required> </p>
    <p><input type="password" placeholder="Enter Password" name="psw" required></p> 
    <p><input type="password" placeholder="Re-enter Password" name="rpsw" required></p>
    <input type="button" class="signup" name="signup" value="Sign Up" onclick="newDoc()">
  </form>
</div>

<?php

if(isset($_GET["signup"]))
{
    $fname= $_GET["fname"];
    $lname= $_GET["lname"];
    $uname= $_GET["uname"];
    $phno= $_GET["phno"];
    $email= $_GET["email"];
    $psw= $_GET["psw"];
    $rpsw= $_GET["rpsw"];
    $data= $_GET;

    echo $fname;

    $server = "localhost";
    $username = "root";
    $password = "";
    
    $connect = mysqli_connect($server, $username, $password, 'iwp_project');
    if(!$connect)
    {
        die(mysqli_connect_error());
    }
    else{
      echo "connected";
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $query="INSERT INTO  user_data(fname,lname,uname,phno,email,psw) values('$fname','$lname','$phno','$email','$psw')";


    $result=mysqli_query($connect,$query);
    echo "<script>
     newDoc();
     </script>";
    mysqli_close($connect);
}
?>

</body>
</html>