<?php
$conn = mysqli_connect("localhost",
     "root","","it");
?>

<?php

$email='it@gmail.com';
$password='1234';
 
if($_POST['email']==$email && $_POST['password']==$password){

  $_SESSION['email']=$email;

  echo "<script>location.href='adding.php'</script>";
}

else {
echo "<script>alert('something went wrong! Try again. Thanks.')</script>";

echo "<script>location.href='admin.php'</script>";
}

?>


