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

if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $roll_no=$_POST['roll_no'];
  $branch_name=$_POST['branch_name'];
  $year=$_POST['year'];
  $address=$_POST['address'];
  $mobile_no=$_POST['mobile_no'];
  $email_id=$_POST['email_id'];

if(!$_FILES["file"]["name"]=="")
{

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


$result=mysql_query("UPDATE student_table SET name='$name',roll_no='$roll_no',branch='$branch_name',year='$year',
  address='$address',mobile_no='$mobile_no',email_id='$email_id',image_name='$a',image_path='$b' WHERE roll_no='$roll_no'");    

}
else
{
    $result=mysql_query("UPDATE student_table SET name='$name',roll_no='$roll_no',branch='$branch_name',year='$year',
  address='$address',mobile_no='$mobile_no',email_id='$email_id' WHERE roll_no='$roll_no'");    

}

    
if (! $result) 
{
  die('could not enter data:'.mysql_error());
}
else
{
  ?>

    <script type="text/javascript">
    alert('Update Successfully !!');
    window.location.href="student_listing.php";
    </script>

  <?php
}
}

?>