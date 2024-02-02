<html>
<head>

</head>
<body>
<?php
	 $con = mysqli_connect('localhost','root','','restaurant'); 
	
			$name = ($_POST['name']);
			$address = ($_POST['address']);
			$email = ($_POST['email']);
			$username = ($_POST['username']);
			$password = ($_POST['password']);
		                                	//password encryption for the secuirty
			$pass=password_hash($password,PASSWORD_BCRYPT);
			
			                   // check in the database that data doesn't get repeated
			                                  // checking email id
			       $emailquery = "select * from buyer where email ='$email'";
			       $query2 = mysqli_query($con,$emailquery);
			
			       $emailcount = mysqli_num_rows($query2);
			       if($emailcount==1){
				   echo"<script>alert('Email ID is already exists')</script>";
                  }else{
				 
				                         // checking user name
				        $userquery = "select * from buyer where username ='$username'";
			            $query3 = mysqli_query($con,$userquery);
			
			            $usercount = mysqli_num_rows($query3);
			
			            if($usercount==1){
			      		     echo"<script>alert('Username is already exists')</script>";
                       }else{
			                        	 // Now code for saving the data in database
			            	 $insertquery = "INSERT INTO `signup`(`name`, `address`, `email`, `username`, `password`) VALUES ('$name','$address','$email','$username','$pass')";
				 
				             $iquery = mysqli_query($con, $insertquery);
				             if($iquery){
				                          echo"<script>alert('Sign up Successful')</script>";
				                          header('location: ../main/login.html');
					                      exit();
						                 }else
										 {
		                                  echo"<script>alert('Sign up Unsuccessful')</script>";
				                         }
				            }
	                }	
				
	?>
</body>
</html>