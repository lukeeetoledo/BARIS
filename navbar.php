<?php 
      session_start();
      $style = "";
      if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_Type']) && !isset($_SESSION['barangay_ID'])){
      header("location:index.php");
  }
  if($_SESSION['user_Type']!="3"){
    $style = "style = 'display:none'";
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="CSS/navbar.css" />
 <title>Document</title>
 </head>
 <body>
 <nav class="navbar">
 <!-- LOGO -->
 <div class="logo"> <img class="logo" src="img/BaRIS_Logo.png" alt="BaRIS_Logo"></div>
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="homepage.php">Home</a></li>
 <li><a href="user_profile.php">Profile</a></li>
 <li class="head_dropdown">
 <a href="#">Documents</a>
 <!-- DROPDOWN MENU -->
 <ul class="dropdown">
 <li><a href="user_barangaycertificate.php">Barangay Certificate</a></li>
 <li><a href="user_barangayclearance.php">Barangay Clearance</a></li>
 <li><a href="user_certificateindingency.php">Certificate of Indigency</a></li>
 <li><a href="user_businesspermit.php">Business Permit</a></li>
 <li><a href="user_cedula.php">Cedula</a></li>
 </ul>
 </li>
 <li class="head_dropdown">
  <a href="#">Services</a>
  <ul class="dropdown">
 <li><a href="services_complain.php">Report a Complaint</a></li>
 <li><a href="services_support.php">Request for Support</a></li>
 </ul>
</li>
 <li><a href="/">History</a></li>
 <li <?php echo $style; ?>><button class="btn btn-success" onclick="window.location.href='barangay_loader.php';">Switch to Barangay</button></li>
 <li><button class="btn btn-info" onclick="window.location.href='API/API_logout.php';">Log Out</button></li>
 </div>
 </ul>
 </nav>
 
 </body>
</html>