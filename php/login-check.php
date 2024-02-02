<html>
<head>

</head>
<body>
<?php

session_start();


	 $con = mysqli_connect('localhost','root','','restaurant'); 

	        $username = ($_POST['username']);
			$password = ($_POST['password']);
             
			 
			 $user_search= "select * from buyer where username ='$username'";
			 $query=mysqli_query($con,$user_search);
			 $user_count = mysqli_num_rows($query);
			 
			 if($user_count === 1){
				    $user_pass = mysqli_fetch_assoc($query);
					
					$db_pass = $user_pass['password'];
					
					$pass_decode = password_verify($password, $db_pass);
					
					if($pass_decode)
				       {
						   $_SESSION['user']=$username;
					      echo"<script>alert('Login Successful')</script>";
						  header('location: ../files/start.php');
				          exit();
	                   }
				   else
				       {
			 	          echo"<script>alert('Incorrect Password')</script>";
			           }
			 } else{
				    echo"<script>alert('Incorrect username')</script>";
			      }
			                	 
	?>
</body>
</html>