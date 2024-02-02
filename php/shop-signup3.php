<html>
<head>
     <meta HTTP-EQUIV="refresh" content="0; url=localhost/resturant/w-shop.html" />
</head>
<body>
<strong>
<?php
$username=$_POST["username"];
$password=$_POST["password"];

  
                                           /*  data base link up */
  
$con = mysqli_connect('localhost','root','','restaurant');
$r=mysqli_query($con,"insert into buyer(name,phone,email,address,username,password)
values('$name','$phone','$email','$address','$username','$password')");

if($r)
	echo"Sign Up Successful .";
else
	echo mysqli_error($con);

?>
</strong>
</body>
</html>
