<html>
<head>

</head>
<body>
<?php
	 $con = mysqli_connect('localhost','root','','restaurant'); 
	
			$name = ($_POST['name']);
			$email = ($_POST['email']);
			$phone = ($_POST['phone']);
			$address = ($_POST['address']);
			$username = ($_POST['username']);
			$password = ($_POST['password']);
		                                	//password encryption for the secuirty
			$pass=password_hash($password,PASSWORD_BCRYPT);
			
			                   // check in the database that data doesn't get repeated
			                                  // checking email id
			       $emailquery = "SELECT * FROM `buyer` WHERE email = '$email' ";
			       $query1 = mysqli_query($con,$emailquery);
			
			       $emailcount = mysqli_num_rows($query1);
			       if($emailcount == 1){
				   echo"<script>alert('Email ID is already exists')</script>";
                  }else{
				 
				                         // checking user name
				        $userquery = "SELECT * FROM `buyer` WHERE username ='$username'";
			            $query3 = mysqli_query($con,$userquery);
			
			            $usercount = mysqli_num_rows($query3);
			
			            if($usercount==1){
			      		     echo"<script>alert('Username is already exists')</script>";
                       }else{
			                        	 // Now code for saving the data in database
			            	
				 
				 $insertquery ="INSERT INTO `buyer`( `name`, `phone`, `email`, `address`, `username`, `password`) VALUES ('$name','$phone','$email','$address','$username','$pass')";
				 
				             $iquery = mysqli_query($con, $insertquery);
                            echo $insertquery ;
				             if($iquery){
				                          echo"<script>alert('Sign up Successful')</script>";
				                          header('location: ../files/login.php');
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