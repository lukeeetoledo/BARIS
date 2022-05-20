<?php 

      session_start();
      if(!isset($_SESSION['user_ID']) && !isset($_SESSION['user_Type']) && !isset($_SESSION['barangay_ID'])){
      header("location:index.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="CSS/barangayside.css" />
    

    <title>Resident List</title>
</head>

<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <center>
        <div id="sidebar-wrapper" style="background-color: #bd8565;">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom" style="color: #659DBD;"><img src="img/Logo_192.png" alt="" width="60" height="60"><span style="text-shadow: 1px 1px 2px rgba(0, 0,0, 1)">BaRIS</span> </div>
            <div class="list-group list-group-flush my-3" >
            <button class="btn btn-success" onclick="window.location.href='homepage_loader.php';" style="margin-left: 10px; margin-right: 10px;">Switch to Resident</button><br>
            <button class="btn btn-dark" onclick="window.location.href='API/API_logout.php';" style="margin-left: 10px; margin-right: 10px;">Log Out</button><hr>
            <div id="dashboard"> <a href="barangay_Dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Dashboard</a></div>
                <div id="dashboard"> <a href="barangay_Viewpost.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center"></i>Viewpost</a></div>
                <div id="dashboard"> <a href="barangay_List.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Resident List</a></div>
                <div id="dashboard"> <a href="barangay_Services.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Services</a></div>
                <div id="dashboard"> <a href="barangay_Permit.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Documents</a></div>
                <div id="dashboard"> <a href="barangay_Permit_request.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Document Requests</a></div>
                <div id="dashboard"> <a href="barangay_settings.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Settings</a></div>
            </div>
        </div>
        </center>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Resident List</h2>
                </div>
            </nav>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Barangay Official
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="index.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                    </div>
                </div>
            <div class="container" id="Barangay_Certificate" style="border:solid; margin-top:20px">
            <form action = "API/API_post_QR.php" method="POST" enctype='multipart/form-data'>
                <div style="margin-bottom: 15px; padding: 10px;background-color:#bd8565;font-weight: bold;"><h1 style="display: inline-block;">Insert QR code for Payment Destination</h1></div>
                <label for="doc_Cedulacpy">Upload Gcash QR Code<span>*</span></label>
                    <input style= "width: 100%; border: 1px solid #ccc;" type="file" name="payment_media[]" id="payment_media" enctype='multipart/form-data' multiple required/>        
                    <button style = "width: 100%; margin-top:10px" type="submit"  name ="submit_qr" class="btn btn-primary">Add</button>
            </form>    
        </div>
                
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    
</body>

</html>
<script type="text/javascript">
    $(function() {
        $('#datepicker1').datepicker();
    });
</script>


