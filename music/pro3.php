<?php
$con=mysqli_connect("","root","moparu","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST[submit])){
$sql="INSERT INTO PERsons VALUES('$_POST[fname]','$_POST[day]-$_POST[month]-$_POST[year]','$_POST[sex]','$_POST[email]','$_POST[resi]','$_POST[pwd]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "You are successfully registered";

mysqli_close($con);
header("Location: pro4.php");
}
?>
 

<html>
<head>
<link rel="stylesheet" type="text/css" href="pro1.css">
<style>
.error{border:1px solid red; }
.message{color: red; font-weight:bold; }
</style>
<script>
function myFunction(){
var x=document.forms["my"]["fname"].value;
var z=document.forms["my"]["email"].value;
var a=document.forms["my"]["pwd"].value;
var b=document.forms["my"]["rpwd"].value;
var u=document.forms["my"]["day"].value;
var v=document.forms["my"]["year"].value;
var w=document.forms["my"]["month"].value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if(x==""||z==""||a==""||b==""||v==""){
var d=document.getElementById("mess");
d.innerHTML="*Error:   Fields with * sign cannot be empty.";
return false;
}
else if(((w=="April"||w=="June"||w=="Sept"||w=="Nov")&&(u=="31"))||(v>"2013")){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Date should be valid.";
return false;
}
else if((w=="feb")&&(((u=="29")&&((v%4!=0)||(v%100==0&&v%400!=0)))||(u>"29"))){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Date should be valid.";
return false;
}
else {
if(a.length<5||a.length>9){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Password should include atleast 5 and atmost 9 characters.";
return false;
}else if(a!=b){
var f=document.getElementById("mess");
f.innerHTML="*Error:   Password and repeat password must be equal.";
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
<p class="p2">"Music,the greatest good that mortals know and all of heaven we have hear below"</p>
<form  method="post" class="form1" name="my"onsubmit="return myFunction()" action="pro3.php">
<fieldset>
<legend ><b>Registration Form</b></legend>
<p id="mess"></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="e1" name="fname"size="25"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOB* :Mon<select name="month">
      <option value="Jan">Jan</option>
 <option value="feb">Feb</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="Sept">Sept</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option>
</select>
Day<select name="day">
      <option value="1">1</option>
 <option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option> <option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select>
Year<input type="number"  name="year"size="1"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="male">Male
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex"value="female">Female<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email id*: <input type="text"  name="email"size="25"><br><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Residential Address:</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="5" cols="52" name="resi">
</textarea><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"name="pwd"size="13"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repeat Password field*:<input type="password" name="rpwd" size="13"><br><br>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register me</b><input type="submit" value="submit" name="submit">
</fieldset>
</form>
</div>
</body>
</html>

