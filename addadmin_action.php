<?php
include("config.php");
include("firebaseRDB.php");

$position = $_POST['position'];
$email = $_POST['email'];
$password = $_POST['password'];

if($position == ""){
    echo "Position Is Required";

}else if($email == ""){
    echo "Username Is Required";

}else if($password == ""){
    echo "Password Is Required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/userAdmin","email","EQUAL",$email);
    $data = json_decode($retrieve, 1);

    if(isset($data['email'])){
        echo "email used";
    }else{
        $insert = $rdb->insert("/userAdmin",[
            "position" => $position,
            "email" => $email,
            "password" =>$password
        ]);

        $result = json_decode($insert, 1);
        if(isset($result['position'])){
            echo '<script type="text/javascript">

            window.onload = function () { alert("Add Success");window.location.href = "AddModerator.php";  }

            </script>';

        }else{

            echo '<script type="text/javascript">

            window.onload = function () { alert("Add Success");window.location.href = "AddModerator.php";  }

            </script>';
        }
    }
}
