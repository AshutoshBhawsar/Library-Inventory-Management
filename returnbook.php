<?php

session_start();
if(isset($_SESSION["username1"]))
{

?>

<html lang="en">
<head>
  <title>Library->Return book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="col-lg-2">
      <img style="margin-top: 70px;" src="Lib_Assets/images/library_checkout.jpg"height="300px" width="200x">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8"><br>

          <div class = "panel panel-info">
            <div class = "panel-heading">
              <h2 style="margin-left: 20px; color: ;" class="panel-title title">Return Book</h2><br>
            </div><br>
              <div class="panel-body">
              <form action="returnbook.php"method="post" class="form-inline" role="form">
						            
                  <!--<label>Scheme: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="r" value="book_table" checked>BB/SW
                  <input type="radio" name="r" value="book_table1">GEN/WB
                  <BR><br> -->

                <div class="form-group"> 
    						  <label for="id"> User ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    									  <input type="text" name="id"class="form-control" required>
    						</div><br><br>
    						
    						<div class = "form-group">
           				 <label for="bookid"> BOOK ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    								<input type="text" class = "form-control" name="bookid"required>
          			</div><br><br>

                <div class="form-group"> 
                  <label for="returndate">Return Date :</label> &nbsp;            
                    <input type="text" name="returndate" value="<?php echo date("Y-m-d")?>"class="form-control">                
                </div> <br><br>

                 <div class="form-group"> 
                    <label for="fine">Fine :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
                    <input type="text" name="fine" class="form-control">                
                </div> <br><br><br>

                <label class="col-md-6">
           				<button class = "btn btn-outline btn-info col-lg-offset-4 " name="submit" type = "submit">
                         Submit
                  </button> <br>
                </label>

                  </form><br>
              </div>
            </div> <!-- panel body -->
          </div><!-- panel end -->
        </div> <!-- row -->
      </div> <!-- col -->
    <div class="col-lg-2"></div>
<?php
      $servrname="localhost";
      $username="root";
      $password="";
      $dbname="lib_db";
      // Create connection
      $conn=mysql_connect($servrname,$username,$password);
      mysql_select_db($dbname);
      // Check connection
      if ($conn)
      {
        echo "";
      }
      else
      {
        echo mysql_error();
      }

    if(count($_POST)>0)
      {

    //    $memid=$_POST['id'];
        $bookid=$_POST['bookid'];
        $returndate=$_POST['returndate'];
        $fine=$_POST['fine'];
//        $table=$_POST['r'];


        $result=mysql_query("SELECT * from issuebook where  bookid='$bookid'");
        $count=mysql_num_rows($result);

        if($count>0)
        {

            $sql=mysql_query("UPDATE login SET numbooks=numbooks-1 WHERE username='$id'",$conn);
            
            $sql1=mysql_query("UPDATE scheme SET status='not_issue' WHERE bookid='$bookid'",$conn);
            
            $sql2=mysql_query("UPDATE issuebook SET returndate='$returndate', fine='$fine' WHERE bookid='$bookid' ",$conn);
            if($sql2)
            {
              echo "<script>alert('Record Updated seccessfully')</script>";
              
            }
            else
            {
              echo "Record not Updated".mysql_error();
            }
        }
            else
            echo"<script>alert('No Book Issued')</script>";
            mysql_close($conn);      }

?><footer class="footer-distributed">

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

    </footer> </body>
</html>
<?php
}
else
{
  header("location:index.php");
}