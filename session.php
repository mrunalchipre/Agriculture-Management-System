<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['admin'];
   
   $ses_sql = mysqli_query($db,"select 	Email from admin where Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['admin'])){
      header("location:admin.php");
   }
?>