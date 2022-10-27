<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kashingi Morris Jumah">
    <title>ST Moris' Tech School</title>
    <!-- Bootstrap Stylesheet-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/">
    <!-- link to CSS stylesheet -->
    <link rel="stylesheet" href="../main.css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <!-- <link href="assets/css/custom-styles.css" rel="stylesheet" /> -->
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Link for Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="my_jquery_functions.js"></script>
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <?php echo "Home" ?> </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--Start side navbar  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-desktop"></i> Courses </a></li>
				    <li><a href="#"><i class="fa fa-bar-chart-o"></i>Profit</a></li>
                    <li><a href="#"><i class="fa fa-qrcode"></i> Payments</a></li>
                    <li><a  href="#"><i class="fa fa-qrcode"></i> </a></li>
                </ul>
            </div>
        </nav>
        <!--Side navbar-->
        <div id="page-wrapper" style="margin-top: -256px;">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           <b> Status <small>Room Booking </small></b>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
			    <div class="row">
                    <div class="col-md-12" style="margin-top: -30px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Welcome to hour tech School
                            </div>
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
							        <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										            <button class="btn btn-default" type="button">
											            New Room Bookings  <span class="badge">Room</span>
										            </button>
										        </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                            <div class="panel-body">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>&&</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Country</th>
                                                                        <th>Room</th>
                                                                        <th>Bedding</th>
                                                                        <th>Meal</th>
                                                                        <th>Check In</th>
                                                                        <th>Check Out</th>
                                                                        <th>Status</th>
                                                                        <th>More</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                </tbody>
                                                            </table>				
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End of the table-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                <button class="btn btn-primary" type="button">
                                                    Booked Rooms  <span class="badge">home</span>
                                                </button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                        <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>&&</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Country</th>
                                                                        <th>Room</th>
                                                                        <th>Bedding</th>
                                                                        <th>Meal</th>
                                                                        <th>Check In</th>
                                                                        <th>Check Out</th>
                                                                        <th>Status</th>
                                                                        <th>More</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                </tbody>
                                                            </table>				
                                                        </div>
                                                    </div>
                                                </div>
							            </div>
						            </div>
                                    </div>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                                    <button class="btn btn-primary" type="button">
                                                    Customers  <span class="badge">Welcome</span>
                                                    </button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                        
                                                                <tr>
                                                                    <th>&&</th>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>
                                                                    <th>Follow</th>
                                                                    <th>Permissions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
								                        <a href="#" class="btn btn-primary">More Actions</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== Start the updating section ====-->
            <div class="panel-body">
                <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
                    Update 
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class='modal-header'>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Change User name and Password</h4>
                            </div>
							<form method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" value="<?php echo 'Welcome home' ?>" class="form-control" placeholder="Enter user name">
                                    </div>
                                    <div class="form-group">
                                        <label> New Password </label>
                                        <input name="password" value="<?php echo 'welcome' ?>" class="form-control" placeholder="Enter Password">
									</div>
									<div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<input type="submit" name="update" value="Update" class="btn btn-primary">
                                    </div>
                                </div>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>

</html>
