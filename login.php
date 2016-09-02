<?php    
session_start();
include_once 'dbconnect.php';
include("sign_in.php");

if(isset($_SESSION['user'])!="")
{
 header("Location: profile.php");
}
if(isset($_POST['btn_signin']))
{
 $user = mysqli_real_escape_string($link,$_POST['user']);
 $pass = mysqli_real_escape_string($link,$_POST['password']);
 $query = "SELECT * FROM users WHERE username='$user'" or die("Error in the consult.." . mysqli_error($link));
 $result = mysqli_query($link, $query);
 $row = mysqli_fetch_array($result, MYSQLI_BOTH);
 if($row['password']==md5($pass))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: profile.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>