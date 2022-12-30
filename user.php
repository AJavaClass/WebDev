<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DocWebox</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">DocWebox@gmail.com</a>
        <i class="bi bi-phone"></i> +30 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">DocWebox</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">home</a></li>
          <li><a class="nav-link scrollto" href="#docs">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#services">My appointments</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><div class="container">
            <input class="form-control" id="anythingSearch" type="text" placeholder="Search for our doctors">
          </div></li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#profilesettings" class="profilesettings-btn scrollto" data-bs-toggle="modal" data-bs-target="#modal"><span class="d-none d-md-inline" ><div class="icon"><i class="fa-solid fa-gear"></i></div></span></a>
    </div>
  </header><!-- End Header -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


  <!-- Modal for gear (options)-->
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="ModalLabel">Profile Options</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <form class="modal-form">
            <div class="firstname-block modcont">
              <label for="firstname">First Name</label>
              <input type="input" class="firstname" id="firstname" placeholder="firstname" value="Konstantinos Aggelos ">
            </div>
            <div class="lastname-block modcont">
              <label for="lastname">Last Name</label>
              <input type="input" class="lastname" id="lastname" placeholder="lastname" value="Vasileiadhs">
            </div>

            <div class="lastname-block modcont">
                <label for="username">Username</label>
                <input type="input" class="username" id="username" placeholder="Username" value="username στη βαση">
              </div>
            
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
 <!-- ======= About Section ======= -->

 <section id="home" class="about mt-5">
    <div class="container-fluid">

        <div class="icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>Look up any doctor using a name, specialty or even a location</h3>

          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <h4 class="title"><a href="">Search for our doctors</a></h4>
            <p class="description">Feel free to use the search bar to look up any of our doctors using filters like name, specialty or location !</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-check"></i></div>
            <h4 class="title"><a href="">Make an appointment with a doctor of your choice...</a></h4>
            <p class="description">Found a doctor you like? Make an appointment with him to resolve your issues</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="fa-solid fa-phone"></i></div>
            <h4 class="title"><a href="">Contact</a></h4>
            <p class="description">Be sure to let us know if there is a problem or if you need help with your appointments!</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

 
   <!-- Search for doctors section -->
   
   <section  id="docs">
     <div class="container">
        <h1 class="text-center">Our doctors</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            
            <div class="col">
                <div class="card">
                  <img src="/assets/img/gianakis.jpeg" class="card-img-top"
                    alt="Palm Springs Road" />
                  <div class="card-body">
                    <h5 class="card-title">Giannakis apto dafni</h5>
                    <p class="card-text">
                      <p class="card-text">
                          Gynaikologos,
                        </p>
                        <p class="card-text">
                          abdoul@gmail.com,
                        </p><p class="card-text">
                          696969696
                        </p><p class="card-text">
                          <button type="button" class="btn btn-primary btn-lg btn-block">Make appointment</button>                        </p>

                        </p>
                    </p>
                  </div>
                </div>
              </div>
            <div class="col">
              <div class="card">
                <img src="/assets/img/gianakis.jpeg" class="card-img-top"
                  alt="Palm Springs Road" />
                <div class="card-body">
                  <h5 class="card-title">Tsifsa ropt</h5>
                  <p class="card-text">
                    <p class="card-text">
                        peologos,
                      </p>
                      <p class="card-text">
                        tsifsa@gmail.com,
                      </p><p class="card-text">
                        696969696
                      </p><p class="card-text">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Make appointment</button>                        </p>

                      </p>
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="/assets/img/gianakis.jpeg" class="card-img-top"
                    alt="Palm Springs Road" />
                  <div class="card-body">
                    <h5 class="card-title">Makis Kenteris</h5>
                    <p class="card-text">
                      <p class="card-text">
                          athliatros,
                        </p>
                        <p class="card-text">
                          OKENTERIS@gmail.com,
                        </p><p class="card-text">
                          696969696
                        </p><p class="card-text">
                          <button type="button" class="btn btn-primary btn-lg btn-block">Make appointment</button>                        </p>

                        </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="/assets/img/gianakis.jpeg" class="card-img-top"
                    alt="Palm Springs Road" />
                  <div class="card-body">
                    <h5 class="card-title">Tsifsa ropt</h5>
                    <p class="card-text">
                      <p class="card-text">
                          peologos,
                        </p>
                        <p class="card-text">
                          tsifsa@gmail.com,
                        </p><p class="card-text">
                          696969696
                        </p><p class="card-text">
                          <button type="button" class="btn btn-primary btn-lg btn-block">Make appointment</button>                        </p>

                        </p>
                    </p>
                  </div>
                </div>
              </div>
          </div>
    
     </div>
   </section>
   
   <!-- End of doctors sections -->
    <!-- My appointments section -->


    <!-- Αν δεν υπάρχουν ραντεβού να βγάζει το μήνυμα -->
    <section id="services">

        <div class="container">
          <h1 class="text-center" >My appointments</h1>
          <h2 class ="text-center" style="display: none;">There are no appointments at this time</h2>
          <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            
            <div class="col">
                <div class="card">
                  <img src="/assets/img/gianakis.jpeg" class="card-img-top"
                    alt="Palm Springs Road" />
                  <div class="card-body">
                    <h5 class="card-title">Giannakis apto dafni</h5>
                    <p class="card-text">
                      <p class="card-text">
                          Gynaikologos,
                        </p>
                        <p class="card-text">
                          Τετάρτη στις 9:00
                        </p><p class="card-text">
                          Ετήσια Εξέταση Pap
                        </p><p class="card-text">
                          <button type="button" class="btn btn-primary btn-lg btn-block">Edit Appointment</button>                        </p>
                    </p>
                  </div>
                </div>
              </div>
        </div>
    </section>



    <!-- End of my appointments section-->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>If you need more information feel free to contact our team 24 hours a day. If there is an emergency please call the emergency number.</p>
        </div>
      </div>


      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fa-sharp fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p>DocWebox@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p>+30 5589 55488 55</p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-exclamation"></i>
                <h4>Emergencies:</h4>
                <p>+30 119</p>
              </div>

            </div>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

      

  </main><!-- End #main -->

  
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>