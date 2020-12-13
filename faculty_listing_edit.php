<?php
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);

if(isset($_GET['id']))
{
$id=$_GET['id'];

$query=mysql_query("SELECT * from faculty_table where id='$id'");
$query1=mysql_fetch_array($query);


?>
<html>
<body>

<HEAD>
    <TITLE>Library->Edit Faculty</TITLE>


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

<div class="container">
    <div class="row">
    <div class="col-lg-1"></div>
      <div class="col-lg-10"><br><br>

      <div class="panel-warning">
           <div class = "panel-heading">
              <h2 style="margin-left: 20px; color: ;" class="panel-title title">Edit Faculty</h2><br>
           </div><br>

           <div class="panel-body">
			
				<form method="post" action="faculty_listing_edit_action.php" class="form-horizontal" role="form"  enctype="multipart/form-data"> 

           

        <div class="form-group">
          <label for="file" class="col-sm-2 control-label">Photo:</label>
        <div class="col-sm-6"> 
        <img src="Pics/<?php echo $query1['image_name'] ?>" width="100" height="80"><br>
         </div>
        </div>

         <div class="form-group">
          <label for="file" class="col-sm-2 control-label">New Photo:</label>
           <div class="col-sm-6"> 
          <input type="file" class="form-control"name="file" value="<?php echo "Pics/".$query1['image_name'];?>" ></input>
        </div> 
        </div>

        <input type="hidden" name="id" value="<?php echo $query1['id'];?>">

        <div class="form-group"> 
          <label for="id" class="col-sm-2 control-label">ID :</label> 
        <div class="col-sm-6"> 
          <input type="text" class="form-control" name="id" value="<?php echo $query1['id'];?>"placeholder="Enter Faculty Id"required> 
        </div> 
      </div> 

         		<input type="hidden" name="id" value="<?php echo $query1['id'];?>">

				<div class="form-group"> 
					<label for="Bookid" class="col-sm-2 control-label">Name :</label> 
				<div class="col-sm-6"> 
					<input type="text" class="form-control" name="Name" value="<?php echo $query1['name'];?>"placeholder="Enter name"required> 
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="Book_Name" class="col-sm-2 control-label">Designation :</label> 
				<div class="col-sm-6"> 
					<input type="text" class="form-control" name="Designation" value="<?php echo $query1['designation'];?>" placeholder="Enter Designation"> 
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="Publication" class="col-sm-2 control-label">Mob No :</label> 
				<div class="col-sm-6"> 
					<input type="number" class="form-control" name="MobNo" value="<?php echo $query1['mobile_no'];?>" placeholder="Enter Mob No"> 
				</div> 
			</div> 

			<div class="form-group"> 
				<label for="Price" class="col-sm-2 control-label">Email id :</label> 
				<div class="col-sm-6"> 
					<input type="email" class="form-control" name="Email" value="<?php echo $query1['email'];?>" placeholder="Enter Email id"> 
				</div> 
			</div>

			<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10"> 
				<button type="submit" name="update" class="btn btn-outline btn-warning">Update</button> 
			</div> 
			</div>
			</form>
			</div>
	    <div class="col-lg-1"></div> 
		</div>
	</div>
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


      </form>
<?php
	}
	?>
      </body>
      </html>
