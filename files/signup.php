<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
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

<a href="login.php">LOGIN</a>

</li>

<li>

<a href="contact">Contact</a>
</li>
</ul>
</div>
</div>
<!-- head part end -->


<div class="main">
<div class="title">
<p> SIGNUP </p>
</div>

<div class="form">
  <form id="login" class="input-group" action="../php/signup.php" method="post">
        <input type="text" class="input-field" placeholder="Name" name="name"required>
        <input type="text" class="input-field" placeholder="E-Mail" name="email"required>
        <input type="text" class="input-field" placeholder="Mobile no." name="phone"required>
        <input type="text" class="input-field" placeholder="Address" name="address"required>
	    <input type="text" class="input-field" placeholder="User ID" name="username"required>
		<input type="text" class="input-field" placeholder="Password" name="password"required>
		<button type="submit" class="submit-btn">SIGN UP</button>
		</form>


</div>

</div>






<!--  footer -->
<div class="footer">
<hr>
<div class="contact">
<p>Email :-</p>
<p> vrfashionquery@gmail.com</p>
<p>Contact 24x7</p>
<p>97454-25654</p>
</div>

<div class="thanks">
<p>THANK'S FOR VISTING</p>
<div class="f-logo">
<img src="../image/ig.png">
</div>

<div class="f-logo">
<img src="../image/fb.png">
</div>

<div class="f-logo">
<img src="../image/tw.png">
</div>
</div>

<div class="about">
<h1>About</h1>
<p>This WebSite is Design By Pukhraj Tater.</p>
</div>

</div>
</body>
</html>