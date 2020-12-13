<html>
<body>
		<?php
		$servrname="localhost";
		$username="root";
		$password="";
		$dbname="lib_db";
		// Create connection
		$conn=mysql_connect($servrname,$username,$password);
		mysql_select_db($dbname);

		if(isset($_GET['roll_no']))
		{
		$roll_no=$_GET['roll_no'];

		$result=mysql_query("DELETE FROM student_table WHERE roll_no='$roll_no' ");
		if($result)
		{
			?>
			<script type="text/javascript">
    		alert('Delete Successfully');
    		window.location.href="student_listing.php";
    	</script>
  <?php
		}
		else{
			echo "Could not delete ".mysql_error();
		}
	}
		?>
</body>
</html>