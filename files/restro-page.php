<?php

$restro_name = $_POST['restro-name'];

$con=mysqli_connect('localhost','root','','restaurant');

$selectquery = " SELECT * FROM `restro`  ";

$query = mysqli_query($con,$selectquery);

$res = mysqli_fetch_array($query)

?>

<html>
<head>
<link rel="stylesheet" href="../css/restro-page.css">
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

<a href="start.php" >HOME</a>

</li>

<li>

<a href="login.php">LOGIN</a>

</li>

<li>

<a href="contact">Contact</a>
</li>
</ul>
</div>
</div>
<!-- head part end -->

<div class="vd">

<p>Welcome to <?php echo $restro_name;   ?> Restaurant.</p>

</div>


<div class="container-2">

<div class="menu">
<img src="../Image/breakfast.jpg"></a>
<p><form action="breakfast-menu.php" method="post">
<input type="hidden" value="<?php echo $restro_name;   ?>" name="restro-name">
<input type="hidden" value="<?php echo $res['restro_id'] ?>" name="restro-id">
<button type="submit" class="but">Breakfast</button></p></form>
</div >

<div class="menu">
<img src="../Image/lunch.jpg"></a>
<p><form action="lunch-menu.php">
<input type="hidden" value="<?php echo $restro_name;   ?>">
<input type="hidden" value="<?php echo $res['restro_id'] ?>">
<button type="submit" class="but">Lunch</button></p></form>
</div >

<div class="menu">
<img src="../Image/dinner.jpg"></a>
<p><form action="dinner-menu.php">
<input type="hidden" value="<?php echo $restro_name;   ?>">
<input type="hidden" value="<?php echo $res['restro_id'] ?>">
<button type="submit" class="but">Dinner</button></p></form>
</div >


</div>
<?php
$con=mysqli_connect('localhost','root','','restaurant');

$selectquery = " SELECT * FROM `restro` WHERE `restro-name` = '$restro_name' ";

$query = mysqli_query($con,$selectquery);

$res = mysqli_fetch_array($query)
?>
<div class="container-3">
<div class="menu-s">
<img src="../Image/pizza.jpg"></a>
<p><form action="special-menu.php">
<input type="hidden" value="<?php echo $restro_name;   ?>">
<input type="hidden" value="<?php echo $res['restro_id'] ?>">
<button type="submit" class="btn-2">Special Menu</button></p>
</div >
</div>


<div class="book">

<h1 class="mid">Visit Our Restaurant.<h1>
<h2 class="mid">Book Your Table </h2>
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