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
$f1="pro3.php";
}
?> 

<html>
<head>
<link rel="stylesheet" type="text/css" href="pro1.css">
<style>

div.transbox p.p1
{
  margin: 30px 40px;
  font-weight: bold;
  color: red;
  font-size:40px;
  font-style:italic;
}


</style>


</style>
</head>

<body >
<div class="back">
<img src="images1.jpeg"  width="200" height="100">
<img src="images2.jpeg"  width="350" height="100">
<img src="images8.jpeg"  width="340" height="100"><ul>
<li><a href="pro1.php">Home</a></li>
<li><a href="pro2.php">Rules</a></li>
<li><a href="<?php echo$f?>"><?php echo$login?></a></li>
<li><a href="<?php echo$f1?>"><?php echo$reg?></a></li>
<li><a href="pro5.php">Contacts</a></li>
</ul>


<div class="transbox">
<?php echo$_SESSION['email'];?>
<p class="p1">Welcome!</p>
<p class="p2">We are organizing a<b> MEGA MUSIC CONTEST</b><br><br><br><br><br></p><p>&nbsp;&nbsp;&nbsp;<b>"Music is the movement of sound to reach the soul for the education of its virtue."</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-By Plato</p><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>"Without music, life would be an error. The German imagines even God singing &nbsp;&nbsp;&nbsp;songs
Send quote to a friend."</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
Friedrich Nietzsche</p>
</div>
</body>
</html>


