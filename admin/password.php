<!DOCTYPE html>
<html lang="en">
	<head>
 		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=l, shrink-to-fit=no">
		<meta name="author" content="Website and system designer. Kashing74 KE">
		<title>Tech school</title>

		<!-- Bootstrap CSS File -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity= "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<!--Script-->
        <link rel="stylesheet" href="../asset/css/main.css">
		<script src="verify.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div class="container" style="margin-top:30px">
			<!-- Header Section -->
			<header class="jumbotron text-center" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:5px;">
                <div class="row">
                    <div class="col-sm-2">
                        <img class="img-fluid float-left" src="../bootstrap/image/logo.png" alt="logo">
                    </div>
                    <div class="col-sm-10">
                        <h1 class="font-bold">Welcome Administrator</h1>
                    </div>
                </div>
				<div class="row">
					<!-- ===== Start Navbar ===== -->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="margin-left:40%">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">Logout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="password.php">Erase Entries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
				</div>
			</header>
            <!-- Body Section -->
            <div class="row" style="padding-left: 0px;">
                <!-- Left-side Column Menu Section -->
                <!-- <nav class="col-sm-2">
                    <ul class="nav nav-pills flex-column">
						<?php 
                            include '../includes/navi.php';
                        ?>
                    </ul>
                </nav> -->
				<!-- Validate Input -->
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        require('process-change-password.php');	//#!
                    }  // End of the main Submit conditional.
                ?>
                <div class="col-sm-8">
                    <h2 class="h2 text-center my-3">Change Password</h2>
                    <form action="password.php" method="post" name="regform" id="regform" onsubmit="return checked();">
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" maxlength="60" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">Current Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-sm-4 col-form-label">New Password:</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>"> 
                                <span id='message'>Between 8 and 12 characters.</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-4 col-form-label">Confirm Password:</label> 
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row" style="align-content:center; margin-left:270px">
                                <input id="submit" class="btn btn-primary mx-5" type="submit" name="submit" value="Change Password">
                            </div>
                        </div>
                    </form>
                </div>
				<div class="col-sm-2">
					
					<!--Center column Content-->

					<!--Center Column content -->
					<!-- Right-side Column Content Section -->
					<!-- <aside class="float-left">
						<?php 
                            include '../includes/col.php';
                        ?>
					</aside> -->
				</div> 
			</div>
			<!--The footer Content-->
			<!-- <footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
                <?php 
                    include '../includes/footer.php'; 
                ?>
            </footer> -->
        </div>
	</body>
</html>