<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("customers", $id, [
   "contact" => $_POST['contact'],
   "email"      => $_POST['email'], 
   "name"      => $_POST['name'],
   "nic"     => $_POST['nic'], 
   "password"      => $_POST['password']
]);

        echo '<script type="text/javascript">

            window.onload = function () { alert("Data Update");window.location.href = "CustomerList.php";  }

            </script>';