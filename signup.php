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
            <form action="#">
            <div class="form-content">
                <a href="index.php">Back</a>
                <div class="title">Join Us!</div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="" placeholder="Enter your first name" required>
                        <span class="details">Email</span>
                        <input type="text" name="" placeholder="Enter your email" required>
                        <span class="details">Username</span>
                        <input type="text" name="" placeholder="Enter your username" required>
                        <span class="details">Last Name</span>
                        <input type="text" name=""placeholder="Enter your last name" required>
                        <span class="details">Middle Name</span>
                        <input type="text" name="" placeholder="Enter your middle name" required>
                
                        <div class="form-wrapper" required> 
                            <select name="" class="civilstatus">
                                <option value="civilstatus" name="" disabled selected>Suffix</option>
                                <option value="single">Jr.</option>
                                <option value="married">Sr.</option>
                                <option value="divorced">II</option>
                                <option value="widowed">III</option>
                            </select>
                        </div>
                        
                    </div>
                    
                    <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" name=" "placeholder="Region" required>
                            <input type="text" name="" placeholder="Province" required>
                            <input type="text" name="" placeholder="City/Municipality" required>
                            <input type="text" name="" placeholder="Barangay" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" placeholder="Phone Number" required>
                            <div class="form-wrapper" required> 
                            <select name="" class="civilstatus">
                                <option value="civilstatus" name="" disabled selected>Civil Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                        
                        </div>
                    
                    <body style="background-color: ivory;">
                        <section class="container">
                            <form>
                                <div class="row form-group">
                                    <label for="date" class="col-sm-1 col-form-label">Birthdate</label>
                                    <div class="col-sm-4">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" name="" class="form-control">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    
                        <script type="text/javascript">
                            $(function() {
                                $('#datepicker').datepicker();
                            });
                        </script>
                        
                    
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="" placeholder="Enter your password" required>
                        <span class="details">Confirm Password</span>
                        <input type="text" name="" placeholder="Cnfirm Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Religion</span>
                        <input type="password" name="" placeholder="Enter your religion" required>
                    </div>
                    
                    <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
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
                   
                    <div class="button" >
                    <input type="submit" value="Register">
                    </div>
                </div>
               
                </div>
                <div>
                    <p class="text-center">Already have an account? <a href="login.html">Login</a></p>
                </div>
            </div>
            </form>
        </div>
</body>
</html>