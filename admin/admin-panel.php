<?php  

$con=mysqli_connect('localhost','root','','restaurant');

$selectquery = " select * from buyer ";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);


?>

<html>
<head>
<link rel="stylesheet" href="admin-panel.css">
</head>
<body>
<div class="container-1">

<div class="box orange">
<p class="head">Total User's</p>
<p class="body"><?php echo $nums; ?></p>
</div>

<div class="box green">
<p class="head">Total Order</p>
<p class="body"> 369 </p>
</div>

<div class="box blue">
<p class="head">Total Revenu</p>
<p class="body"> 17,000 </p>
</div>

</div>

<div class="container-2">

<div class="scroll-1">
<p>New User</p>
<hr>
<table border="1" rules="columns">
<thead>
<tr>
      <th>Name</th>
      <th>phone</th>
      <th>E-mail</th>
      <th>Address</th>
      <th>Username</th>
      <th>Password</th>
</tr>
</thead>
<tbody>
<?php  

$con=mysqli_connect('localhost','root','','restaurant');

$selectquery = " select * from buyer ORDER BY id DESC ";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
	?>
       <tr>
	      <td><?php echo $res['name']; ?></td>
	      <td><?php echo $res['phone']; ?></td>
	      <td><?php echo $res['email']; ?></td>
	      <td><?php echo $res['address']; ?></td>
	      <td><?php echo $res['username']; ?></td>
	      <td><?php echo $res['password']; ?></td>
      </tr>
   <?php } ?>
		  
</tbody>
</table>

</div>

<div class="scroll-2">
<p> New Client</p>


</div>

</div>


</body>
</html>