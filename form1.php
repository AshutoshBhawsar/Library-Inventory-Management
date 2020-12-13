
<?php
session_start();
?>
<html>
	<head>
  		<title> Login:Admin</title>
  		<style></style>
		<link rel="stylesheet" href="Lib_Assets/bootstrap.min.css">
    <link rel="stylesheet" href="Lib_Assets/sb-admin-2.css">
		
    </head>
  <body> 
  <center>
    <div class="panel-body">
         <div style="height: 300px; width: 450px; background-color: #ffdb58; border-radius: 8px; box-shadow: 3px 4px 6px #f87217;transition:box-shadow 1s" class="col-lg-4">
          <h2 style="font-family: comic sans ms; text-shadow: 3px 3px 3px orange">Admin login</h2><br>
          
            <form action="admin_login.php" method="post" class = "form-horizontal" role = "">
   
               <div class = "form-group">
                  <label for = "username" class = "col-sm-4 control-label">Username:</label>
                    
                  <div class = "col-lg-6">
                     <input type = "text" class = "form-control" name="username" id = "" placeholder = "Username" required>
                  </div>
               </div>
               
               <div class = "form-group">
                  <label for = "password" class = "col-sm-4 control-label">Password:</label>
                    
                  <div class = "col-lg-6">
                     <input type = "password" class = "form-control" name="password" id = "" placeholder = "Password" required>
                  </div>
               </div>

               <div class="form-group"> 
                    <div class="col-sm-offset-4 col-sm-12"> 
                        <button type="submit" name="submit" class="btn btn-primary">Login</button> 
                    </div> 
                </div>

                <a href="faculty-change-password.php" style="margin-left: 135px; margin-bottom: -20px">Change Password</a>

            </form>
         </div>
     </div>
     </center>
     <nav class = "navbar navbar-fixed-bottom">

	</body>
</html>