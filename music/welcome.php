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

<?php
$con=mysqli_connect("localhost","root","moparu","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM PERsons where Email_id='$_SESSION[email]'");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="pro1.css">
<style>
div.transbox p.p4
{
  margin: 30px 40px;
  font-weight: bold;
  color: Gold;
  font-size:20px;
  font-style:italic;
}
div.transbox p.p5
{
  margin: 30px 40px;
  font-weight: bold;
  color: blue;
  font-size:15px;
  font-style:italic;
}

</style>
</head>
<body>
<div class="back">
<img src="images1.jpeg"  width="200" height="100">
<img src="images2.jpeg"  width="350" height="100">
<img src="images8.jpeg"  width="340" height="100"><ul>
<li><a href="pro1.php">Home</a></li>
<li><a href="pro2.php">Rules</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="<?php echo$f1?>"><?php echo$reg?></a></li>
<li><a href="pro5.php">Contacts</a></li>
</ul>


<div class="transbox">
<?php
 echo$_SESSION['email'];?>
<br><br><br><br>
<?php
echo"<table><tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Email_id'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

</body>
</html>

