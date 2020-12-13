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
 <div class="col-lg-1"></div>
            <div class="row">
                <div class="col-lg-10">
                 <div class = "panel panel-warning">
                       <div class = "panel-heading">
                          <h2 style="margin-left: 20px; color: ;" class="panel-title title">Searching</h2><br>
                       </div><br>

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

                                    $result=mysql_query("SELECT `bookid`, `Subject`,`Title`, `Author`, `publication`, `edition`, `status` FROM `scheme`");



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

</body>

</html>
