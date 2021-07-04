<?php


if(isset($_POST['Submit'])){
 

    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: home.php');
   


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 body{
        background: #3e4144;
    }
.form{
         width: 300px;
         padding: 30px 25px;
         margin: 50px auto;
         background: white;
}

h1.login-title{
        color: #660;
        margin: 0px auto 25px;
        font-size: 25px;
        font-weight: 300;
        text-align: center; 
        
}
.login-input{
         width: calc(100% - 23px);
         font-size: 15px;
         padding: 10px; 
         margin-bottom: 25px;
         border: 1px solid #ccc;
         height: 25px;
         
     }
 .login-input:focus{
         border-color: #6e8095;
         outline: none;
     }
 .login-button{
         color: #fff;
         background: #55a1ff;
         border: 0;
         outline:0;
         width: 100%;
         height: 50px;
         font-size:16px;
         text-align: center;
         cursor: pointer;
     }
     .link{
         color: #666;
         font-size: 15px;
         text-align: center;
         margin-botton: 0px;
     }
     .link a{
         color: #666;
     }
     h3{
         font-weight: normal;
         text-align: center;
     }
    </style>
</head>
<body>
<div>
<form  class="form" action= "login.php" method ="POST"  >

      <h1 class= "login-title">Login </h1> 
       <input type="text" class="login-input" name="username" placeholder="Username" >
       <input type="password" class="login-input" name="password" placeholder="Password">
       <input type="submit" name="Submit" value="Login"  class= "login-button" >
       <p class="link" >Don't have an account? <a href="Register.php"> Register now</a></p>
    
   </form>
   </div>
    
</body>
</html>