<html>
<head><title>form2</title>
		<link rel="stylesheet" type="text/css" href="Lib_Assets/bootstrap.min.css">
    <link rel="stylesheet" href="Lib_Assets/sb-admin-2.css">

</head>
	<body>
		<center>
				<div class="panel-body">
					<div style="height: 300px; width: 450px; background-color: ; border-radius: 8px; box-shadow: 3px 4px 6px grey;" class="col-lg-4">
						<h2 style="font-family: comic sans ms; text-shadow: 3px 3px 3px gray">Student login</h2><br>
						
							<form class="form-horizontal" role="form" action="login_a.php" method="post">
								<div class="form-group">
									<label for="username" class="col-sm-3"> Username:</label>
										<div class="col-sm-6">
											<input type="text" name="username"class="form-control" placeholder="username"required>						
										</div>
								</div><br>

								<div class="form-group">
									<label for="password" class="col-sm-3 control-label">Password:</label>
										<div class="col-sm-6">
											<input type="password" name="password"class="form-control" placeholder="password"required>						
										</div>
								</div><br>

								<div class="form-group"> 
									<div class="col-sm-offset-4 col-sm-10"> 
										<button type="submit" name="submit" class="btn btn-primary" style="margin-left: 0px;">Login</button> 
									</div> 
								</div><br><br>

								<a href="change_password.php" style="margin-left: 135px; margin-bottom: -20px">Change Password</a>
							</form>
         			</div>
				</div>
		</center>
		
	</body>
</html>