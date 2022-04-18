<?php 
include 'API_user_profile.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="CSS/homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top navbar-light bg-white">
    <div class="container ">
      <a class="navbar-brand bg-white" href="#">
        <img class="logo" src="img/asdw.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item active"> <a class="nav-link" href="homepage.php"><strong>Home</strong> </a> </li>
          <li class="nav-item"><a class="nav-link" href="userprofile.php"> <strong>Profile</strong> </a></li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" data-bs-toggle="dropdown"> <strong>Documents</strong> </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Barangay Clearance</a></li>
              <li><a class="dropdown-item" href="#"> Certificate of Indigency </a></li>
              <li><a class="dropdown-item" href="#"> Business Permit </a></li>
              <li><a class="dropdown-item" href="#"> Cedula </a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="#" data-bs-toggle="dropdown"> <strong>Services</strong> </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
          </li>
          <a class="btn btn-primary ms-lg-3" href="API_logout.php">Logout</a>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container">
        <div id="content" class="content p-0">
            <div class="profile-header">
                <div class="profile-header-cover"></div>
        
                <div class="profile-header-content">
                    <div class="profile-header-img">
                        <img class="profilepic"src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                    </div>
        
                    <div class="profile-header-info">
                        <h4 class="m-t-sm"><?php echo $full_Name ?></h4>
                        <a href="#" class="btn btn-xs btn-primary mb-3">Request for Changes</a>
                        <a href="#" class="btn btn-xs btn-primary mb-3">Request for Verification</a>
                    </div>
                </div>
        
                <ul class="profile-header-tab nav nav-tabs">
                    
                    <li class="nav-item"><a href="#profile-about" class="nav-link active show" data-toggle="tab">ABOUT</a></li>
                    
                </ul>
            </div>
        
            <div class="profile-container">
                <div class="row row-space-20">
                    <div class="col-md-8">
                        <div class="tab-content p-0">
                            <div class="tab-pane active show" id="profile-about">
                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field">First Name</td>
                                            <td class="value">
                                                <div class="m-b-5">
                                                    <b><?php echo $f_Name ?></b> <br />
                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Middle Name</td>
                                            <td class="value">
                                                <div class="m-b-5">
                                                    <b><?php echo $m_Name ?></b> 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Last Name</td>
                                            <td class="value">
                                                <b><?php echo $l_Name ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Suffix</td>
                                            <td class="value">
                                                <div class="m-b-5">
                                                    <b><?php echo $suffix ?></b> <br />
                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Contact Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field">Mobile Phones</td>
                                            <td class="value">
                                                <b><?php echo $c_number ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Email</td>
                                            <td class="value">
                                                <b><?php echo $email ?></b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field">Region</td>
                                            <td class="value">
                                                <b><?php echo $region ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Province</td>
                                            <td class="value">
                                                <b><?php echo $province ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">City/Municipality</td>
                                            <td class="value">
                                                <b><?php echo $city_Mun ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Barangay</td>
                                            <td class="value">
                                                <b><?php echo $barangay ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Block/Lot/Unit No.</td>
                                            <td class="value">
                                                <b>Block 71 Lot 22</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th colspan="2">BASIC INFORMATION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="field">Birth of Date</td>
                                            <td class="value">
                                                <b><?php echo $birthdate ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Sex</td>
                                            <td class="value">
                                                <b><?php echo $sex ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Username</td>
                                            <td class="value">
                                                <b><?php echo $user_Name ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Password</td>
                                            <td class="value" >
                                                <b>******</b>
                                                
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <ul class="profile-info-list">
                            <li class="title">PERSONAL INFORMATION</li>
                            <li>
                                <div class="field">Occupation:</div>
                                <div class="value">UXUI / Frontend Developer</div>
                            </li>
                            <li>
                                <div class="field">Skills:</div>
                                <div class="value">C++, PHP, HTML5, CSS, jQuery, MYSQL, Ionic, Laravel, Phonegap, Bootstrap, Angular JS, Angular JS, Asp.net</div>
                            </li>
                            <li>
                                <div class="field">Birth of Date:</div>
                                <div class="value">1989/11/04</div>
                            </li>
                            <li>
                                <div class="field">Country:</div>
                                <div class="value">San Francisco</div>
                            </li>
                            <li>
                                <div class="field">Address:</div>
                                <div class="value">
                                    <address class="m-b-0">
                                        Twitter, Inc.<br />
                                        1355 Market Street, Suite 900<br />
                                        San Francisco, CA 94103
                                    </address>
                                </div>
                            </li>
                            <li>
                                <div class="field">Phone No.:</div>
                                <div class="value">
                                    (123) 456-7890
                                </div>
                        </ul>
                    </div>
                -->
                </div>
            </div>
        </div>
        </div>
        
</body>
</html>