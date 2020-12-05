


 <?php
  include('db.php');
   include('session.php');

$UID=$_GET['RID'];
if(empty($_GET))
{
	header("Location: AddFertilizer.php");
}
if (isset($_REQUEST['RID']))
{

   if(empty($_REQUEST['RID']))
   {
    header("Location: AddFertilizer.php");
   }
   else{
   	$UID=$_GET['RID'];
   }
}
  

$strSQL3= mysqli_query($db,"delete from fertilizer where ID=('$UID')");
 header("location: AddFertilizer.php");

?>