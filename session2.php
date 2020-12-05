<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['user'];
   
   $ses_sql = mysqli_query($db,"select 	Email from users where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['user'])){
      header("location:login.php");
   }
?>