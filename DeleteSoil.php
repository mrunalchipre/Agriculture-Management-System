


 <?php
  include('db.php');
   include('session.php');

$UID=$_GET['RID'];
if(empty($_GET))
{
	header("Location: Addsoil.php");
}
if (isset($_REQUEST['RID']))
{

   if(empty($_REQUEST['RID']))
   {
    header("Location: Addsoil.php");
   }
   else{
   	$UID=$_GET['RID'];
   }
}
  

$strSQL3= mysqli_query($db,"delete from soiltype where ID=('$UID')");
 header("location: Addsoil.php");

?>