<?php

$adminname=$_POST['adminname'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root','','restaurant');

$sql ="select * from admin where adminname = '$adminname' and password = '$password' ";

$result = mysqli_query($con,$sql);

$count = mysqli_num_rows($result);

if($count == 1){
    echo"login";
	header('location: admin-panel.php');
}else{
	echo"fail";
}

?>