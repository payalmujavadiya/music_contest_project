
<?php
mysql_connect("localhost", "root", "moparu");
mysql_select_db("my_db");
if(isset($_POST['login'])){
$myusername=mysql_real_escape_string($_POST['email']);
$mypassword=mysql_real_escape_string($_POST['pwd']);
 $sql="SELECT * FROM PERsons WHERE Email_id='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
session_start();
// store session data
$_SESSION['email']=$_POST['email'];
$_SESSION['login']="1";
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  header("location:welcome.php");
} else {
  echo "Wrong Username or Password";
}

}
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
<script>
function myFunction(){
var z=document.forms["my"]["email"].value;
var a=document.forms["my"]["pwd"].value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if(z==""||a==""){

var d=document.getElementById("mess");
d.innerHTML="*Error:   Fields with * sign cannot be empty.";
return false;
}
else {
if(a.length<5||a.length>9){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Password should include atleast 5 and atmost 9 characters.";
return false;
}
else{
for(var i=0;i<a.length;i++){
if((a[i]<"A"|| a[i]>"Z")&&(a[i]<"a"|| a[i]>"z")&&(a[i]<"0"||a[i]>"9")&&(a[i]!=="_")){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Password should include only alphabets,digits and underscore.";
return false;
break;
}
}
}
}
 if((atpos<1)||(dotpos<atpose+2)||(dotpos+2>=z.length))
{
var f=document.getElementById("mess");

f.innerHTML="*Error:   Email id should be valid";

return false;
}

}

</script>


</head>
<body>
<div class="back">
<img src="images1.jpeg"  width="200" height="100">
<img src="images2.jpeg"  width="350" height="100">
<img src="images8.jpeg"  width="340" height="100"><ul>
<li><a href="pro1.php">Home</a></li>
<li><a href="pro2.php">Rules</a></li>
<li><a href="pro4.php">Login</a></li>
<li><a href="pro3.php">Register</a></li>
<li><a href="pro5.php">Contacts</a></li>
</ul>


<div class="transbox">
<p class="p2">"God is a DJ,life is a dancefloor,love is the rhythm,you are the <b>MUSIC</b>"</p>
<form action="pro4.php"method="post" class="form1" name="my"onsubmit="return myFunction()" >
<fieldset>
<legend><p class="p4"><b>Contestant Login</b></p></legend>
<p id="mess"class="p5"></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email id*: <input autofocus type="text"  name="email"size="25"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password*:&nbsp;<input type="password"name="pwd"size="25"><br><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</b><input type="submit" value="Login"name="login" >
</form>

</div>
</body>
</html>

