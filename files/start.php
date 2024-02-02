<html>
<head>
<link rel="stylesheet" href="../css/home.css">
</head>
<body>
<div class="navbar">

<div class="logo">

<img src="../Image/logo.png"> </div>

<div class="search">

<form>

<input type="search" name="search_bar" placeholder="Search..."> <button type="submit" name="btn" class="btn" >SEARCH</button>
</form>
</div>


<div class="nav" >

<ul>

<li>

<a href="home.html" >HOME</a>

</li>

<li>

<a href="profile.php"><img src="../Image/profile.png" width="50px" height="50px"></a>

</li>

<li>

<a href="contact">Contact</a>
</li>
</ul>
</div>
</div>
<!-- head part end -->

<div class="vd">

<p>Welcome to Food Point</p>

</div>


<div class="container-2">
<?php  

$con=mysqli_connect('localhost','root','','restaurant');

$selectquery = " select * from  restro  ";

$query = mysqli_query($con,$selectquery);



while($res = mysqli_fetch_array($query)){
	?>
<div class="res">
<img src="../Image/<?php echo $res['restro-img']; ?>">

<p><?php echo $res['restro-name']; ?></p>


<div class="form">
<form action="restro-page.php" method="post">
<input type="hidden" value="<?php echo $res['restro-name']; ?>" name="restro-name" >
<input type="submit" value="Explore" Class="button"> 
</form>
</div>
</div >
<?php }  ?>
</div >



<div class="book">

<h1 class="mid">GO OutSide For Lunch / Dinner.<h1>
<h2 class="mid">Book Your Table in Your Favourite Restro...</h2>
<a  href="book.php" class="mid">BOOK NOW</a>


</div>


<!--  footer -->
<div class="footer">
<div class="contact">
<p>Email :-</p>
<p> vrfashionquery@gmail.com</p>
<p>Contact 24x7</p>
<p>97454-25654</p>
</div>

<div class="thanks">
<p>THANK'S FOR VISTING</p>
<div class="f-logo">
<img src="../Image/ig.png">
</div>

<div class="f-logo">
<img src="../Image/fb.png">
</div>

<div class="f-logo">
<img src="../Image/tw.png">
</div>
</div>

<div class="about">
<h1>About</h1>
<p>This WebSite is Design By Pukhraj Tater.</p>
</div>

</div>
</body>
</html>