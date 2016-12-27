@extends('config')
<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.blade.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
<audio id="myaudio" loop="true" autoplay="true" src="/rsc/001.mp3"></audio>
<script>
  var audio = document.getElementById("myaudio");
  audio.volume = 0.03;
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QuizMe! Login</title>
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="/css/style.css" type="text/css" />
</head>
<body>

<div class="container">

 <div id="login-form">
    <form method="post">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <center><h2 class=""><img src="/rsc/bulbfinal.png" width="30%" height="30%"><br /><img src="/rsc/quizMe.png" width="40%" height="40%"></h2></center>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> Please login
                </div>  
             </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="username" name="username" class="form-control" placeholder="Username" value="" maxlength="40" />
                </div>
                <span class="text-danger"></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="password" class="form-control" placeholder="Password" maxlength="15" />
                </div>
                <span class="text-danger"></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a class="btn btn-block btn-primary" name="btn-login" href="{{ url('welcome') }}">Sign In</a>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Sign Up Here...</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>