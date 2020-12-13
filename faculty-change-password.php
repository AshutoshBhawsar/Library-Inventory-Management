<HTML>
<head>
<title>Library:Change Password</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <link rel="stylesheet" type="text/css" href="Lib_Assets/bootstrap.min.css">
    <link rel="stylesheet" href="Lib_Assets/sb-admin-2.css">
    <link rel="stylesheet" href="Lib_Assets/demo.css">
  <link rel="stylesheet" href="Lib_Assets/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <script src="Lib_Assets/jquery.js"></script>
    <script src="Lib_Assets/bootstrap.min.js"></script>
    <script src="Lib_Assets/bootstrap-hover-dropdown.js"></script>
    <!-- Bootstrap Core CSS -->
    
    <!-- MetisMenu CSS -->
    <link href="Lib_Assets/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="Lib_Assets/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="Lib_Assets/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Lib_Assets/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="Lib_Assets/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
    .a{
        font-family: cursive;
        text-shadow:2px 3px 4px ;
        font-size:30 ;
        text-decoration: underline;

    }
    
    .b{
        background-color: ivory;
        box-shadow: 2px 3px 4px grey;
        width: 99%;
        height: 85%;
    }
    .b:hover{
        box-shadow: 3px 4px 8px #323232 ;
        transition:box-shadow 1s;
    }
    .title
      {
        margin-left: 10px;
        font-size: 40px;
        text-shadow: 2px 2px 3px purple;
        font-family: "Times new roman";
      } 
      .div{
      width: auto;
      height: 140px;
      }

    .mar{
      margin-top: -40px;
      font-size: 35px;
          }

</style>
</head>
<BODY>

 <div>
    <div>
        <img class="pull-left" style="margin-left: 30px;width: 170px; height: 140px; " src="Lib_Assets/images/a.png">
    </div>
      <div class="jumbotron div">

        <div class="container">
      
          <center><h3 style="color: #c47451;font-family:comic sans;"class="mar">GOVERNMENT POLYTECHNIC, NASHIK</h3>
            <p style="margin-top: -10px;font-family:monotype;color:#43C6DB">(An Autonomous Institute Of Government Of Maharashtra)</p>
            <h1 style="margin-top: -15px;font-family:CASTE LLAR;text-shadow: 4px 5px 7px #41A317;color: #348017;">LIBRARY</h1></center>
        </div>
    </div>
  </div>

<div class="col-lg-2"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			<div class = "panel panel-warning">
           <div class = "panel-heading">
              <h2 style="margin-left: 20px; color: ;" class="panel-title title">Change Password</h2><br>
           </div><br>

     <div class="panel-body">
			<form method="post" action="faculty-change-password.php" class="form-horizontal" role="form"> 

      <div class="form-group"> 
          <label for="username" class="col-sm-4 control-label">Username :</label> 
        <div class="col-sm-4"> 
          <input type="text" class="form-control" name="username" placeholder="Enter Username"required>
        </div> 
      </div> 

				<div class="form-group"> 
					<label for="oldpass" class="col-sm-4 control-label">Old Password :</label> 
				<div class="col-sm-4"> 
					<input type="text" class="form-control" name="oldpass" placeholder="Enter Old Password"required>
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="newpass" class="col-sm-4 control-label">New Password :</label> 
				<div class="col-sm-4	"> 
					<input type="text" class="form-control" name="newpass" placeholder="Enter New Password"required> 
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="conpass" class="col-sm-4 control-label">Confirm Password :</label> 
				<div class="col-sm-4"> 
					<input type="text" class="form-control" name="conpass" placeholder="Cnnfirm Password"required> 
				</div> 
			</div><br>
		 
		
			<div class="form-group"> 
				<div class="col-sm-offset-4 col-sm-10"> 
					<button type="submit" name="submit" class="btn btn-danger btn-outline">Submit</button> 
				</div> 
			</div>
				</form>
			</div>
		</div>
		</div>
	</div>
<div class="col-lg-2"></div>
	
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib_db";
// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// Check connection
if ($conn)
{
    echo"";
}

if(isset($_POST['submit']))
{

$user=$_POST['username'];
$op=$_POST['oldpass'];
$np=$_POST['newpass'];
$conpass=$_POST['conpass'];

$result=mysql_query("SELECT * from login");

while ($row=mysql_fetch_array($result)) 
{
	if($row['password']=$op And $np==$conpass)  
{   
	mysql_query("UPDATE login SET password='$np' WHERE password='$op' AND username='$user'");
	?>

				<script type="text/javascript">
				alert('Successfully Updated');
        window.location.href='login.php';
        </script>
	<?php
	
}

else
{
echo "";
}
	
}
}
?>
</div>
<footer class="footer-distributed">

      <div class="footer-left">

        <h3 style="font-size: 27px; margin-left: 20px;">Government Polytechnic,<span>Nashik</span></h3>
        <h4 style="font-family: comic sans ms; font-style: italic;font-size: 17px;margin-top:5px;margin-left: -25px; color: gray"><p>( An Autonomous Institute Of Government Of Maharashtra )</p></h4>
        
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p class="footer-links"  style="font-family: comic sans ms; font-style: italic">
          Address : <br>Samangaon Road, Nashik Road, Nashik</p>
        </p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>0253-2461221</p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>ABOUT DEVELOPERS :</span>
          <ul class="" style="font-family: comic sans ms;list-style: none;color: #ffffff">
          <li>Students of IF 3rd Year (2015-2016) </li>
          
          </ul>
        </p>

      </div>

    </footer>
</body>
</html>
