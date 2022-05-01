<?php 
include 'API/API_user_profile.php';
?>

<!DOCTYPE html>
<html lang="en">
<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};
</script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div w3-include-html="navbar.php"></div>
<script>
includeHTML();
</script>
<center style="background-color:#e4e6eb">
    <div class="container" style=" padding-top: 108px !important; ">
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
                        <a href="barangay_registration.php" class="btn btn-xs btn-primary mb-3">Register my Barangay</a>
                    </div>
                </div>
        
                <ul class="profile-header-tab nav nav-tabs">
                    
                    <li class="nav-item"><a href="#profile-about" class="nav-link active show" data-toggle="tab">ABOUT</a></li>
                    
                </ul>
            </div>
      
            <div class="profile-container" style=" margin: auto;background-color: #659DBD;padding:30px;border-radius:10px;">
                <div class="row row-space-20">
                    <div class="col-md-12">
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
                                            <td class="value" style="text-align: right;">
                                                <div class="m-b-5">
                                                    <b><?php echo $f_Name ?></b> <br/>  
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Middle Name</td>
                                            <td class="value" style="text-align: right;">
                                                <div class="m-b-5">
                                                    <b><?php echo $m_Name ?></b> 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Last Name</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $l_Name ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Suffix</td>
                                            <td class="value" style="text-align: right;">
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
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $c_number ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Email</td>
                                            <td class="value" style="text-align: right;">
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
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $region ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Province</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $province ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">City/Municipality</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $city_Mun ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Barangay</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $barangay ?></b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Block/Lot/Unit No.</td>
                                            <td class="value" style="text-align: right;">
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
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $birthdate ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Sex</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $sex ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Username</td>
                                            <td class="value" style="text-align: right;">
                                                <b><?php echo $user_Name ?></b>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="field">Password</td>
                                            <td class="value" style="text-align: right;">
                                                <b>******</b>
                                                
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </center>
</body>
</html>