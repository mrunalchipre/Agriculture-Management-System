<?php
include("db.php");

$error="";



if($_SERVER["REQUEST_METHOD"] == "POST") {
$Name = $_POST['Name'];
$DOB = $_POST['DOB'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Pass = $_POST['Pass'];

$data = mysqli_query($db,"insert into Users(Name,Phone,DOB,Email,Pass) values ('$Name','$Phone','$DOB','$Email','$Pass')");
        if($data)
        {
     $error="Account Created Successfully!";
        }
        else
        {
            $error = "problem with database please try again later";
        } 


}

?>
<!DOCTYPE html>
<head>
<title>Agriculture Information System</title>
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
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign Up</h2>
		
			<div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Your Details
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               <form method="post">
                                 <h5 style="color: red; text-align: center;"><?php echo $error ?></h5>
                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Your Name</label>
                                    <input type="text" id="Name" name="Name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Phone No.</label>
                                    <input type="text" id="Phone" name="Phone"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Date of Birth</label>
                                    <input type="date" id="DOB" name="DOB" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" id="Email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" id="Pass" name="Pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                               
                                
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

		
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
