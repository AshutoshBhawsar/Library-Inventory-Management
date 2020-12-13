<?php
  session_start();
  // if(isset($_SESSION['username2']))
  // {

?>
<HTML>
<HEAD>
    <TITLE>Library->Student home</TITLE>


	<link rel="stylesheet" type="text/css" href="Lib_Assets/bootstrap.min.css">
  <link rel="stylesheet" href="Lib_Assets/demo.css">
  <link rel="stylesheet" href="Lib_Assets/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="Lib_Assets/AdminLTE.min.css">
  <link rel="stylesheet" href="Lib_Assets/_all-skins.min.css">
  
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
      
          <center><h3 style="color: #348017;font-family:comic sans;"class="mar">K.K.I.E.E.R, NASHIK</h3>
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
          <li><a href="searching.php">SEARCHING</a></li>
     <!--     <li><a href="general_book_searching.php">SCHEME GENERAL/WB</a></li>
        --></ul>
        
      </li>
        
      <li class="dropdown">
        <a href="feedback.php" id="feedback"class = "dropdown-toggle"data-hover="dropdown">FEEDBACK</a>  
      </li>         
      
      <li class="dropdown">
        <a href="suggession.php" id="book"class = "dropdown-toggle"data-hover="dropdown">SUGGESTION</a>
      </li> 
          
   </ul>     

         
  <ul style="margin-right: 40px;"class = "nav navbar-nav navbar-right">
   
    <li class="dropdown">
      <a href="logout.php" id="logout"class = "dropdown-toggle"data-hover="dropdown">LOGOUT</a>
      </li>
  
    </ul>
    </div>  
  </nav>
<!-- 
    <center>
      <img style="margin-top: -10px;"src="lib_Assets/images/library-951488_1280.jpg" height="550px" width="600px">
    </center> -->

    <section class="content">
          <div class="row">
        <!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Chart : No. Of Books As Per Department :--</h3>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            
            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->

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

    </footer>      <!-- jQuery -->

        <script src="Lib_Assets/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="Lib_Assets/bootstrap.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="Lib_Assets/Chart.min.js"></script>
    <!-- FastClick -->
    <script src="Lib_Assets/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Lib_Assets/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="Lib_Assets/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 6322,
            color: "#f56954",
            highlight: "#f56954",
            label: "CE"
          },
          {
            value: 6822,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "ME/AE"
          },
          {
            value: 5212,
            color: "#f39c12",
            highlight: "#f39c12",
            label: "EL/E&TC"
          },
          {
            value: 4496,
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "IF/CM"
          },
          {
            value: 750,
            color: "#B1FB17",
            highlight: "#B1FB17",
            label: "PS"
          },
          {
            value: 200,
            color: "#d2d6de",
            highlight: "#d2d6de",
            label: "IDD/DDGM"
          },
           {
            value: 3025,
            color: "#FF00FF",
            highlight: "#FF00FF",
            label: "SCIENCE & OTHER"
          }
           ,{
            value: 1028,
            color: "#00FFFF",
            highlight: "#00FFFF",
            label: "MANAGEMENT"
          },
           {
            value: 2124,
            color: "#800080",
            highlight: "#800080",
            label: "REFERENCE"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

      });
    </script>

  </body>
</html>
