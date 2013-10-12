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
div.transbox p.p1
{
  margin: 30px 40px;
  font-weight: bold;
  color: red;
  font-size:30px;
  font-style:italic;
}
div.transbox p.para
{
  margin: 30px 40px;
  font-weight: bold;
  color: black;
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
<li><a href="<?php echo$f?>"><?php echo$login?></a></li>
<li><a href="<?php echo$f1?>"><?php echo$reg?></a></li>
<li><a href="pro5.php">Contacts</a></li>
</ul>


<div class="transbox">
<?php echo$_SESSION['email'];?>
<b>
<p class="p2">"People are like<b>Music</b>;Some speak the truth and others are just noise"</p>
<p class="p1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Rules</p>
<p class="para">THE MEGA MUSIC CONTEST OFFICIAL RULES
Effective July 31, 2013
NO PURCHASE OF ANY KIND IS NECESSARY TO ENTER OR WIN. A PURCHASE WILL NOT IMPROVE YOUR CHANCES OF WINNING

    SPONSORS: The Mega music contest is sponsored by music Theory,  subject to the following terms and conditions.
    <br>ELIGIBILITY: An Entrant (Individual) must be sixteen (16) years of age or older at the time of entry, and possess a valid form of identification (no top age limit). An Entrant under the age of eighteen (18) shall require parental consent to participate. Invalid or ineligible entries shall be excluded from consideration. Employees of Sponsors, their respective parents, subsidiaries, affiliated companies, and agents, and foregoing employees' household or immediate family members (defined as parent, spouse, child, sibling, or grandparent) are NOT eligible to enter Contest. By their submission of entry, Entrants warrant they are legally entitled and authorized to make such submission on their own behalf. In the event of a dispute as to the winner's identity, entries will be deemed made by the holder of the email account associated with the entry. Void where prohibited by law or restricted. Subject to all applicable federal, state and local laws and regulations.
<br>
    The Contest is open to Non-Professional Musician of all nationalities. An Entrant may not be a Professional Musician and may not be signed to any labels or management. Professional Musician are defined as a Musician who is making 100% of his/her living from professional music endeavors such as teaching music lessons (i.e. 30-60 full time students); touring full-time with a band; doing session work full-time (records, t.v., film, commercials, pit orchestras, etc). For example, if a guitarist teaches a few students or does some gigs, shows and sessions, they would not necessarily be considered a Professional Musician. We realize it is subjective defining what a Non-Professional Musician is but we are providing some general definitions for guidance. The qualifications of a Non-Professional Musician will ultimately be the discretion of the Music Theory Management Team. Previous  Mega Music contest Grand Prize Winners cannot re-apply, however previous Semi-finalists or Finalists, as well as previous applicants may apply again.</b>
</div>
</body>
</html>

