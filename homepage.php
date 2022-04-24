<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- CSS only -->
  <link rel="stylesheet" href="CSS/homepage.css ">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet"href="CSS/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-md sticky-top navbar-light bg-white" id="navbar">
    <div class="container">
      <a class="navbar-brand bg-white" href="#">
        <img class="logo" src="img/asdw.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav">
          <li class="nav-item active"> <a class="nav-link" href="#"><strong>Home</strong> </a> </li>
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
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
          </li>
          <a class="btn btn-primary ms-lg-3" href="API/API_logout.php">Logout</a>
        </ul>
      </div>
    </div>
  </nav>

  <section class="home">
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-controls">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('img/slide-1.jpg')"></li>
      <li data-target="#carousel" data-slide-to="1" style="background-image:url('img/slide-2.jpg')"></li>
      <li data-target="#carousel" data-slide-to="2" style="background-image:url('img/slide-3.jpg')"></li>
      
    </ol>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
     <img src="img/left-arrow.svg" alt="Prev"> 
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <img src="img/right-arrow.svg" alt="Next">
  </a>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url('img/slide-1.jpg')">
      <div class="container">
         <h2>I'm Rose</h2>
         <p>Web Developer</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image:url('img/luke.jpg')">
      <div class="container">
         <h2>I'm Jasmine</h2>
         <p>Web Developer</p>
      </div>
    </div>
    <div class="carousel-item" style="background-image:url('img/slide-3.jpg')">
      <div class="container">
         <h2>I'm Ruby</h2>
         <p>Web Developer</p>
      </div>
    </div>
  </div>
</div>
 </section>

  <!-- -->
  



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="bootstrap.bundle.min.js"></script>
</body>

</html>
<script>

</script>