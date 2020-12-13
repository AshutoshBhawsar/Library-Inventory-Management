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

if(!$_FILES["file"]["name"]=="")
{
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


	$result=mysql_query("UPDATE faculty_table SET name='$name', designation='$designation', mobile_no='$mob_no',email='$Email_id',
		image_name='$iname',image_path='$path' WHERE id='$id'");
}
else
{

	$result=mysql_query("UPDATE faculty_table SET name='$name', designation='$designation', mobile_no='$mob_no',email='$Email_id' WHERE id='$id'");
}
	if($result)
	{
		?>
			<script type="text/javascript">
		    alert('Update Successfully !! !');
		    window.location.href="faculty_listing.php";
		    </script>
		
	<?php
	}
	else
	{
		echo "<script> alert('Error in Uploading')</script>".mysql_error();
		header("Location:faculty_listing.php");
	}

	}
	
  ?>