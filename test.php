 <?php
session_start();
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
  echo"".mysql_error();
}


	$issuedate=$_SESSION['issuedate'];
	$name=$_SESSION['name'];
	$bookid=$_SESSION['bookid'];
	$id=$_SESSION['id'];
	//$table=$_SESSION['r'];
	// $bookname=$_SESSION['Title'];

	$date=date_create("$issuedate");
	date_add($date,date_interval_create_from_date_string("21 days"));
	$off_returndate=date_format($date,"Y-m-d");

	$result2 = mysql_query("SELECT * FROM login WHERE username='$id'",$conn);

	$result1=mysql_query("SELECT * FROM scheme WHERE bookid='$bookid'",$conn);
		while ($row=mysql_fetch_array($result1))
		{
			$book=$row['status'];
		}

	while($row = mysql_fetch_array($result2))
		{

		$username= $row['username'];
		$password= $row['password'];
		$numbooks=$row['numbooks'];
		}
		if($numbooks>=3)
		{

		echo "<script>alert('cannnot issue books limit exceed')</script>";
		}
	
		
		elseif($book=='issue')
		{
			?>

			<script type="text/javascript">
				alert('Book Already Issue');
				window.location.href="issuebook.php";
			</script>
		<?php
		}
	
		else
		{

			$result=mysql_query("INSERT INTO issuebook(memid,name,bookid,issueDate,off_retdate)
				VALUES( '$id','$name','$bookid','$issuedate','$off_returndate')");
      mysql_query("UPDATE login SET numbooks=numbooks+1 WHERE  username='$id'",$conn);
			if(!$result)
			{
				echo "not insert";
			}
			else{
				echo "";
			}

			$retval = mysql_query("UPDATE scheme  SET status='issue' WHERE bookid='$bookid'");
      
			if(! $retval )
			{
			  die('Could not update data: ' . mysql_error());
			}
			else
			{
				?>

				<script type="text/javascript">
			    alert('Book Issue Successfully !');
			    window.location.href="issuebook.php";
    </script>
	 <?php
}

}
?> 
