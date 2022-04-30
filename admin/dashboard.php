<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("location:login.php");
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
    <link rel="stylesheet" href="style.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #bd8565;border:5px outset #bd8565;">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold border-bottom" style="color: #659DBD;"><img src="../img/FINAL.png" alt="" width="60" height="60"><span style="text-shadow: 1px 1px 2px rgba(0, 0,0, 1)">BaRIS</span> </div>
            <div class="list-group list-group-flush my-3" >
                <div id="dashboard"> <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center" >Application List</a></div>
                <div id="dashboard"> <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" style="display:flex; color:white; justify-content:center" ></i>Barangay List</a></div>
               
                <button class="btn btn-dark" onclick="window.location.href='logout.php';" style="margin-top:40vh; margin-left: 10px; margin-right: 10px;">Log Out</button>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2" id="count"></h3>
                                <p class="fs-5">Pending Application</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">For Approval</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="overflow-x:auto;">
                                <table class="table table-striped" id="loadData">
                                    <thead>
                                        <tr style="background-color: #bd8565;">
                                            <th>Process_ID</th>
                                            <th>Requestor_ID</th>
                                            <th>Requestor_Position</th>
                                            <th>Residential_Status</th>
                                            <th>ID#1</th>
                                            <th>ID#2</th>
                                            <th>Billing</th>
                                            <th>Selfie</th>
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
    <!-- /#page-content-wrapper -->
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
          url : "load_data.php",
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