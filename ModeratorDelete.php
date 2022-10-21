<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("userModerator", $id);
   echo '<script type="text/javascript">

   window.onload = function () { alert("data deleted");window.location.href = "ManageModerator.php";  }

   </script>';
}
