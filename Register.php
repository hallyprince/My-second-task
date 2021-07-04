<?php

if(isset($_POST['Submit'])){

    
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: login.php');
   

    // Declaration of Variable
    $username = $_POST['username'];
    $email =    $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    // Validate  username
    if(empty($username)){
      echo "A username is requried <br/>";
    } 
       if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
           echo  "Username can only contain letters, number.";
       }
    
    // check email
    if(empty($email)){
        echo "An email is required <br/>";
    } 
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
         echo 'email must be a valid email address';
        }
    
    // check password
    if(empty($password)){
        echo "Password is required <br/>";
    }
    if($password != $cpassword){
        echo "Password do not match";

    }
   
} else{
    echo $_SESSION["User Registered successfully. "];
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrationt</title>
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
<form class="form" action="Register.php" method ="POST"  >

     <h1 class= "login-title"> Registration </h1>
       <input type="text" class="login-input" name="username" placeholder="Username">
       <input type="text" class="login-input" name="email" placeholder="Email">
       <input type="password" class="login-input" name="password" placeholder="Password">
       <input type="password" class="login-input" name="cpassword" placeholder=" Confirm Password">
       <input type="submit" name="Submit" value="Register" class= "login-button">
       <p class= "link"> Have an account* <a href="Login.php">Login Here</a></p>
    
   </form>
   </div> 
</body>
</html>