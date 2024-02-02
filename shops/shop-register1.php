<html>
<head>
<link rel="stylesheet" href="../css/shop-signup.css">
</head>
<body>

<div class="logo">
<img src="../Image/logo.png">
<h1>Shop Area</h1>
<h2>Welcome Food Point</h2>

</div>

<div class="form">
<form action="../php/shop-signup1.php" method="post">
<label for="shop-name">Shop Name</label>
<input type="text" class="field" name="restro-name">
<label for="shop-email">Shop Address</label>
<input type="text" class="field" name="restro-address">
<label for="shop-phone">Shop Mobile no.</label>
<input type="text" class="field" name="restro-phone" maxlength="10">
<label for="shop-addhar">Shop Poster(Image)</label>
<input type="files" class="field" name="restro-poster">

<input type="submit" class="btn" value="Next">

</form>
</div>

</body>
