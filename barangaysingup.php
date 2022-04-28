<?php
include 'API/API_region.php';
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
        <form action="API/API_signup.php" method="POST">
            <div class="form-content" style="padding: 125px">
                <a href="userprofile.php">Back</a>
                <div class="title"> Account Registration</div>
                <div class="user-details">
                    <div class="input-box">
                        <p><span style="color:red">*</span> - required</p>
                        <span class="details">Position<span style="color:red">*</span></span>
                        <input type="text" name="txt_Fname" placeholder="Enter your first name" required>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select 1st Valid ID image to upload:<span style="color:red">*</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </form>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select 2nd Valid ID image to upload:<span style="color:red">*</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </form>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select Proof of Billing image to upload:<span style="color:red">*</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </form>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select selfie image to upaload:<span style="color:red">*</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </form>

                        <div class="button">
                            <input type="submit" value="Register" />
                        </div>
                    </div>
                    
                </div>

        </form>
    </div>
</body>

</html>

<script src="address.js"></script>