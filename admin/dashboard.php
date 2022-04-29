<?php  
session_start();

if(!isset($_SESSION['admin'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title></title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="../img/FINAL.png" alt="" width="60" height="60">BARIS</div>
            <div class="list-group list-group-flush my-3">

                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-project-diagram me-2"></i>Barangay Application</a>
                <button class="btn btn-dark" onclick="window.location.href='logout.php';" style="margin-top:55vh;">Log Out</button>
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
                                <h3 class="fs-2">1</h3>
                                <p class="fs-5">Pending Application</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">For Approval</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Valid ID</th>
                                    <th scope="col">Valid ID</th>
                                    <th scope="col">Proof of Billing</th>
                                    <th scope="col">Selfie</th>
                                    <th scope="col"> Decision</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><a href="img/crisjahn.jpg">
                                            <img style="max-width: 100%;" src="" alt="1st Valid ID">
                                        </a></td>
                                    <td><a href="img/crisjahn.jpg">
                                            <img style="max-width: 100%;" src="" alt="2nd Valid ID">
                                        </a></td>
                                    <td><a href="img/crisjahn.jpg">
                                            <img style="max-width: 100%;" src="" alt="Proof of Billing">
                                        </a></td>
                                    <td><a href="img/crisjahn.jpg">
                                            <img style="max-width: 100%;" src="" alt="Selfie">
                                        </a></td>
                                    <td><button class="btn btn-success" type="button" style="margin:5px">Accept</button><button class="btn btn-danger" type="button" style="margin:5px">Reject</button></td>

                                </tr>

                            </tbody>
                        </table>
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