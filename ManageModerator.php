<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CYGO - Manage Moderator</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="assets/img/LOGO.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.html">CYGO</a></h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="ManageModerator.php">Moderater</a></li>
          <li><a class="nav-link scrollto" href="Manageadmin.php">Admin</a></li>
          <li><a class="nav-link scrollto" href="AdminHome.php">Back</a></li>

      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= moderater list Section ======= -->

  <section id="hero">
  <div class="hero-text" data-aos="zoom-out">
    <table border="1" class="table table-sm table-dark">
      <tr>
            <th> Possition </th>
            <th> Email (User Name) </th>
            <th> Password </th>
            <th> Update Operation </th>
            <th> Delete Operation </th>
      </tr>
  
      <?php

          $data = $db->retrieve("userModerator");
          $data = json_decode($data, 1);

            if(is_array($data)){
                foreach($data as $id => $userModerator){
                    echo "<tr>
                    <td>{$userModerator['position']}</td>
                    <td>{$userModerator['email']}</td>
                    <td>{$userModerator['password']} </td>
                    <td><a href='ModeratorEdit.php?id=$id''>UPDATE</a></td>
                    <td><a href='ModeratorDelete.php?id=$id'>DELETE</a></td>
                    </tr>";
                }
              }
      ?>

    </table>
    </div>

    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 text-lg-start text-center">
            <div class="copyright">
              &copy; Copyright <strong>CYGO</strong>. All Rights Reserved
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>