<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("userModerator", $id, [
   "position"     => $_POST['position'],
   "email" => $_POST['email'],
   "password"      => $_POST['password']   
]);

echo '<script type="text/javascript">

            window.onload = function () { alert("Data Update");window.location.href = "ManageModerator.php";  }

            </script>';