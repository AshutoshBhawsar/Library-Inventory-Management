<?php
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);

if (isset($_POST['submit'])) 
{
	$table=$_POST['table'];
	$bookid=$_POST['bookid'];
	$authorname=$_POST['author_name'];
	$bookname=$_POST['book_name'];
	$subject=$_POST['subject'];
	$department=$_POST['department'];
	$bookedition=$_POST['book_edition'];
	$publication=$_POST['publication'];
	$year=$_POST['year'];
	$date=$_POST['date'];
	
	$pages=$_POST['pages'];
	$volume=$_POST['volume'];
//	$scheme=$_POST['scheme'];
	$source=$_POST['source'];
	$bookprice=$_POST['price'];
	$location=$_POST['location'];
	$classno=$_POST['classno'];
	$bookno=$_POST['bookno'];
	$billno=$_POST['billno'];
	$status=$_POST['status'];


$result3=mysql_query("UPDATE scheme SET bookid='$bookid', Subject='$subject', Department='$department', date='$date', Price='$bookprice',
	 Title='$bookname', Author='$authorname', billno='$billno', publication='$publication', edition='$bookedition', volume='$volume',
	 pages='$pages', pubyear='$year', source='$source', Location='$location', classno='$classno', bookno='$bookno', status='$status' WHERE bookid='$bookid'");


if(!$result3) 
{
	die('could not update data:'.mysql_error());
}
else
{
	?>

	<script type="text/javascript">
    alert('Book Update Successfully !');
    window.location.href="book_listing.php";
    </script>

<?php
}
}