


 <?php
  include('db.php');
   include('session.php');

$UID=$_GET['RID'];
if(empty($_GET))
{
	header("Location: AddState.php");
}
if (isset($_REQUEST['RID']))
{

   if(empty($_REQUEST['RID']))
   {
    header("Location: AddState.php");
   }
   else{
   	$UID=$_GET['RID'];
   }
}
  

$strSQL3= mysqli_query($db,"delete from state where ID=('$UID')");
 header("location: AddState.php");

?>