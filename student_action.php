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

  $name=$_POST['name'];
  $roll_no=$_POST['roll_no'];
  $branch_name=$_POST['branch_name'];
  $year=$_POST['year'];
  $address=$_POST['address'];
  $mobile_no=$_POST['mobile_no'];
  $email_id=$_POST['email_id'];


if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  // echo "Type: " . $_FILES["file"]["type"] . "<br />";
  // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
 
  }
  if (file_exists("upload/" . $_FILES["file"]["name"]))
   {

      echo $_FILES["file"]["name"] . " already exists. ";
   }
    else
    	
   {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "Stud_img/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "Stud_img/" . $_FILES["file"]["name"];
      // echo ('<img src=" '.$a' ">');
   }



$a=$_FILES["file"]["name"];
$b="Stud_img/";

//echo "<br>dept:".$_SESSION["br"];
// Create connection

// Check connection
if ($conn)
{
    echo(" ");
}

$result=mysql_query("INSERT INTO student_table(name,roll_no,branch,year,address,mobile_no,email_id,image_name,image_path) 
  values('$name','$roll_no','$branch_name','$year','$address','$mobile_no','$email_id','$a','$b')");    

$result1=mysql_query("INSERT INTO login (username,password) values('$roll_no','$roll_no')");


// $result1=mysql_query("INSERT INTO login 
//   values('$roll_no','$roll_no')");    
if (! $result) 
{
  die('could not enter data:'.mysql_error());
}
else
{
  ?>

    <script type="text/javascript">
    alert('Successfully Insert !');
    window.location.href="student.php";
    </script>

  <?php
}


?>