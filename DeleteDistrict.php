


 <?php
  include('db.php');
   include('session.php');

$UID=$_GET['RID'];
if(empty($_GET))
{
	header("Location: AddDistrict.php");
}
if (isset($_REQUEST['RID']))
{

   if(empty($_REQUEST['RID']))
   {
    header("Location: AddDistrict.php");
   }
   else{
   	$UID=$_GET['RID'];
   }
}
  

$strSQL3= mysqli_query($db,"delete from dist where ID=('$UID')");
 header("location: AddDistrict.php");

?>