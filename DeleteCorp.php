


 <?php
  include('db.php');
   include('session.php');

$UID=$_GET['RID'];
if(empty($_GET))
{
	header("Location: addcorp.php");
}
if (isset($_REQUEST['RID']))
{

   if(empty($_REQUEST['RID']))
   {
    header("Location: addcorp.php");
   }
   else{
   	$UID=$_GET['RID'];
   }
}
  

$strSQL3= mysqli_query($db,"delete from corp where ID=('$UID')");
 header("location: addcorp.php");

?>