<?php

//////////////////////////////////////////////////////////////////////////////////
include_once "./config.php";
$id=uniqid();
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
date_default_timezone_set('Europe/Paris');
  $date = date('d-m-y h:i:s');
  $select = mysqli_query($conn, "SELECT * FROM details WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {


    header("Location: ./bitcoin.html");
}
else{
	$sql="Insert into details(id,first_name,last_name,email,phone , password,date) values('$id','$fname','$lname','$email','$phone' , '$password','$date')";

//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
   // echo "Successfully entered!";
    header("Location: ./index3.html");
}
else{
    echo "Unsuccessful!!";
}

}

//////////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////////////////////////////
?>


