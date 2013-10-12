<?php
session_start();
if(isset($_SESSION['email']))
  unset($_SESSION['email']);
if(isset($_SESSION['login']))
  unset($_SESSION['login']);

header("Location: pro4.php");
?>
