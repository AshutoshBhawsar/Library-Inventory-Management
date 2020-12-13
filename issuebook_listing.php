<?php

session_start();
if(isset($_SESSION["username1"]))
{

?>
<!DOCTYPE html>
<html lang="en">


<HEAD>
    <TITLE>Library:Issue Book Listing</TITLE>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


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
      {        margin-left: 10px;
        font-size: 40;
      text-shadow: 1px 3px 3px #e77471;
      font-family: "Times new roman";
      } 
</style>

</HEAD>
<body oncontextmenu="return false" style="background-color:#FFF5EE;" onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);" >
<script type="text/javascript">
    

    function disableCtrlKeyCombination(e)
        {
                //list all CTRL + key combinations you want to disable
                var forbiddenKeys = new Array("a", "s", "c");
                var key;
                var isCtrl;

                if(window.event)
                {
                        key = window.event.keyCode;     //IE
                        if(window.event.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }
                else
                {
                        key = e.which;     //firefox
                        if(e.ctrlKey)
                                isCtrl = true;
                        else
                                isCtrl = false;
                }

                //if ctrl is pressed check if other key is in forbidenKeys array
                if(isCtrl)
                {
                    for (i = 0; i < forbiddenKeys.length; i++)
                        {
                                //case-insensitive comparation
                            if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
                                {
//                                    alert("Key combination CTRL + "
//                                                + String.fromCharCode(key)
//                                                + " has been disabled.");                                    
                                        return false;
                                }
                        }
                }
                return true;
        }
</script>
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


    
   
  <div class="col-lg-1"></div>
        <div class="row">
            <div class="contriner">
                <div class="col-lg-10">
                    <div class = "panel panel-warning">
                       <div class = "panel-heading">
                          <h2 style="margin-left: 20px; color: ;" class="panel-title title">Issue Book Listing</h2><br>
                       </div><br>

                       <div class="panel-body">
                     
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                         <tr>
                                       
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Book ID</th>
                              <!--           <th>Book Name</th>
                               -->       <th>Issue Date</th>
                                        <th>Return Date</th>
                                         <th>Actual Return Date</th>
                                         <th>Fine</th>
                                         <!-- <th>Action</th> -->        
                                    </tr>
                                    <thead>

                                    <?php
                                    $servername="localhost";
                                    $username="root";
                                    $password="";
                                    $dbname="lib_db";
                                    $con=mysql_connect($servername,$username,$password);
                                    mysql_select_db($dbname);
                                    if ($con) 
                                    {
                                       
                                        echo "";
                                    }
                                    else
                                    {
                                        echo"connection Error";
                                    }

                                    $result=mysql_query("SELECT * FROM issuebook");



                                    ?>
                                    <tbody>
                                        
                                       <!--     <?php  while ($row=mysql_fetch_array($result)) 
                                            {  

                                               $bookid=$row['bookid'];
                                              // $rollno=$row['roll_no'];
                                               $dateDiff = strtotime($row['returndate']) - strtotime($row['issueDate']);
                                                $dateDiff = floor($dateDiff/(60*60*24));
                                                if($dateDiff > 21) {
                                                  $fine = ($dateDiff-21)*2;
                                                } else {
                                                  $fine = 0;
                                                }
                                              ?> -->


                                           <tr class="odd gradeX">
                                             <td><?php echo"".$row['memid'];?></td>
                                             <td><?php echo"".$row['name'];?></td>
                                             <td><?php echo"".$row['bookid'];?></td>
                                    <!--           <td><?php #echo"".$row['bookname'];?></td>
                                     -->     <td><?php echo"".$row['issueDate'];?></td>
                                            <td><?php echo"".$row['returndate'];?></td>
                                               <td><?php echo"".$row['off_retdate'];?></td>
                                     
                                             <td><?php echo $fine;?></td>
                                    <!--          <td><button type="button" class="btn btn-danger "name="delete">Delete</button></td>
                                     -->      </tr>
                                                  
                                           <?php     
                                            }    
                                            ?>
                                            
                                              <?php  while ($row=mysql_fetch_array($result)) 
                                              {
                                                  $bookid=$row['bookid'];
                                                  if($row['returndate']>$row['off_retdate']) 
                                                    {
                                                      //$fine = 0;
                                                      $fine= $fine+2;
                                                    }
                                                    else
                                                    {
                                                      $fine = 0;
                                                    }

                                              }
                                              ?> 
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                </div>
                </div>
                <div class="col-lg-1"></div>
                
    <!-- jQuery -->
    <script src="Lib_Assets/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Lib_Assets/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="Lib_Assets/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="Lib_Assets/jquery.dataTables.min.js"></script>
    <script src="Lib_Assets/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="Lib_Assets/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
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

        <?php 
      }
          else
          {
            header("Location:index.php");
          }

        ?>
</body>

</html>