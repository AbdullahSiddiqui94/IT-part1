<?php
$servername="localhost";
$username="root";
$password="";
$dbname="it";
try{
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 echo("");
}catch(mysqli_sql_Exception $ex){
    echo("Error in connection");
}

if(isset($_POST['submit'])){
$v1=rand(1111,9999);
$v2=rand(1111,9999);

$v3= $v1.$v2;

$v3=md5($v3);
$fnm=$_FILES['pimage']['name'];
$dst="./product_image/".$v3.$fnm;
$dst1="product_image/".$v3.$fnm;
move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
    $pname=$_POST['pnm'];
    $pimage=$_POST['pimage'];
    $pcategory=$_POST['pcategory'];
    $pdesc=$_POST['pdesc'];
    
    $it_query = "INSERT INTO `pro`(`pname`, `pimage`, `pcategory`, `pdesc`) VALUES     ('$pname','$pimage','$pcategory','$pdesc')";
     try{
          $it_result = mysqli_query($conn,
          $it_query);
          if($it_result){
              if(mysqli_affected_rows($conn)>0){
             echo("New Item successfully added");
}else{
    echo("");
}
}
}catch(Exception $ex){
    echo("error".$ex->getMessage());
}
}

?>