<?php 
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);
if (! $conn) 
{
  echo "not connect".mysql_error();
}
if (isset($_POST['submit'])) 
{
  $name=$_POST['name'];
  $emailid=$_POST['emailid'];
  $branch=$_POST['branch'];
  $feedback=$_POST['feedback'];
  
}
$result=mysql_query("INSERT INTO feedback(name,emilid,branch,feedback) 
  values('$name','$emailid','$branch','$feedback')");    
  /*BookId='$bookid',Title='$bookname',
  Author='$authorname',publication='$publication',edition='$bookedition' pages='$pages'"*/


if (! $result) 
{
  die('could not enter data:'.mysql_error());
}
else
{
  ?>

  <script type="text/javascript">
    alert('Successfully Insert !');
    window.location.href="feedback.php";
    </script>

  <?php
}

?>