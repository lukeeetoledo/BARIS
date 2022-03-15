<?php
session_start();
if (isset($_SESSION["user_ID"])) {
  header("Location: home.php");
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="API_login.php" method="POST">
        <a href="index.php">Back</a>
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="txt_Username" placeholder="Enter Your Email or Username" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" name="txt_Password" placeholder="Enter Your Password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="Login">
        </div>
        <div class="text"><a href="#">Forgot password?</a></div>
            
              <div class="text sign-up-text">Don't have an account? <a href="signup.php">Signup Now</a></div>
      </form>
        
    
    </div>
  </body>
</html>

