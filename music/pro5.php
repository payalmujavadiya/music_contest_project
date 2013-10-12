<?php
session_start();
if($_SESSION['login']==1){
$login="logout";
$f="logout.php";
$reg="myprofile";
$f1="welcome.php";
}
else{
$login="login";
$f="pro4.php";
$reg="register";
$f1="pro3.php";}
?> 


<html>
<head>
<link rel="stylesheet" type="text/css" href="pro1.css">
<style>

</style>
</head>
<body>
<div class="back">
<img src="images1.jpeg"  width="200" height="100">
<img src="images2.jpeg"  width="350" height="100">
<img src="images8.jpeg"  width="340" height="100">
<ul>
<ul>

<li><a href="pro1.php">Home</a></li>
<li><a href="pro2.php">Rules</a></li>
<li><a href="<?php echo$f?>"><?php echo$login?></a></li>
<li><a href="<?php echo$f1?>"><?php echo$reg?></a></li>
<li><a href="pro5.php">Contacts</a></li>
</ul>


<div class="transbox">
<?php echo$_SESSION['email'];?>
<p class="p2">"After silence,that which comes nearest to express the inexpressible is <b>Music</b>"</p>
<p align="center"><b>Our official address is-<br>National Institute of<br>Technology,Tiruchirappalli<br>pincode-620015</b><br><br><br>Contact no.-<br>Mr ABC  1234567890<br><br>Mr XYZ 1234567899<br><br><b><img src="images12.jpeg"  width="250" height="250"align="top"></b></p>

</div>
</body>
</html>

