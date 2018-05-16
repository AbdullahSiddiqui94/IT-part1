<?php
$conn = mysqli_connect("localhost",
     "root","","it");
?>

<?php
if(isset($_POST["submit"])){
$v1=rand(1111,9999);
$v2=rand(1111,9999);

$v3= $v1.$v2;

$v3=md5($v3);
$fnm=$_FILES['pimage']['name'];
$dst="./product_image/".$v3.$fnm;
$dst1="product_image/".$v3.$fnm;
move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

mysqli_query($link,"insert into pro values('$dst1','$_POST[pcategory]','$_POST[pdesc]')");
}

?>