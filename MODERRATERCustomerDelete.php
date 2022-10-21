<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("customers", $id);

   echo '<script type="text/javascript">

   window.onload = function () { alert("Data Deleted");window.location.href = "ModweaterCustomerList.php";  }

   </script>';
}

