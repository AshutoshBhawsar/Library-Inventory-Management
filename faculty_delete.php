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

		if(isset($_GET['id']))
		{
		$id=$_GET['id'];

		$result=mysql_query("DELETE FROM faculty_table WHERE id='$id' ");
		if($result)
		{
			?>
			<script type="text/javascript">
    		alert('Delete Successfully');
    		window.location.href="faculty_listing.php";
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