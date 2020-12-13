<?php
  session_start();
  // if(isset($_SESSION['username2']))
  // {

?>
<HTML>
<HEAD>
    <TITLE>Library->Faculty home</TITLE>

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
      
          <center><h3 style="color: #348017;font-family:comic sans;"class="mar">K.K.W.I.E.E.R, NASHIK</h3>
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
          <a href = "index.php" class = "dropdown-toggle"data-hover="dropdown"> HOME </a>
      </li>

      <li class="dropdown">
        <a href="#" id="book"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
         BOOK SEARCHING
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "book">
          <li><a href="f-searching.php">SEARCGING</a></li>
         <!-- <li><a href="f-general_book_searching.php">SCHEME GENERAL/WB</a></li>
        --></ul>
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

    <center>
      <img style="margin-top: -10px;"src="lib_Assets/images/glasses-272399_19201.jpg" class="img-rounded"height="650px" width="900px">
    </center>
      
    </div><br><br>
    <div class="col-md-3"></div>
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
     
  // }
  // else
  // {
  //     header("Location:index.php");
  // }

?>