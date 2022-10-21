<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CYGO | Ride Details</title>
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

</head>

<body>

<!--Firebase Libraries-->
<script src="https://www.gstatic.com/firebasejs/9.9.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.9.3/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.9.3/firebase-database.js"></script> 

        <script type="module">

          const firebaseConfig = {
            apiKey: "AIzaSyDvsCjR0lseLCjV3quk5-kY7zcsfwEmswk",
            authDomain: "cygo-e55fd.firebaseapp.com",
            databaseURL: "https://cygo-e55fd-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "cygo-e55fd",
            storageBucket: "cygo-e55fd.appspot.com",
            messagingSenderId: "836101831794",
            appId: "1:836101831794:web:a0f3b3fd4bee9b0435d6eb"
            
          };

          // Initialize Firebase
          const app = initializeApp(firebaseConfig);
        </script>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.html">CYGO</a></h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="AdminHome.php">Back</a></li>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Custemer list Section ======= -->

  <section id="hero">
    <div class="hero-text" data-aos="zoom-out">
      <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th> Ride Id </th>   
                <th> Start Ride </th>   
                <th> End Ride </th> 
                <th> Distance </th>
                <th> Payment(Per KM) </th>
            </tr>
        </thead>
        <tbody id="tbody1">
        </tbody>
    </table>
  </div>

    <!--Firestore Libraries-->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>

    <script id = "MainScript">
      const firebaseConfig = {
      apiKey: "AIzaSyCzOSKN8BDZHeO8kZJ3yfcztewkpWz1j7g",
      authDomain: "cygo-4a021.firebaseapp.com",
      databaseURL: "https://cygo-4a021-default-rtdb.firebaseio.com",
      projectId: "cygo-4a021",
      storageBucket: "cygo-4a021.appspot.com",
      messagingSenderId: "1070825879356",
      appId: "1:1070825879356:web:70817f7924407b62875039"
    };
    firebase.initializeApp(firebaseConfig);
    let db = firebase.firestore();

    //...................GET ALL DATA..................



    function GetAllDataOnce(){
      db.collection("rides").get().then((querySnapshot)=> {
          var rides = [];
          querySnapshot.forEach(doc => {
            rides.push(doc.data());
          });
        
      });
    }


    function GetAllDataRealtime(){
      db.collection("rides").onSnapshot((querySnapshot)=> {
          var rides = [];
          querySnapshot.forEach(doc => {
            rides.push(doc.data());
          });

          //  console.log(querySnapshot);
          // console.log(rides);
          AddAllItemsToTheTable(rides);
        
      });
    }
    // .............FILL IN THE TABLE.............


    var tbody = document.getElementById('tbody1');

    function AddItemToTheTable(uid,startAddress,endAddress,distance,price){
    var trow = document.createElement('tr');
    var td1 = document.createElement('td');
    var td2 = document.createElement('td');
    var td3 = document.createElement('td');
    var td4 = document.createElement('td');
    var td5 = document.createElement('td');


    td1.innerHTML = uid;
    td2.innerHTML = startAddress;
    td3.innerHTML = endAddress;
    td4.innerHTML = distance;
    td5.innerHTML = price;

    trow.appendChild(td1);
    trow.appendChild(td2);
    trow.appendChild(td3);
    trow.appendChild(td4);
    trow.appendChild(td5);
   
    tbody.appendChild(trow); 
    }

    function AddAllItemsToTheTable(CustomersDocsList){
    tbody.innerHTML="";

    CustomersDocsList.forEach(element => {
        AddItemToTheTable(element.uid,element.startAddress,element.endAddress,element.distance,element.price);
    });
    }


    window.onload = GetAllDataRealtime;


      
    </script>

  </section><!-- End Hero Section -->

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