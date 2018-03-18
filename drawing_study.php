<? php
    session_start();
?>
<!--doctype html-->
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>Forms</p>
                    </a>
                </li>                
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Forms</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   <!-- <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">Chet Faker<br />
                                     <a href="#"><small>@chetfaker</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>12<br /><small>Files</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2GB<br /><small>Used</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>24,6$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <? php 
										$conn =mysqli_connect("localhost","root","","forms");
										$query="select enq_num from enquiry where status like 'OK' ";
										$result=mysqli_query($conn,$query);
                                        mysqli_num_rows($result);
                    for()
    
    
    
    
    
    
    
                    ?>
<!--forms-->               <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Drawing Study</h4>
                            </div>
                            <div class="content">
                                <form id="enqiry" action="draw_study_insert.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Enquiry Number</label>
                                                <input type="text" name="enq_num" class="form-control border-input" placeholder="Customer ID">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Customer Name *</label>
                                                <input type="text" name="cus_name" class="form-control border-input" placeholder="Customer Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Component Name *</label>
                                                <input type="text" class="form-control border-input" placeholder="Company name" name="component_name">
                                            </div>
                                        </div>
									</div>	
									 <div class="row">
                                  		<div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Part Number *</label>
                                                <input type="text" class="form-control border-input" placeholder="Part Number" name="part_num">
                                            </div>
										</div>
									
										
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quantity *</label>
                                                <input type="text" class="form-control border-input" placeholder="Quantity" name="quantity">
                                            </div>
                                        </div>
									</div>
									</div>
									<div class="row">
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Material *</label>
                                                <li><select name="material">									
													<option value="customer" class="form-control border-input">Customer</option>
													<option value="purchase" class="form-control border-input">Purchase</option>
												</select></li>
                                            </div>
                                        </div>
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Material Grade *</label>
                                                <input type="text" class="form-control border-input" name="material_grade" placeholder="Material Grade">
                                            </div>
                                        </div>
                                    </div>		
									 <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 1</label>
                                                <input type="text" name="oper1" class="form-control border-input" placeholder="Operation 1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 1</label>
                                                <input type="text" name="Sett1" class="form-control border-input" placeholder="Setup Time 1">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 1</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 1" name="cyt1">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 2</label>
                                                <input type="text" name="oper2" class="form-control border-input" placeholder="Operation 2">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 2</label>
                                                <input type="text" name="Sett2" class="form-control border-input" placeholder="Setup Time 2">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 2</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 2" name="cyt2">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 3</label>
                                                <input type="text" name="oper3" class="form-control border-input" placeholder="Operation 3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 3</label>
                                                <input type="text" name="Sett3" class="form-control border-input" placeholder="Setup Time 3">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 3</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 3" name="cyt3">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 4</label>
                                                <input type="text" name="oper4" class="form-control border-input" placeholder="Operation 4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 4</label>
                                                <input type="text" name="Sett4" class="form-control border-input" placeholder="Setup Time 4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 4</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 4" name="cyt4">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 5</label>
                                                <input type="text" name="oper5" class="form-control border-input" placeholder="Operation 5">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 5</label>
                                                <input type="text" name="Sett5" class="form-control border-input" placeholder="Setup Time 5">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 5</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 5" name="cyt5">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 6</label>
                                                <input type="text" name="oper6" class="form-control border-input" placeholder="Operation 6">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 6</label>
                                                <input type="text" name="Sett6" class="form-control border-input" placeholder="Setup Time 6">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 6</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 6" name="cyt6">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 7</label>
                                                <input type="text" name="oper7" class="form-control border-input" placeholder="Operation 7">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 7</label>
                                                <input type="text" name="Sett7" class="form-control border-input" placeholder="Setup Time 7">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 7</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 7" name="cyt7">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 8</label>
                                                <input type="text" name="oper8" class="form-control border-input" placeholder="Operation 8">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 8</label>
                                                <input type="text" name="Sett8" class="form-control border-input" placeholder="Setup Time 8">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 8</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 8" name="cyt8">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 9</label>
                                                <input type="text" name="oper9" class="form-control border-input" placeholder="Operation 9">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 9</label>
                                                <input type="text" name="Sett9" class="form-control border-input" placeholder="Setup Time 9">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 9</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 9" name="cyt9">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Operation 10</label>
                                                <input type="text" name="oper10" class="form-control border-input" placeholder="Operation 10">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Setup Time 10</label>
                                                <input type="text" name="Sett10" class="form-control border-input" placeholder="Setup Time 10">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cycle Time 10</label>
                                                <input type="text" class="form-control border-input" placeholder="Cycle Time 10" name="cyt10">
                                            </div>
                                        </div>
									</div>
                                   
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-info btn-fill btn-wd" value="Submit">
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
