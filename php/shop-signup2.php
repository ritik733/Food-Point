<?php
$restro_name=$_POST["restro-name"];
$restro_addr=$_POST["restro-address"];
$restro_phone=$_POST["restro-phone"];
$restro_img=$_POST["restro-poster"];


  
                                           /*  data base link up */
  
$con = mysqli_connect('localhost','root','','restaurant');
$query = "IINSERT INTO `restro`( `restro-img`, `restro-name`, `restro-address`, `restro-phone`) VALUES ('$restro_img','$restro_name','$restro_addr','$restro_phone','[value-5]')";
$r= mysqli_query($con,$query);

if($r){
  echo"Sign Up Successful .";
  header('location : ../files/shop-register2.php)
}else{
	echo mysqli_error($con);

?>

