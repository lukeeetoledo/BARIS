<!DOCTYPE html>
<html lang="en-US">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#16cbd1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="CSS/index.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="img/Logo_192.png">
  <title>BaRIS</title>
</head>

<body style="background-color:#e4e6eb">
 
 <!--navbar-->
  <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light " style="background-color:#bd8565">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="logo" src="img/asdw.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services" style="color: white;">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#News" style="color: white;">How To's</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team" style="color: white;">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#documentation" style="color: white;">Documentation</a>
          </li>
        </ul>
        <center>
        <a href="login.php">
          <button class="btn btn-primary ms-lg-3">Log In</button>
        </a>
        <a href="signup.php">
          <button class="btn btn-primary ms-lg-3">Register</button>
        </a>
        </center>
      </div>
    </div>
  </nav>
 <!--navbar-->

 <!--home-->
  <div class="hero vh-100 d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-g-7 mx-auto text-center">
          <h1 class="display-4">Barangay and Resident's Information System</h1>
         
          <p class="text-white">Keeping Barangay records is a one way to easily track resident’s information. BARIS is capable in recording this bulk information and can be stored in a long period of time. This system can meet strategic objectives for reducing paper consumption and reducing time consuming file retrieval from bulky documents. BARIS can also track residents record such as personal to family information, complaints to amicable settlement information and can create daily reports for the Barangay. It is a conntrol system that manages the process industrial workspace. It reduces human error and processign time, thus it cann boost productivity and result into high quality of prduct produce</p>
        </div>
      </div>
    </div>
  </div>
 <!--home-->

 <!--services-->
  <section id="services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h1>FEATURES</h1>
                <p>In the extent of implementation of the basic services and facilities in the barangay
                  as mandated in Section 17 of the Local Government Code of 1991, the indicators
                  were as follows: Agricultural Support Services, Health and Social Welfare
                  Services, Services and Facilities Related to General Hygiene and Sanitation,
                  Beautification and Solid Waste Collection, Maintenance of the Katarungang
                  Pambarangay, Maintenance of the Barangay Roads and Bridges and Water Supply
                  System, Infrastructure Facilities, Information and Reading Center, and Satellite or
                  Public Market.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-sm-6">
                <div class="service card-effect bounceInUp">
                    <div class="iconbox">
                      <i class='bx bxs-lock'></i>
                    </div>
                    <h5 class="mt-4 mb-2">Security</h5>
                    <p>BARIS helps Barangay Information to be secured with the use of auto-backup database and system user level security preventing unauthorized personnel to access the information</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="service card-effect">
                  <div class="iconbox">
                    <i class='bx bx-task' ></i>
                  </div>
                  <h5 class="mt-4 mb-2">Online Process</h5>
                  <p>Online processing of documents is also the main features of the system. You can get a documents such as barangay clearance, business permit or cedula by providing a corresponding requirements </p>
              </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="service card-effect">
                <div class="iconbox">
                  <i class='bx bxs-data'></i>
                </div>
                <h5 class="mt-4 mb-2">Automated Inventory</h5>
                <p>The System facilitates automated property inventory of the Barangay that can track location, cost, acquisition date and condition of the property. The system can speedily generate inventory with accuracy. </p>
            </div>
        </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service card-effect">
                    <div class="iconbox">
                      <i class='bx bx-desktop' ></i>
                    </div>
                    <h5 class="mt-4 mb-2">Monitoring</h5>
                    <p>The ability of BARIS to monitor Residents Information and Business information status is an essential 
                      feature that may help Barangay Officials in decision making to formulate solutions, corresponding recommendations and appropriate positive actions. </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service card-effect">
                    <div class="iconbox">
                      <i class='bx bxs-building-house'></i>
                    </div>
                    <h5 class="mt-4 mb-2">Administrative Convinience</h5>
                    <p>The system facilitates the speedy processing of data which help employees increase their productivity and allows other important tasks to be devoted to rather than spending their time in manual manipulations of record that is time consuming. </p>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <div class="service card-effect">
                    <div class="iconbox">
                        <i class='bx bxs-doughnut-chart'></i>
                    </div>
                    <h5 class="mt-4 mb-2">Service</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                        perferendis </p>
                </div>
            </div>
        </div>
    </div>
</section> 
<!--Services-->

<!--How to-->
<section class="row w-100% py-0" id="News">
<h1 class="text-center">How To's</h1>
<div class="col-lg-6 col-img"></div>
<div class="col-lg-6 col-imgg"></div>
</section>

<section id="team">
  <div class="container">
      <div class="row mb-5">
          <div class="col-md-8 mx-auto text-center">
              <h1> DEVELOPMENT TEAM</h1>
          </div>
      </div>
      <div class="row text-center g-4">
          <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                  <img src="img/marvin.jpg" alt="">
                  <h5 class="mb-0 mt-4">Jaudian, Marvin</h5>
                  <p>Front-End Developer</p>
                  <i class='bx bxl-gmail' ><p>jaudianmarvin01@gmail.com</p></i>
                  
                  <div class="social-icons">
                      <a href="https://web.facebook.com/JaudianMarvin/"><i class='bx bxl-facebook'></i></a>
                      <a href="https://www.linkedin.com/in/marvin-jaudian-246329203/"><i class='bx bxl-linkedin' ></i></a>
                      <a href="https://github.com/jaudianmarvin?fbclid=IwAR1AzSTOB0XwaaZ2wB3XiwuL1cR1zns9DAKSyfKIY0gPlq4AwCxZDZHRexA"><i class='bx bxl-github'></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                  <img src="img/jawo.png" alt="">
                  <h5 class="mb-0 mt-4">Manzon, Eduard</h5>
                  <p>Front-End Developer</p>
                  <i class='bx bxl-gmail' ><p>manzonjohneduard@gmail.com</p></i>
                  <div class="social-icons">
                      <a href="https://web.facebook.com/jawo.jawo.jawo/"><i class='bx bxl-facebook'></i></a>
                      <a href="https://www.linkedin.com/in/johnmanzon/"><i class='bx bxl-linkedin' ></i></a>
                      <a href="https://github.com/jawo406"><i class='bx bxl-github'></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                  <img src="img/crisjahn.jpg" alt="">
                  <h5 class="mb-0 mt-4">Perez, Crisjahn</h5>
                  <p>Back-End Developer</p>
                  <i class='bx bxl-gmail' ><p>crisjahn.perez09@gmail.com</p></i>
                  

                  <div class="social-icons">
                      <a href="https://web.facebook.com/crisjahn.perezzzz?_rdc=1&_rdr"><i class='bx bxl-facebook'></i></a>
                      <a href="https://www.linkedin.com/in/crisjahnperez?fbclid=IwAR2x1vGVNjq-zY4GZdU6fwLj1s0YY_Id7AyfBSgDbPn1n38Y0kou0sNWmck"><i class='bx bxl-linkedin' ></i></a>
                      <a href="https://github.com/rajyon?fbclid=IwAR3IsH38Td9h97OC36C9aIUtsb7FOeFibOIULaUiKCKxeJO2TjA_5mjbfc0"><i class='bx bxl-github'></i></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                  <img src="img/luke.jpg" alt="">
                  <h5 class="mb-0 mt-4">Toledo, Luke</h5>
                  <p>Back-End Developer</p>
                  <i class='bx bxl-gmail' > <p>luketoledo61@gmail.com</p></i>
                  <div class="social-icons">
                      <a href="https://web.facebook.com/lukeeetoledo?_rdc=1&_rdr"><i class='bx bxl-facebook'></i></a>
                      <a href="https://www.linkedin.com/in/luke-toledo/?fbclid=IwAR1b4o25BEof62LV6b4Ymht1rAboyQkW247lHSHcB44RUmmRWHXDTrFx-3w"><i class='bx bxl-linkedin' ></i></a>
                      <a href="https://github.com/lukeeetoledo?fbclid=IwAR0uTHrxYU_zcbeFPL89H2cY-q1McqoA4ttL0JB9PYwnhrQB6vITN0yYJI4"><i class='bx bxl-github'></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- TEAM -->

  <footer class="footer" id="documentation">
   <div class="containerr">
     <div class="roww">
       <div class="footer-col">
         <h4>Documentation</h4>
         
         <ul>           
           <u><a href="Documents/Chapter 1.pdf">Chapter 1</a></u>
           <h6>-The Problem and its Settings</h6>
           <u><a href="Documents/Chapter 2.pdf">Chapter 2</a></u>
           <h6>-Conceptual Framework</h6>
           <u><a href="Documents/Chapter 3.pdf">Chapter 3</a></u>
           <h6>-Methodology</h6>
         </ul>
         
       </div>
      
      </div>
     </div>
   </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="CSS/index.js"></script>


</body>

</html>