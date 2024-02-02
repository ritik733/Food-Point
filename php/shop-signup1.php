<?php
$client_name=$_POST["client-name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$client_addhar=$_POST["client-addhar"];


  
                                           /*  data base link up */
  
$con = mysqli_connect('localhost','root','','restaurant');
$query = "INSERT INTO `clients`(`client-name`, `client-phone`, `client-email`, `client-addhar`) VALUES ('$client_name','$phone','$email','$client_addhar')";
$r= mysqli_query($con,$query);

if($r){
  echo"Sign Up Successful .";
  header('location : ../files/shop-register1.php');
}else{
	echo mysqli_error($con);
}
?>

