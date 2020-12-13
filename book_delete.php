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
		//$scheme=$_GET['sheme'];

		$result=mysql_query("DELETE FROM scheme WHERE bookid='$id' ");
		if($result)
		{
			?>
			<script type="text/javascript">
    		confirm('Are You Sure You Want To Delete');
    		window.location.href="book_listing.php";
    	</script>
  <?php
		}
		else{
			echo "Could not delete book".mysql_error();
		}
	}
		?>
</body>
</html>