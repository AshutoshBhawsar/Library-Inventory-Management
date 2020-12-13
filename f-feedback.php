<HTML>
<HEAD>
    <TITLE>Library->Feedback</TITLE>


	<link rel="stylesheet" type="text/css" href="Lib_Assets\bootstrap.min.css">
	<link rel="stylesheet" href="Lib_Assets/demo.css">
    <link rel="stylesheet" href="Lib_Assets/sb-admin-2.css">
	<link rel="stylesheet" href="Lib_Assets/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

	<script src="Lib_Assets/jquery.js"></script>
  <script src="Lib_Assets/bootstrap.min.js"></script>
  <script src="Lib_Assets/bootstrap-hover-dropdown.js"></script>
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
  .div{
      width: auto;
      height: 160px;
      }

    .mar{
      margin-top: -40px;
      font-size: 40px;
          }
.b:hover{
		box-shadow: 3px 4px 8px #323232 ;
		transition:box-shadow 1s;
	}
	.title
      {
      	margin-left: 10px;
        font-size: 40;
	    text-shadow: 1px 3px 3px orange;
	    font-family: "Times new roman";
      } 
</style>

</HEAD>
<body>

  <div>
    <div>
        <img class="pull-left" style="margin-left: 30px;width: 200px; height: 160px; " src="Lib_Assets/images/a.png">
    </div>
      <div class="jumbotron div">

        <div class="container">
      
          <center><h3 style="color: #348017;font-family:comic sans;"class="mar">K.K.W.I.E.E.R,NASHIK</h3>
            <p style="margin-top: -10px;font-family:monotype;color:#348017"></p>
            <h1 style="margin-top: -15px;font-family:CASTE LLAR;text-shadow: 3px 4px 3px green;color: blue;">LIBRARY</h1></center>
        </div>
    </div>
  </div>

  <nav style="margin-top:-30px;"class = "navbar navbar-inverse" role = "navigation">
   
   <div style="margin-left:40px;"class = "navbar-header">
      <a class = "navbar-brand" href = "#"></a>
   </div>
   <div>
    <ul id = "myTab" class = "nav navbar-nav">
      <li class = "active">
          <a href = "facultyHome.php" class = "dropdown-toggle"data-hover="dropdown"> HOME </a>
      </li>

       <li class="dropdown">
        <a href="#" id="book"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
         BOOK SEARCHING
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "book">
          <li><a href="f-searching.php">SEARCHING</a></li>
<!--          <li><a href="f-general_book_searching.php">SCHEME GENERAL/WB</a></li>
    -->    </ul>
      </li>
        
      <li class="dropdown">
        <a href="f-feedback.php" id="feedback"class = "dropdown-toggle"data-hover="dropdown">FEEDBACK</a>  
      </li>         
      
      <li class="dropdown">
        <a href="f-suggession.php" id="book"class = "dropdown-toggle"data-hover="dropdown">SUGGESTION</a>
      </li> 
          
   </ul>     

         
  <ul style="margin-right: 40px;"class = "nav navbar-nav navbar-right">
   
    <li class="dropdown">
      <a href="logout.php" id="logout"class = "dropdown-toggle"data-hover="dropdown">LOGOUT
      </a>

      </li>

  
    </ul>
    </div>  
  </nav>

	

	<div class="container">
		<div class="row">
		<div class="col-lg-1"></div>
			<div class="col-lg-10">
			
			<div class = "panel panel-warning">
           <div class = "panel-heading">
              <h2 style="margin-left: 20px; color: ;" class="panel-title title">Feedback</h2><br>
           </div><br>

           <div class="panel-body">
				<form method="post" action="f-feedback_action.php" class="form-horizontal" role="form"> 

				<div class="form-group"> 
					<label for="stud name" class="col-sm-2 control-label"> Name :</label> 
				<div class="col-sm-6"> 
					<input type="text" class="form-control" name="name" placeholder="Enter name"required>
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="Student id" class="col-sm-2 control-label">E-mail Id :</label> 
				<div class="col-sm-6"> 
					<input type="email" class="form-control" name="emailid" placeholder="Enter Email_id"required> 
				</div> 
			</div> 

		 

			<div class="form-group"> 
				<label for="branch" class="col-sm-2 control-label">Branch :</label> 
				<div class="col-sm-6"> 
					<input type="text" class="form-control" name="branch" placeholder="Enter branch"required> 
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="Publication" class="col-sm-2 control-label">Feedback :</label> 
				<div class="col-sm-6"> 
					<textarea type="text" class="form-control" name="feedback" placeholder="Enter your feedback....."required></textarea>
				</div> 
			</div> 

			<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10"> 
				<button type="submit" name="submit" class="btn btn-warning btn-outline">Submit</button> 
			</div> 
			</div>
			</form>
			</div>
			</div>
			</div>
			<div class="col-lg-1"></div>

		</div>
	</div>
	
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3 style="font-size: 27px; margin-left: 20px;">K.K.W.I.E.E.R<span> Nashik</span></h3>
				<h4 style="font-family: comic sans ms; font-style: italic;font-size: 17px;margin-top:5px;margin-left: -25px; color: gray"><p></p></h4>
				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p class="footer-links"  style="font-family: comic sans ms; font-style: italic">
					Address : <br>K.K.Wagh Education Society,
Hirabai Haridas Vidanagari,
Amrutdham,Panchavati</p>
				</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0253-2221106</p>
					
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>ABOUT DEVELOPERS :</span>
					<ul class="" style="font-family: comic sans ms;list-style: none;color: #ffffff">
					<li>Students of IF 3rd Year (2017-2018) </li>
					
					</ul>
				</p>

			

			</div>

		</footer>
</body>
</HTML>

