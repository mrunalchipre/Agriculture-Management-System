<?php
   include('db.php');
    include('session.php');


  $UID ="";
  $State="";
    $error="";
               

    $strSQL2= mysqli_query($db,"select * from state");


   if($_SERVER["REQUEST_METHOD"] == "POST") {
$Name = $_POST['Name'];

$data = mysqli_query($db,"insert into state(Name) values ('$Name')");
        if($data)
        {
     $error="State Added Successfully!";
      echo "<meta http-equiv='refresh' content='0'>";
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
		<!-- //market-->
	
		<!-- //market-->
		<div class="card-header">Add New State</div>
      <div class="card-body">
        <form method="POST">
          <h5 style="color: red; text-align: center;"><?php echo $error ?></h5>
          <div class="form-group">
          
            <input class="form-control" name="Name" id="Name" type="Name"  placeholder="Enter New State">
          </div>
        
         
          <button class="btn btn-primary btn-block" type="submit">Add New State</button> 
        </form>
        <div class="text-center">
       
     
        </div>
      </div>
    </div>

		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Existing States
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
       <th>States</th>
                  <th>Delete</th>
          </tr>
        </thead>
        <tbody>
       <?php
              while ($rows = mysqli_fetch_array($strSQL2,MYSQLI_ASSOC)):
             
                   $UID =$rows["ID"];
                   $State=$rows["Name"];
               
             
              ?>
                <tr>
                  <td><?php echo $State; ?></td>
                  <td><button onclick="window.location.href='DeleteState.php?RID=<?php echo $UID; ?>'">Delete</button></td>
                </tr>
                    <?php endwhile; ?> 
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
      <!-- Example DataTables Card-->
      

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
