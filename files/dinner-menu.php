<?php

$restro_name = $_POST['restro-name'];
$restr_id = $_POST['restro-id'];
?>
<html>
<head>
<link rel="stylesheet" href="../css/breakfast-menu.css">
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

<p>DINNER-MENU</p>

</div>


<div class="container-2">

<div class="item">
<img src="../Image/chai.jpg">
<input type="submit" class="btn-2" value="Buy Now" >
</div>

<div class="item">
<img src="../Image/chai.jpg">
<input type="submit" class="btn-2" value="Buy Now" >
</div>

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