<HTML>
<HEAD>
    <TITLE>Library Book search</TITLE>
<link rel="stylesheet" type="text/css" href="Lib_Assets\bootstrap.min.css">
  <script src="Lib_Assets/jquery.js"></script>
    <script src="Lib_Assets/bootstrap.min.js"></script>
    <script src="Lib_Assets/bootstrap-hover-dropdown.js"></script>

<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.css">
<link rel="stylesheet" href="Lib_Assets/demo.css">
	<link rel="stylesheet" href="Lib_Assets/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.min.css">
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
	<BODY>

  <div>
    <div>
        <img class="pull-left" style="margin-left: 30px;width: 200px; height: 160px; " src="Lib_Assets/images/a.png">
    </div>
      <div class="jumbotron div">

        <div class="container">
      
          <center><h3 style="color: #348017;font-family:comic sans;"class="mar">GOVERNMENT POLYTECHNIC, NASHIK</h3>
            <p style="margin-top: -10px;font-family:monotype;color:#348017">An Autonomus Institute Of Government Of Maharashtra</p>
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

      <li class="">
        <a href="book.html" id="search" class = "dropdown-toggle"data-hover="dropdown" >SEARCH</a>
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
      <a href="#" id="logout"class = "dropdown-toggle"data-hover="dropdown">Student
        <b class="caret"></b>
      </a>

      <ul class = "dropdown-menu pull-right" role = "menu" aria-labelledby = "logout" >
        <li><a href="logout.php"tabindex = "-1" data-toggle = "tab">LOGOUT</a></li>
      </ul>
      </li>

  
    </ul>
    </div>  
  </nav>
	<p class="a">BOOK SEARCHING > > </p><hr>
	    <!-- <form action="book.php" method="post" class="form form-group"> -->
			<div class ="b"><table >
	<form action="Book.php" method="post" role="form">
		<tr>
		<thead>
			<th>
				Book Searching<br><hr>
			</th>
		</thead>
		</tr>
			<tr>
				<tbody><td>
				&nbsp;	
					<label class="">Book Name</label>
		<input type="text" name="bookname">
				</td>
				<td>&nbsp;
					<label>Author Name</label> 
		           <input type="text" name="authorname">
				</td>
				<td>&nbsp;
					<label>Publication</label> 

					<input type="text"name="publiaction">
		            <!-- <select value="select branch">Select branch
		                <option ></option>
		            	<option value="ae">Automobile Engineering</option>
		            	<option value="ce1">Civil Engineering(First Shift)</option>
		            	<option value="ce2">Civil Engineering(Second Shift)</option>
		            	<option value="cm">Computer Technology Engineering</option>
		            	<option value="ddgm">Dress Designing & Garment Manufacturing</option>
		            	<option value="ee">Electrical Engineering</option>
		            <option value="el1">Electronics & Telecommunication Engineering(First Shift)</option>
		            <option value="el2">Electronics & Telecommunication Engineering(Second Shift)</option>
		            	<option value="idd">Interior Design & Decoration</option>
		            	<option value="if">Information Technology Engineering</option>
		            	<option value="me1">Mechanical Engineering(First Shift)</option>
		            	<option value="">Mechanical Engineering(Second Shift)</option>
		            	<option value="ps">Plastic Engineering</option>
		            	<option value="sd">Science & Humanities Department</option>
		            	
		            </select> -->
				</td>
				
		</form>
		
				<td>&nbsp;
					<button name="search"class="btn btn-success">
                  <span class="glyphicon glyphicon-search"></span> </button>
					<button class="btn btn-danger" onclick="clear()">
						<span class="glyphicon glyphicon-remove-sign"></span>
					</button>

				</td>
				</tbody>
			</tr>
		</table>
		
</div>
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
       
$name=$_POST['bookname'];
$aname=$_POST['authorname'];
$publication=$_POST['publication'];

$result = mysqli_query("SELECT * FROM scheme WHERE  bookname = '$name' || author = '$aname' || publication = '$publication'",$conn);
echo "<table border='1'>
<tr>
<th>Book Name</th>
<th>Author</th>
<th>Publication</th>

</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['publication'] . "</td>";
echo "</tr>";
}}
echo "</table>";
mysqli_close($con);
?>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3 style="font-size: 27px; margin-left: 20px;">Government Polytechnic,<span>Nashik</span></h3>
				<h4 style="font-family: comic sans ms; font-style: italic;font-size: 17px;margin-top:5px;margin-left: -25px; color: gray"><p>( An Autonomous Institute Of Government Of Maharashtra )</p></h4>
				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p class="footer-links"  style="font-family: comic sans ms; font-style: italic">
					Address : <br>Samangaon Road, Nashik Road, Nashik</p>
				</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0253-2461221</p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>ABOUT DEVELOPERS :</span>
					<ul class="" style="font-family: comic sans ms;list-style: none;color: #ffffff">
					<li>Students of IF 3rd Year (2015-2016) </li>
					
					</ul>
				</p>

			

			</div>

		</footer>

</BODY>
</HTML>
