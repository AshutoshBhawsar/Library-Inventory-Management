<?php

$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);
if ($conn) 
{
	echo "";
}
  $id=$_POST['id'];
	$name=$_POST['Name'];
	$designation=$_POST['Designation'];
	$mob_no=$_POST['MobNo'];
	$Email_id=$_POST['Email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  

if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
 
  }
  if (file_exists("upload/" . $_FILES["file"]["name"]))
   {

      echo $_FILES["file"]["name"] . " already exists. ";
   }
    else
   {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "Pics/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "Pics/" . $_FILES["file"]["name"];
   }



$a=$_FILES["file"]["name"];
$b="Pics/";

//echo "<br>dept:".$_SESSION["br"];
// Create connection

// Check connection

$result=mysql_query("INSERT INTO faculty_table(name,designation,mobile_no,email,image_name,image_path) values ('$name','$designation','$mob_no','$Email_id','$a','$b' ) "); 

$result1=mysql_query("INSERT INTO login (username,password) values('$username','$password')");
/*$result=mysql_query("INSERT INTO faculty_table(,image) 
	values('$name','$designation','$mob_no','$Email_id','$img')");   */ 
if (!isset($result) ) 
{
	die('could not enter data:'.mysql_error());
}
else
{
  ?>

	<script type="text/javascript">
    alert('Successfully Insert !');
    window.location.href="staff.php";
    </script>

<?php
}


?>