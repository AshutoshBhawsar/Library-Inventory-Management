<?php

session_start();
if(isset($_SESSION["username1"]))
{

?>
<HTML>
<HEAD>
    <TITLE>Adding book</TITLE>

	<link rel="stylesheet" type="text/css" href="Lib_Assets/bootstrap.min.css">
  <link rel="stylesheet" href="Lib_Assets/demo.css">
  <link rel="stylesheet" href="Lib_Assets/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<script src="Lib_Assets/jquery.js"></script>
  <script src="Lib_Assets/bootstrap.min.js"></script>
    <script src="Lib_Assets/bootstrap-hover-dropdown.js"></script>

  <style type="text/css">
  
	
	.div{
      width: auto;
      height: 160px;
      }

    .mar{
      margin-top: -40px;
      font-size: 40px;
          }

  				.imgdiv{
  					margin-top: 20px;
  				}
	
	.title
      {
      	margin-left: 10px;
        font-size: 40;
	    text-shadow: 1px 3px 3px #e77471;
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

  <!--navigation bar-->
  <nav style="margin-top:-30px;"class = "navbar navbar-inverse" role = "navigation">
   
   <div style="margin-left:40px;"class = "navbar-header">
      <a class = "navbar-brand" href = "#"></a>
   </div>
   <div>
    <ul id = "myTab" class = "nav navbar-nav">
      <li class = "active">
          <a href = "adminHome.php" class = "dropdown-toggle"> HOME </a>
      </li>

      <li class="dropdown">
        <a href="#" id="module"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
        MODULS
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "module">
          <li><a href="adding book.php">ADD BOOKS</a></li>
          <li><a href="book_listing.php">BOOK LISTING</a></li>
          <li><a href="student_listing.php">STUDENT LISTING</a></li>
          <li><a href="faculty_listing.php">FACULTY LISTING</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" id="category"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
        ADD CATEGORY
        <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "category">
          <li><a href="student.php">ADD STUDENT</a></li>
          <li><a href="staff.php">ADD FACULTY</a></li>
          
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" id="book"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
        ISSUE BOOK
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "book">
          <li><a href="issueBook.php">ISSUE BOOK</a></li>
          <li><a href="returnbook.php">RETURN BOOK</a></li>
          <li><a href="issuebook_listing.php">ISSUE BOOK LISTING</a></li>
        </ul>
      </li>

      <!-- <li class="dropdown">
        <a href="report.php" id="module" data-hover="">REPORT</a>
      </li>

      <li class="dropdown">
        <a href="newspaper.php" id="module" data-hover="">NEWSPAPER</a> 
      </li>
      <li class="dropdown">
        <a href="#" id="module"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
        Non Printed Materials
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "module">
          <li><a href="vidoe casets.php">Video Casets</a></li>
          <li><a href="cdswcbt.php">CD/Softwares/CBT</a></li>
           <li><a href="e-books.php">E-Books</a></li>
          <li><a href="iskls.php">Independent study kits for learning S/w</a></li>
           <li><a href="educational charts.php">Educational Chart</a></li>
          <li><a href="ohp tranferences.php">OHP Transferences</a></li>
           <li><a href="gernals.php">Gernals</a></li>
          
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" id="book"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
         BOOK SEARCHING
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "book">
          <li><a href="Admin_searching.php">SCHEME BB/SW</a></li>
          <li><a href="Admin_general_book_searching.php">SCHEME GENERAL/WB</a></li>
        </ul>
        
      </li>

    </ul>  
    -->
   <ul style="margin-right: 40px;"class = "nav navbar-nav navbar-right">
   
    <li class="dropdown">
      <a href="#" id="logout"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">Admin
        <b class="caret"></b>
      </a>

      <ul class = "dropdown-menu pull-right" role = "menu" aria-labelledby = "logout" >
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
      </li>

  
    </ul>
    </div>  
  </nav>
<!--
<form action="adding book.php" method="post">
	<div class="form-group"> 
		 <label for="scheme" class="col-sm-1 control-label">Scheme :</label> 
			<div class="col-sm-3"> 
					<label>Last Insert Bookid Of :</label>
					<input type="radio" name="id" value="book_table">BB/SW
					<input type="radio" name="id" value="book_table1">GEN/WB

				 <input type="text" class="form-control" name="scheme" placeholder="Enter Scheme"> 
			</div> 
	</div>
	<input type="submit" class="col-sm-1 btn btn-primary btn-sm" value="Check">
</form><br><br> -->

<?php
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);


if(isset($_POST['id']))
{
	$i=$_POST['id'];
$re=mysql_query("SELECT * FROM $i ORDER BY id DESC LIMIT 1");

while ($row=mysql_fetch_array($re)) 
{
	$r=$row['bookid'];
	// echo "Last Bookid:<input type='text' value='$r' disabled>";
	echo "<h4>Last Insert Bookid :".$r."</h4><br>";
}
}
 ?>


	<div class="container">
		<div class="row">
			<div class = "panel panel-primary">
      <div class = "panel-heading">
          <h2 style="margin-left: 20px; color: ;animation:r 2s" class="panel-title title">Add New Book</h2><br>
      </div><br>
      <div style="box-shadow: 5px 6px 7px grey;"class="panel-body">

		<form method="post" action="add_book_action.php" class="form-horizontal" role="form">
		 	<div class="col-lg-6">
				<BR>
					 
					 <!--	<div class="form-group"> 
							<label for="scheme" class="col-sm-4 control-label">Scheme :</label> 
								<div class="col-sm-6"> 
								<select class="form-control" name="scheme">
									<option value="book_table">BB/SW</option>
									<option value="book_table1
									">GENERAL/WB</option>
								</select>
									 <input type="text" class="form-control" name="scheme" placeholder="Enter Scheme"> 
								</div> 
						</div> -->

						<div class="form-group"> 
							<label for="Bookid" class="col-sm-4 control-label">Book Id :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="bookid" placeholder="Enter book Id" required> 
								</div> 
						</div>

							<div class="form-group"> 
							<label for="Author_Name" class="col-sm-4 control-label">Author Name :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="author_name" placeholder="Enter Author name"required> 
								</div> 
						</div>

						<div class="form-group"> 
							<label for="Book_Name" class="col-sm-4 control-label">Book Name :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="book_name" placeholder="Enter Book Name"required> 
								</div> 
						</div> 

						<div class="form-group"> 
							<label for="subject" class="col-sm-4 control-label">Subject :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="subject" placeholder="Enter Subjet"required> 
								</div> 
						</div>

						<div class="form-group"> 
							<label for="department" class="col-sm-4 control-label">Department :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="department" placeholder="Enter Department"required> 
								</div> 
						</div>

						 <div class="form-group"> 
							<label for="BookEdition" class="col-sm-4 control-label">Book Edition :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="book_edition" placeholder="Enter book edition"required> 
								</div> 
						</div> 

						<div class="form-group"> 
							<label for="Publication" class="col-sm-4 control-label">Publication :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="publication" placeholder="Enter publication"required> 
								</div> 
						</div> 

						<div class="form-group"> 
							<label for="year" class="col-sm-4 control-label">Publish Year :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="year" placeholder="Enter year"> 
								</div> 
						</div>

						 

							
			</div>


			<div class="col-lg-6"><br>
				 
				 			<div class="form-group"> 
							<label for="datetime" class="col-sm-3 control-label">Date :</label> 
								<div class="col-sm-6"> 
									<input type="date" class="form-control" name="date" placeholder="Enter Date" > 
								</div> 
						</div>

			 				<div class="form-group"> 
							<label for="pages" class="col-sm-3 control-label">No. of Pages :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="pages" placeholder="Enter no. of pages"required> 
							</div> 
						</div> 

							<div class="form-group"> 
							<label for="volume" class="col-sm-3 control-label">Volume :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="volume" placeholder="Enter volume"> 
								</div> 
						</div>

						

						<div class="form-group"> 
							<label for="source" class="col-sm-3 control-label">Source :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="source" placeholder="Enter Source"required> 
							</div> 
						</div>

						<div class="form-group"> 
							<label for="price" class="col-sm-3 control-label">Price :</label> 
								<div class="col-sm-6"> 
									<input type="number" class="form-control" name="price" placeholder="Enter Price"required> 
							</div> 
						</div>

						<div class="form-group"> 
							<label for="lacation" class="col-sm-3 control-label">Location :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="location" placeholder="Enter location"> 
							</div> 
						</div>

						<div class="form-group"> 
							<label for="copies" class="col-sm-3 control-label">No.Of Copies :</label> 
								<div class="col-sm-6"> 
									<input type="number" class="form-control" name="copies" placeholder="Enter No.of copies"required> 
							</div> 
						</div>

						<div class="form-group"> 
							<label for="classno" class="col-sm-3 control-label">Class No :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="classno" placeholder="Enter Class No"> 
							</div> 
						</div>

						<div class="form-group"> 
							<label for="Bookno" class="col-sm-3 control-label ">Book No :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="bookno" placeholder="Enter Book No" > 
								</div> 
						</div>

						<div class="form-group"> 
							<label for="Billno" class="col-sm-3 control-label">Bill No/Date :</label> 
								<div class="col-sm-6"> 
									<input type="text" class="form-control" name="billno" placeholder="Enter Bill No" > 
								</div> 
						</div>

						<center><div class="form-group"> 
							<div class="col-sm-offset- col-sm-1	"> 
								<center><button style="margin-left:-100px;"type="submit" name="submit" class="btn btn-primary btn-outline ">Submit</button></center> 
							</div> 
						</div></center>
						
			</div>

			</form>	
			</div>
		</div>
		</div>
	</div>


		<!-- The content of your page would go here. -->

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
 <?php

}
else
{
  header("Location:index.php");
}
// $servrname="localhost";
// $username="root";
// $password="";
// $dbname="lib_db";
// // Create connection
// $conn=mysql_connect($servrname,$username,$password);
// mysql_select_db($dbname);

// $re=mysql_query("SELECT * FROM book_table ORDER BY id DESC LIMIT 1");

// while ($row=mysql_fetch_array($re)) 
// {
// 	$r=$row['bookid'];
// 	echo "<input type='text' value='$r' disabled>";
// }
 ?>
