<?php
session_start();
if(isset($_SESSION["username1"]))
{

?>

<html lang="en">
<head>
  <title>Library->Issue book</title>
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
      <img style="margin-top: 70px;margin-left: 10px;" src="Lib_Assets/images/bookstackboy_450.jpg"height="300px" width="200x">
      </div>

  <div class="container"><br><br>
    <div class="row">
  <div class="col-lg-8">

    <div class = "panel panel-success">
      <div class = "panel-heading">
          <h2 style="margin-left: 20px; color: ;" class="panel-title title">Issue Book</h2><br>
      </div><br>

      <div class="panel-body">
        <form action="issuebook.php" method="post"class="form-inline" role="form">

      <!--  <label>Scheme: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="r" value="book_table" checked>BB/SW
        <input type="radio" name="r" value="book_table1">GEN/WB
        <BR><br> -->

					<div class="form-group"> 
						<label for="issuedate">Issue Date :</label>							
								<input type="text" name="issuedate" value="<?php echo date("Y-m-d")?>"class="form-control">								
						</div> <br><br>
                            
                        <div class="form-group"> 
						  <label for="id"> User ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									  <input type="text" name="id"class="form-control">
						</div><br><br>

						<div class="form-group"> 
							<label for="studname"> Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									<input type="text" name="name"class="form-control"> 
						</div><br><br>

						<div class = "input-group">
       				 <span class = "input-group-addon">BOOK ID</span>
								<input type="text" class = "form-control" name="bookid">
      			</div>

       				<button class = "btn  btn-warning" name="fetch" type = "submit">
                     FETCH
              </button> 


           		<button  type="reset" name="submit"class="btn btn-danger" onclick="clear()">
                  <span class=""></span>cancel
                </button><br><br>
  </form><br>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-2"></div>

		<script type="text/javascript">
		  
		  function clear()
		{

		location.reload();
		}
		</script>

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

	$name=$_POST['bookid'];
  //$table=$_POST['r'];
	$result1=mysql_query("SELECT * from scheme where bookid='$name'");

?>
	<table class="table table-striped table-bordered table-hover">
	<tr>
		<th>Book Name</th>
		<th>Author</th>
		<th>Publication</th>
		<th>Book Id</th>
    <!--<th>Status</th>-->
		<th>Action</th>		
		</tr>

	<?php
	while ($row=mysql_fetch_array($result1))
	 {
  
  ?>
       
    <tr>  
         <td><?php echo"".$row['Title'];?></td>
         <td><?php echo"".$row['Author'];?></td>
         <td><?php echo"".$row['publication'];?></td>
         <td><?php echo"".$row['bookid'];?></td>
         <!--<td><?php echo "".$row['status'];?></td>-->
         <td><form action="test.php" method="post">
         <input type ="submit" class ="btn btn-success" name="submit" value="Issue" >
         </form>
         </td>
      </tr>

      </table>
      <?php
  }
}
if (isset($_POST['fetch'])) 
{

	$_SESSION['issuedate']=$_POST['issuedate'];
	$_SESSION['id']=$_POST['id'];
	$_SESSION['name']=$_POST['name'];
	$_SESSION['bookid']=$_POST['bookid'];
  //$_SESSION['r']=$_POST['r'];
  $s=$row['Title'];
echo "<h1>$s</h1>";

}
?>

				</div>
      </div><!--row-->
    </div><!--container-->

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

    </footer>  </body>
 </html>
 <?php

}
else
{
  header("Location:index.php");
}
 ?>