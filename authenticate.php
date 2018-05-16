<?php

$Email = filter_input(INPUT_POST,'E-id');
$Password = filter_input(INPUT_POST,'pass');
if(!empty($Email)){
if(!empty($Email)){
$host = "localhost";
$dbusername ="root";
$dbpassword= "";
$dbdbname = "it";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  die('Connect Error('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
      $sql = "SELECT * FROM admin where email = '$_POST[email]' AND password = '$_POST[password]'; 
      if($conn->query($sql)){
           echo "Logged in successfully";
}
  else{
     echo "Error:".$sql."</br>".$conn->error;
}
$conn->close();
}
}
else{
      echo "Password should not be empty";
      die();
}
}
else{
     echo "Email should not be empty";
     die();
}

?>
