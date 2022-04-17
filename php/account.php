<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$host="localhost";
$user="root";
$password="";
$db="db";
session_start();
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="select * from akonti where username='".$username."' AND password='".$password."' ";
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);
	if($row["usertype"]=="user")
	{	
		$_SESSION["username"]=$username;
		header("location:product.php");
	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location:adminhome.php");
	}
	else
	{
		echo "username or password incorrect";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

.header {
  overflow: hidden;
  background-color: whitesmoke;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 2px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: black;
  color: blue;
		transition: 0.6s ease;
		color: white;
		animation: jump-out 0.6s ease forwards;
	}


.header-right {
  float: right;
  margin-left:1290px;
  margin-bottom: 20px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

</style>
</head>

<body>
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/account.css">
    <?php
  include("../html/header.html");
  ?>
    
        </div>
    
    
        <div class="account-page">
          <div class="container">
              <div class="row">
                  <div class="col-2">
                      <div class="from-container">
                          <div class="form-btn">
                          <span onclick="login()">Login</span>
                          <span onclick="register()">Register</span>
                          <hr id="Indicator">
                      </div>
                      <form action="#" id="LoginForm" method="POST">
                          <input type="text" name="username"   placeholder="Username" id="username-login">
                          <input type="password" name="password"  id="password-login" placeholder="Password">
                          <button type="submit" class="btn" onclick="Loginbtn()"    >Login</button>
                          <a href="">Forget password</a>
                      </form> 
                      <form action="InsertAkont.php" id="RegForm" method="POST">
                          <input type="text" name="username"  placeholder="username" id="username" >
                          <input type="email" name="email"  placeholder="email" id="email" >
                          <input type="password" name="password" placeholder="Password" id="pass-reg">
                          <button type="submit" class="btn" onclick="Registerbtn()" >Register</button>
                      </form>
                   </div>
                  </div>
              </div>
          </div>
      </div>
    <div class="footer2">
        <div class = "contact">
          <h1>Follow us on : Facebook  & Twitter & Instagram</h1>
        </div>
         <br>
      
         <div class="images">
            <a href="https://www.facebook.com/drin.mehmeti.79" target ="_blank">
              <img src="../images/facebook1.png" alt="" width="100px"; height="100px">
            </a>
            <a href="https://www.twitter.com/GranitDemirii" target ="_blank">
              <img src="../images/twitter1.png" alt="" width="90px"; height="90px">
            </a>
            <a href="https://www.instagram.com/granitdemiri" target ="_blank">
              <img src="../images/instagram1.png" alt="" width="100px"; height="100px"> 
            </a>
           </div>
       </div>
      
       
      </div>

      
      </div>

      <script> 
         var LoginForm=document.getElementById("LoginForm");
var RegForm=document.getElementById("RegForm");
var Indicator=document.getElementById("Indicator");

    function register(){
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(110px)";
    }
    function login(){
        RegForm.style.transform="translateX(400px)";
        LoginForm.style.transform="translateX(400px)";
        Indicator.style.transform="translateX(0px)"
    }
    </script>
    <!--
function Loginbtn(){
    var name = document.getElementById('username-login').value;
    var passwordL = document.getElementById('password-login').value;
   
    const regexName =  /^[A-Z]{1}.{2,15}$/;
    const regexPasswordLogin = /^[A-Z]{1}[a-zA-Z]{2,15}([0-9]{3}$)/;
  
       if(!regexName.test(name)){
        alert("Write another name!");
        return false;
    }
    else if(!regexPasswordLogin.test(passwordL)){
        alert("Write another password!");
        return false;
    }
    else{
        alert("Login successfully!");
        return true;
    }
}
function Registerbtn(){ 
    var username = document.getElementById('Username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('pass-reg').value;

    const regexUsername = /^[A-Z]{1}.{2,15}$/;
    const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const regexPassword = /^[A-Z]{1}[a-zA-Z]{2,15}([0-9]{3}$)/;

      if(!regexUsername.test(username)){
        alert("Write another username!");
        return false;
    }
    else if(!regexEmail.test(email)){
        alert("Write another email!");
        return false;
    }
    else if(!regexPassword.test(password)){
        alert("Write another password!");
        return false;
    }
    else{
        alert("Register successfully!");
        return true;
    }
}
      </script>
    -->
      </body>