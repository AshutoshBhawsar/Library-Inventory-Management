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
  $branch=$_POST['branch'];
  $bookname=$_POST['bookname'];
  $author=$_POST['author'];
  $publication=$_POST['publication'];
}
$result=mysql_query("INSERT INTO suggession_table(name1,branchyear,bookname,author,publication) 
  values('$name','$branch','$bookname','$author','$publication')");    


if (! $result) 
{
  die('could not enter data:'.mysql_error());
}
else
{
 ?>

  <script type="text/javascript">
    alert('Successfully Insert !');
    window.location.href="suggession.php";
    </script>

  <?php
}


?>