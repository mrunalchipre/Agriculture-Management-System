<?php
   include('db.php');
    include('session.php');
  $Corp="";
  $State="";
  $District="";
  $Soil="";
  $Season="";
  $Fertilizer="";
    $error="";
               


 $strSQL= mysqli_query($db,"select * from corp");
 $strSQL2= mysqli_query($db,"select * from state");
 $strSQL3= mysqli_query($db,"select * from dist");
 $strSQL4= mysqli_query($db,"select * from soiltype");
 $strSQL5= mysqli_query($db,"select * from season");
  $strSQL6= mysqli_query($db,"select * from fertilizer");




if($_SERVER["REQUEST_METHOD"] == "POST") {
$Corp1 = $_POST['Corp'];
$State1 = $_POST['State'];
$District1 = $_POST['District'];
$Soil1 = $_POST['Soil'];
$Season1 = $_POST['Season'];
$Fertilizer1 = $_POST['Fertilizer'];
$Minimum = $_POST['Minimum'];
$Maximum = $_POST['Maximum'];

$data = mysqli_query($db,"insert into corpdetails(corp,state,dist,soil,season,fertilizer,min,max) values ('$Corp1','$State1','$District1','$Soil1','$Season1','$Fertilizer1','$Minimum','$Maximum')");
        if($data)
        {
     $error="Deatails Added Successfully!";
        }
        else
        {
            $error = "problem with database please try again later";
        } 


}




?>
<!DOCTYPE html>
<head>
<title>Agriculture Information Systems</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
       Agri-Info
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
     
        <!-- settings end -->
        <!-- inbox dropdown start-->
       
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               
                <span class="username">Main Admin</span>
                <b class="caret"></b>
            </a>
            
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="amain.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Selectcorp.php">
                        <i class="fa fa-circle"></i>
                        <span>Corp Details</span>
                    </a>
                </li>
                <li>
                    <a href="corpdetails.php">
                        <i class="fa fa-info-circle"></i>
                        <span>Add New Corp Details</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Add New data</span>
                    </a>
                    <ul class="sub">
                        <li><a href="addcorp.php">Add Corp</a></li>
                        <li><a href="AddState.php">Add State</a></li>
                        <li><a href="AddDistrict.php">Add District</a></li>
                        <li><a href="Addsoil.php">Add Soil Type</a></li>
                        <li><a href="AddSeason.php">Add Season</a></li>
                        <li><a href="AddFertilizer.php">Add Fertilizer</a></li>
                    </ul>
                </li>
                <li>
                    <a href="Logout.php">
                        <i class="fa fa-info-logout"></i>
                        <span>Logout</span>
                    </a>
                </li>
                
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->

		
		<section id="main-content">
	<section class="wrapper">
		<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Details
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="POST">
                                    <h5 style="color: red; text-align: center;"><?php echo $error ?></h5>
                               <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Corp</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Corp" id="Corp" class="form-control" required="">
                                <option value="0">Please select Corp</option>
                                <<?php
                            
                            while ($rows = mysqli_fetch_array($strSQL,MYSQLI_ASSOC)):
                             
                                $Corp=$rows["Name"];
                                




 ?>
                                <option value="<?php echo $Corp; ?>"><?php echo $Corp; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">State</label></div>
                            <div class="col-12 col-md-9">
                              <select name="State" id="State" class="form-control" required="">
                                <option value="0">Please select State</option>
                                <<?php
                            
                            while ($rowA = mysqli_fetch_array($strSQL2,MYSQLI_ASSOC)):
                             
                                $State=$rowA["Name"];
                                




 ?>
                                <option value="<?php echo $State; ?>"><?php echo $State; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>



                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">District</label></div>
                            <div class="col-12 col-md-9">
                              <select name="District" id="District" class="form-control" required="">
                                <option value="0">Please select District</option>
                                <<?php
                            
                            while ($rowB = mysqli_fetch_array($strSQL3,MYSQLI_ASSOC)):
                             
                                $District=$rowB["Name"];
                                




 ?>
                                <option value="<?php echo $District; ?>"><?php echo $District; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>



                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Soil</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Soil" id="Soil" class="form-control" required="">
                                <option value="0">Please select Soil</option>
                                <<?php
                            
                            while ($rowC = mysqli_fetch_array($strSQL4,MYSQLI_ASSOC)):
                             
                                $Soil=$rowC["Name"];
                                




 ?>
                                <option value="<?php echo $Soil; ?>"><?php echo $Soil; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>



                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Season</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Season" id="Season" class="form-control" required="">
                                <option value="0">Please select Season</option>
                                <<?php
                            
                            while ($rowD = mysqli_fetch_array($strSQL5,MYSQLI_ASSOC)):
                             
                                $Season=$rowD["Name"];
                                




 ?>
                                <option value="<?php echo $Season; ?>"><?php echo $Season; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>


                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Fertilizer</label></div>
                            <div class="col-12 col-md-9">
                              <select name="Fertilizer" id="Fertilizer" class="form-control" required="">
                                <option value="0">Please select Fertilizer</option>
                                <<?php
                            
                            while ($rowE = mysqli_fetch_array($strSQL6,MYSQLI_ASSOC)):
                             
                                $Fertilizer=$rowE["Name"];
                                




 ?>
                                <option value="<?php echo $Fertilizer; ?>"><?php echo $Fertilizer; ?></option>
                               <?php endwhile; ?> 
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                        <label class="col-sm-3 control-label">Minimum Market Price</label>
                        <div class="col-sm-6">
                            <input type="text" name="Minimum" id="Minimum" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-3 control-label">Maximum Market Price</label>
                        <div class="col-sm-6">
                            <input type="text" name="Maximum" id="Maximum" class="form-control">
                        </div>
                    </div>

                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           <!-- //market-->

</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
