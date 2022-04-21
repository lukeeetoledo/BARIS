<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="CSS/barangayside.css" />
    <link rel="stylesheet" href="CSS/homepag.css" />
    <title></title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><img src="img/FINAL.png" alt="" width="60" height="60"></i>BARIS</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="Permitrequest.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Pending Request</a>
                <a href="residentslist.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Resident's List</a>

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

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Administrator
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container" style="border:solid">
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        <h1>Create post</h1>

                        <form action="" method="POST">

                            <div class="form-group has-error">
                                <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                                <input type="text" class="form-control" name="slug" />
                                <span class="help-block">Field not entered!</span>
                            </div>

                            <div class="form-group">
                                <label for="title">Title <span class="require">*</span></label>
                                <input type="text" class="form-control" name="title" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="5" class="form-control" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <p><span class="require">*</span> - required fields</p>
                            </div>
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                <input type="file" name="fileToUpload" id="fileToUpload" multiple>
                                <input type="submit" value="Upload Image" name="submit">
                            </form>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                <button class="btn btn-default">
                                    Cancel
                                </button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div style="border-style: groove;">
  <h4 style="text-align: center;padding-top:10px"> John Eduard Manzon</h4>
  <p style="font-size:medium;">Subject:asdasd</p>
  <p class="para">akscmkl</p1>
  <h6 style="text-align: right; font-size: x-small;">Date:1/2/3</h6>
</div>
  <section class="carousel" aria-label="Gallery">
    <ol class="carousel__viewport">
      <li id="carousel__slide1" tabindex="0" class="carousel__slide">
        <div class="carousel__snapper">
          <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
          <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
          <img style="height:100%; width:100%;" src="images/3.jpg">
        </div>
      </li>
      <li id="carousel__slide2" tabindex="1" class="carousel__slide">
        <div class="carousel__snapper">
          <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
          <img style="height:100%; width:100%;" src="images/1.jpg">

        </div>
      </li>
      <li id="carousel__slide3" tabindex="2" class="carousel__slide">
        <div class="carousel__snapper">
          <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
          <img style="height:100%; width:100%;" src="images/2.jpg">
        </div>
      </li>
      <li id="carousel__slide4" tabindex="3" class="carousel__slide">
        <div class="carousel__snapper">
          <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
          <img style="height:100%; width:100%;" src="images/4.jpg">

        </div>
      </li>
    </ol>
  </section>
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