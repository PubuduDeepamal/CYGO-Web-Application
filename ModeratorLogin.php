<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CYGO | Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/LOGO.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script type="text/javascript">

    function Leave()
		{   
      window.location.href = "Home.php"; 
    }
	
	</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.html">CYGO</a></h1>

      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="assets/img/team/login.png"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="ModeratorLogin_action.php">

            <h2>......Log in to CYGO...... </h2><br>

                <!-- Posetion input -->
                <div class="form-outline mb-4">
                <select name="position" id="position" class="form-control form-control-lg" required="required" data-validation-required-message="Please Select Posstion">
                <option value="Moderator">Moderator</option>
                <option value="Admin">Admin</option>
                  
                </select>

                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" placeholder="Enter Username"  class="form-control form-control-lg" required="required" data-validation-required-message="Please Enter User Name" />
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control form-control-lg" required="required" data-validation-required-message="Please Enter Password" />
                </div>
                <div class="d-flex justify-content-around align-items-center mb-4">
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>     
                <button type="submit" class="btn btn-danger btn-lg btn-block" onclick="Leave()">Leave</button>
              </form>
            </div>
          </div>
        </div>
      </section>
 
  </section>
  <!-- End Hero Section -->
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-start text-center">
          <div class="copyright">
            &copy; Copyright <strong>CYGO</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
          <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>