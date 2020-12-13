<?php
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);

if(isset($_POST['update']))
{

	$id=$_POST['id'];
	$name=$_POST['Name'];
	$designation=$_POST['Designation'];
	$mob_no=$_POST['MobNo'];
	$Email_id=$_POST['Email'];
  $username=$_POST['username'];
  $password=$_POST['password'];

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

   $iname=$_FILES["file"]["name"];
	$path="Pics/";


	$result=mysql_query("UPDATE faculty_table SET id='$id' name='$name', designation='$designation', mobile_no='$mob_no',email='Email_id',
		image_name='$iname',image_path='$path' WHERE id='$id'");

	if($result)
	{
		echo "<script> alert('Update Successfully !!')</script>";
	}
	else
	{
		echo "<script> alert('Error in Uploading')</script>".mysql_error();
	}

	}

  ?>