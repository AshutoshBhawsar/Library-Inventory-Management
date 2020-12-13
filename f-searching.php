<!DOCTYPE html>
<html lang="en">


<HEAD>
    <TITLE>Library->Book Searching</TITLE>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
        font-size: 40;
        text-shadow: 1px 3px 3px #7dfdfe;
        font-family: "Times new roman";
      } 
      .div{
      width: auto;
      height: 160px;
      }

    .mar{
      margin-top: -40px;
      font-size: 40px;
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
          <a href = "facultyHome.php" class = "dropdown-toggle"data-hover="dropdown"> HOME </a>
      </li>

       <li class="dropdown">
        <a href="#" id="book"class = "dropdown-toggle" data-toggle = "dropdown"  data-hover="dropdown">
         BOOK SEARCHING
          <b class="caret"></b>
        </a>

        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "book">
          <li><a href="f-searching.php">SEARCHING</a></li>
        <!--  <li><a href="f-general_book_searching.php">SCHEME GENERAL/WB</a></li>
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
        <li><a href="logout.php"tabindex = "-1" data-toggle = "tab">LOGOUT</a></li>
      </ul>
      </li>

  
    </ul>
    </div>  
  </nav>
   <div id="wrapper">

        <!-- Navigation -->
<!-- <!--         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel </a>
            </div>
            <!-- /.navbar-header -->

            <!-- <ul class="nav navbar-top-links navbar-right"> -->
               
                <!-- /.dropdown -->
               <!--  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user 
                </li>
                dropdown 
            </ul> -->
            <!-- /.navbar-top-links -->

          <!--  <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
 -->                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group 
                        </li>
 -->                    <!--     <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Preview Website</a>
                        </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
 <!--                            </li> 
                            </ul>
                            <!-- /.nav-second-level 
                        </li> -->
                     <!--     <li>
                            <a href="image.html"><i class="fa fa-edit fa-fw"></i>Image Upload</a>
                        </li>
                        <li>
                            <a href="notices.html"><i class="fa fa-edit fa-fw"></i>Notices</a>
                        </li>
                        <li>
                            <a href="feedback.html"><i class="fa fa-edit fa-fw"></i>Feedback</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i>Registration</a>
                        </li><li>
                            <a href="TPO.html"><i class="fa fa-edit fa-fw"></i>TPO</a>
                        </li>
                        <li>
                            <a href="hits.html"><i class="fa fa-edit fa-fw"></i>Hits</a>
                        </li>
                        <li>
                                    <a href="login.html">Login Page</a>
                                </li> -->
                       <!--  <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level         
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level 
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li> -->
                     <!--    <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Searching</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <!-- KJHJDKH -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Book Id</th>
                                            <th>Subject</th>                                      
                                           <th>Title</th>
                                            <th>Author</th>
                                            <th>Publication</th>
                                            <th>Edition</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

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

                                    $result=mysql_query("SELECT `bookid`, `Subject`,`Title`, `Author`, `publication`, `edition`, `status` FROM `scheme` limit 6000");



                                    ?>
                                    <tbody>
                                        
                                            <?php  while ($row=mysql_fetch_array($result)) {  ?>

                                           <tr class="odd gradeX">
                                                <td><?php echo"".$row['bookid']; ?></td>
                                                <td><?php echo"".$row['Subject']; ?></td>
                                                <td><?php echo"".$row['Title']; ?></td>
                                                <td><?php echo"".$row['Author']; ?></td>
                                                <td><?php echo"".$row['publication']; ?></td>
                                                <td><?php echo"".$row['edition']; ?></td>
                                                <td><?php echo"".$row['status']; ?></td>
                                            </tr>
                                                  
                                           <?php     
                                            }    
                                            ?>
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           <!--  <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
</body>

</html>
