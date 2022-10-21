<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CYGO - Customer List</title>
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
          <li><a class="nav-link scrollto" href="Moderatorhome.php">Back</a></li>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Custemer list Section ======= -->

  <section id="hero">
    <div class="hero-text" data-aos="zoom-out">
      <table class="table table-sm table-dark">
        <thead>
          <tr>

            <th> Name </th>
            <th> Contact </th>
            <th> Email </th>
            <th> ID </th>
            <th> Rating</th>
            <th> Points </th>
            <th> UID </th>

          </tr>
        </thead>
        <tbody id ="tbody1"></tbody>
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
  db.collection("customers").get().then((querySnapshot)=> {
      var customers = [];
      querySnapshot.forEach(doc => {
         customers.push(doc.data());
      });
    
  });
}


function GetAllDataRealtime(){
  db.collection("customers").onSnapshot((querySnapshot)=> {
      var customers = [];
      querySnapshot.forEach(doc => {
         customers.push(doc.data());
      });

      //  console.log(querySnapshot);
      // console.log(customers);
      AddAllItemsToTheTable(customers);
     
  });
}
// .............FILL IN THE TABLE.............


var tbody = document.getElementById('tbody1');

function AddItemToTheTable(name,contact,email,nic,rating,ratingAmount,uid){
var trow = document.createElement('tr');
var td1 = document.createElement('td');
var td2 = document.createElement('td');
var td3 = document.createElement('td');
var td4 = document.createElement('td');
var td5 = document.createElement('td');
var td6 = document.createElement('td');
var td7 = document.createElement('td');

td2.innerHTML = name;
td3.innerHTML = contact;
td4.innerHTML = email;
td5.innerHTML = nic;
td6.innerHTML = rating;
td7.innerHTML = ratingAmount;
td1.innerHTML = uid;


trow.appendChild(td2);
trow.appendChild(td3);
trow.appendChild(td4);
trow.appendChild(td5);
trow.appendChild(td6);
trow.appendChild(td7);
trow.appendChild(td1);

tbody.appendChild(trow); 
}

function AddAllItemsToTheTable(CustomersDocsList){
 tbody.innerHTML="";

 CustomersDocsList.forEach(element => {
    AddItemToTheTable(element.name,element.contact,element.email,element.nic,element.rating,element.ratingAmount,element.uid);
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