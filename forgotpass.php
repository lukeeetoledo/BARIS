<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="CSS/forgotpass.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="forgot">
                <h2>Forgot your password?</h2>
                <p>Please enter your email below to reset your password.</p>
            </div>
            <form class="card mt-4">
                <div class="card-body">
                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input class="form-control" type="text" id="email-for-pass" required="" placeholder="Enter your email address"><small class="form-text text-muted"></small> </div>
                </div>
                <div class="card-footer"> <button class="btn btn-success" type="submit">Send verification link</button> 
                <a href="login.php" class="btn btn-danger">Back to Login</a>
            </form>
        </div>
    </div>
</div>