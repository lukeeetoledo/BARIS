<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/homepage.css ">
</head>

<body>

  <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
    <div class="container-fluid ">
      <a class="navbar-brand bg-white" href="#">
        <img class="logo" src="img/LOGO.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item active"> <a class="nav-link" href="#"><strong>Home</strong> </a> </li>
          <li class="nav-item"><a class="nav-link" href="#"> <strong>Profile</strong> </a></li>
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
          <button class="btn btn-primary ms-lg-3">Logout</button>
        </ul>
      </div>
    </div>
  </nav>



  <div class="row bg-white">
    <div class="center">
      <!--for post with pciture-->

      <div class="card">
        <h2>Post Title</h2>
        <h5>Post ID:</h5>
        <h5>Title description:</h5>
        <h5>Date:</h5>
        <div class="fakeimg"><img src="IMG/bg15.png" class="clsImg"></div>
        <p>Some text..</p>
      </div>

      <!--for post with text only-->
      <div class="card">
        <h2>Post Title</h2>
        <h5>Post ID:</h5>
        <h5>Title description:</h5>
        <h5>Date:</h5>
        <p>Some text..</p>
      </div>

      <!--for post with video-->
      <div class="card">
        <h2>Post Title</h2>
        <h5>Post ID:</h5>
        <h5>Title description:</h5>
        <h5>Date:</h5>
        <video class="vid" controls autoplay>
          <source src="IMG/vid.mp4" >
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <p>Some text..</p>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>