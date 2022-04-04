<?php
include 'API_region.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="CSS/signup.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</head>

<body>
    <div class="container">
        <form action="API_signup.php" method="POST">
            <div class="form-content">
                <a href="index.php">Back</a>
                <div class="title"> Account Registration</div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="txt_Fname" placeholder="Enter your first name" required>
                        <span class="details">Last Name</span>
                        <input type="text" name="txt_Lname" placeholder="Enter your last name" required>
                        <span class="details">Middle Name</span>
                        <input type="text" name="txt_Mname" placeholder="Enter your middle name" required>


                        <div class="form-wrapper" required style="display: inline-block;">
                            <select name="txt_Suffix" class="civilstatus">
                                <option disabled selected>Suffix</option>
                                <option value="Jr.">Jr.</option>
                                <option value="Sr.">Sr.</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                            </select>
                        </div>
                        <div class="form-wrapper" required style="display: inline-block;margin-left:75px">
                            <select name="txt_Civilstatus" class="civilstatus">
                                <option disabled selected>Civil Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        <div class="input-box">
                        <span class="details">Religion</span>
                        <input type="text" name="txt_Religion" placeholder="Enter your religion" required>
                    </div>
                    </div>

                    <div class="input-box">
                        <span class="details">Address</span>
                        <!-- REGION -->
                        <?php echo $region_combo_box; ?>
                        <!-- PROVINCE -->
                        <div id="province" class="form-wrapper" required>
                            <select name="txt_Province" class="civilstatus">
                                <option disabled selected>Province</option>
                            </select>
                        </div>
                        <!-- CITYMUNICIPALITY -->
                        <div id="citymun" class="form-wrapper" required>
                            <select name="txt_Citymunicipality" class="civilstatus">
                                <option disabled selected>City/Municipality</option>
                            </select>
                        </div>
                        <!-- BARANGAY -->
                        <div id="barangay" class="form-wrapper" required>
                            <select name="txt_Barangay" class="civilstatus">
                                <option disabled selected>Barangay</option>
                            </select>
                        </div>
                      
                    </div>
                    <body>
                        <section class="container">
                            <div class="row form-group">
                                <label for="date" class="col-sm-1 col-form-label">Birthdate</label>
                                <div class="col-sm-4">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" name="txt_Birthdate" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <script type="text/javascript">
                            $(function() {
                                $('#datepicker').datepicker();
                            });
                        </script>
                        </body>

                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="txt_Email" placeholder="Enter your email" required>
                        <span class="details">Contact Number</span>
                        <input type="text" name="txt_Contactnumber" placeholder="Enter your phone number" required>
                        <span class="details">Username</span>
                        <input type="text" name="txt_Username" placeholder="Enter your username" required>
                        <span class="details">Password</span>
                        <input type="password" name="txt_Password" placeholder="Enter your password" required>
                        <span class="details">Confirm Password</span>
                        <input type="password" name="txt_Confirmpassword" placeholder="Confirm Password" required>
                        <div class="gender-details">
                        <input type="radio" name="txt_Gender" id="dot-1">
                        <input type="radio" name="txt_Gender" id="dot-2">
                        <input type="radio" name="txt_Gender" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    </div>

                        <div class="button">
                            <input type="submit" value="Register"/>
                        </div>
                    </div>
                <div>
                    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    function Get_Province(region_code) {
        var x = document.getElementById("province");
        var y = document.getElementById("citymun");
        var z = document.getElementById("barangay");


        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            x.innerHTML = this.responseText;
            y.innerHTML = '<select  name="txt_Citymunicipality" class="civilstatus"><option disabled selected>City/Municipality</option></select>';
            z.innerHTML = '<select  name="txt_Barangay" class="civilstatus"><option disabled selected>Barangay</option></select>';


        }
        xhttp.open("GET", "API_province.php?region=" + region_code);
        xhttp.send();
    }

    function Get_CityMun(province_code) {
        var x = document.getElementById("citymun");
        var y = document.getElementById("s_region");
        var z = document.getElementById("barangay");
        var region_code = y.value;

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            x.innerHTML = this.responseText;
            z.innerHTML = '<select  name="txt_Barangay" class="civilstatus"><option disabled selected>Barangay</option></select>';

        }
        xhttp.open("GET", "API_citymun.php?region=" + region_code + "&province=" + province_code);
        xhttp.send();
    }

    function Get_Barangay(citymun_code) {
        var x = document.getElementById("barangay");
        var y = document.getElementById("s_province");
        var z = document.getElementById("s_region");
        var province_code = y.value;

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            x.innerHTML = this.responseText;

        }
        xhttp.open("GET", "API_barangay.php?province=" + province_code + "&citymun=" + citymun_code);
        xhttp.send();
    }
</script>