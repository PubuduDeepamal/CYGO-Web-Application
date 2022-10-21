
<?php
include("config.php");
include("firebaseRDB.php");


$position = $_POST['position'];
$email = $_POST['email'];
$password = $_POST['password'];
   
if($position == ""){
    echo "Position Is Required";

}else if($email == ""){
    echo "Email Is Required";

}else if($password == ""){
    echo "Password Is Required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/userAdmin","email","EQUAL",$email);
    $data = json_decode($retrieve, 1);

    if(count($data) == 0){

        echo '<script type="text/javascript">
        
        window.onload = function () { alert("The username or password you entered doesnt belong to an account. Please check your username and password and try again.");window.location.href = "AdminLogin.php";  }
       
        </script>';

        
    }else{
        $id = array_keys($data)[0];
        if($data[$id]['password'] == $password){
            
            echo '<script type="text/javascript">

		 	window.onload = function () {window.location.href = "AdminHome.php";  }

	 	    </script>';
        
        }else{

            echo '<script type="text/javascript">
        
            window.onload = function () { alert("The username or password you entered doesnt belong to an account. Please check your username and password and try again.");window.location.href = "AdminLogin.php";  }
           
            </script>';
        }
    }
    
    
}


    

