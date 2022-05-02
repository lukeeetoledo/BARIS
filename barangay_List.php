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
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom" style="color: #659DBD;"><img src="img/FINAL.png" alt="" width="60" height="60"><span style="text-shadow: 1px 1px 2px rgba(0, 0,0, 1)">BaRIS</span> </div>
            <div class="list-group list-group-flush my-3" >
            <button class="btn btn-success" onclick="window.location.href='homepage_loader.php';" style="margin-left: 10px; margin-right: 10px;">Switch to Resident</button><hr>
                <div id="dashboard"> <a href="barangay_Dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Dashboard</a></div>
                <div id="dashboard"> <a href="barangay_Viewpost.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center"></i>Viewpost</a></div>
                <div id="dashboard"> <a href="barangay_Permit_request.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Document Requests</a></div>
                <div id="dashboard"> <a href="barangay_List.php" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center">Resident List</a></div><hr>
                <button class="btn btn-dark" onclick="window.location.href='API/API_logout.php';" style="margin-left: 10px; margin-right: 10px;">Log Out</button>
            </div>
        </div>
        </center>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>
           
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

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
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                            <p class="fs-5">Total Residents</p>    
                            <h3 class="fs-2" id="count"></h3>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                        <div class="container" style="border:solid; margin-top:20px">
                                <div class="row">
                                        <div style="margin-bottom: 15px; padding: 10px;background-color:#bd8565;font-weight: bold;"><h1>Resident Profiling</h1></div>    
                                        <form action="API/API_profiling.php" method="POST" enctype='multipart/form-data'>
                                            <h3>Resident information</h3>
                                            <div class = "column" style="">
                                                <input style = "margin-top:10px;  margin-bottom: 10px"  name="prof_Fname" class="form-control" id="prof_Fname" minlength="4" required placeholder="First Name">             
                                                <input  style = "margin-bottom: 10px" name="prof_Lname" class="form-control" id="prof_Lname" minlength="4" required placeholder="Last Name">            
                                                <input  style = " margin-bottom: 10px" name="prof_Mname" class="form-control" id="prof_Mname" minlength="4" required placeholder="Middle Name"> 
                                                    <div class="input-group date" id="datepicker">
                                                        <input type="text" name="prof_Birthdate" class="form-control" required placeholder="Birth Date">
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-white d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                <div style="margin-top: 10px;">
                                                    <label for="Sex">Sex: </label>
                                                    <select name="prof_Sex" id="prof_sex">
                                                        <option name="prof_Female" value="Male">Male</option>
                                                        <option name="prof_Male" value="Female">Female</option>
                                                    </select>
                                                </div>
                                                <input style = " margin-bottom: 10px"  name="prof_Address" class="form-control" id="prof_Address" minlength="4" required placeholder="Address">          
                                                <div style="margin-top: 10px;">
                                                    <label for="prof_Addressstatus">Address Status </label>
                                                    <select name="prof_Addressstatus" id="prof_Addressstatus">
                                                        <option name="prof_Onwed" value="Onwed">Owned</option>
                                                        <option name="prof_Rent" value="Rent">Rent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class = "column" style=""  >
                                            <h3 >Family Composition</h3>
                                                <input  style = "  margin-bottom: 10px" name="prof_Fathername" class="form-control" id="prof_Fathername" minlength="4" required placeholder="Father's Name">          
                                                <input style = "  margin-bottom: 10px"  name="prof_Fatheroccu" class="form-control" id="desprof_Fatheroccucription" minlength="4" required placeholder="Father' Occupation">         
                                                <input  style = "  margin-bottom: 10px" name="prof_Mothername" class="form-control" id="prof_Mothername" minlength="4" required placeholder="Mothers's Name">         
                                                <input style = "  margin-bottom: 10px"  name="prof_Motheroccu" class="form-control" id="prof_Motheroccu" minlength="4" required placeholder="Mothers's Occupation">            
                                            </div> 
                                            <div class="form-group">
                                            <button style = "width: 35%; margin-top:10px" type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                        </form>
                                </div>    
                        </div>
           

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">List of Residents.</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="overflow-x:auto;">
                                <table class="table table-striped" id="loadData">
                                    <thead>
                                        <tr style="background-color: #bd8565;">
                                        <th>Resident ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Birth Date</th>
                                            <th>Sex</th>
                                            <th>Address</th>
                                            <th>Address Status</th>
                                            <th>Father's Name</th>
                                            <th>Father's Occupation</th>
                                            <th>Mother's Name</th>
                                            <th>Mothers's Occupation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
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
  $(document).ready(function(){
      loadMoreData();
      function loadMoreData(page){
        $.ajax({
          url : "API/API_load_profiling_data.php",
          type: "POST",
          cache:false,
          data:{page_no:page},
          success:function(data){
            if (data) {
              $("#pagination").remove();
              document.getElementById("count").innerHTML = data.slice(-1); 
              $("#loadData").append(data);
            }else{
              $(".loadbtn").prop("disabled", true);
              $(".loadbtn").html('That is All');
            }
          }
        });
      }
      
      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('Loading...');
        var pId = $(this).data("id");
        loadMoreData(pId);
      });
  });
</script>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>
