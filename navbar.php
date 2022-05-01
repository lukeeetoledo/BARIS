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
 <div class="logo"> <img class="logo" src="img/asdw.png" alt="BaRIS_Logo"></div>
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="homepage.php">Home</a></li>
 <li><a href="userprofile.php">Profile</a></li>
 <li class="services">
 <a href="#">Documents</a>
 <!-- DROPDOWN MENU -->
 <ul class="dropdown">
 <li><a href="/">Barangay Clearance </a></li>
 <li><a href="/">Certificate of Indigency</a></li>
 <li><a href="/">Business Permit</a></li>
 <li><a href="/">Cedula </a></li>
 </ul>
 </li>
 <li><a href="/">Pricing</a></li>
 <li><a href="/">Contact</a></li>
 <li><button class="btn btn-success" onclick="window.location.href='barangay_loader.php';">Switch to Barangay</button></li>
 <li><button class="btn btn-info" onclick="window.location.href='API/API_logout.php';">Logout</button></li>
 
 </div>
 </ul>
 </nav>
 </body>
</html>