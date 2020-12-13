	<?php
session_start();
$servrname="localhost";
$username="root";
$password="";
$dbname="lib_db";
// Create connection
$conn=mysql_connect($servrname,$username,$password);
mysql_select_db($dbname);
if (! $conn) 
{
	echo "not connect".mysql_error();
}
if (isset($_POST['submit'])) 
{
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
	$source=$_POST['source'];
	$bookprice=$_POST['price'];
	$location=$_POST['location'];
	$classno=$_POST['classno'];
	$bookno=$_POST['bookno'];
	$billno=$_POST['billno'];

}


$set='not_issue';
$query = "INSERT INTO scheme(`bookid`,`Subject`,`Department`,`date`,`Price`,`Title`,`Author`,`billno`,`publication`,`edition`,`volume`,`pages`,`pubyear`,`source`,`Location`,`classno`,`bookno`,`status`) 
	values('$bookid','$subject','$department','$date','$bookprice','$bookname','$authorname','$billno','$publication','$bookedition','$volume','$pages',
		'$year','$source','$location','$classno','$bookno','$set')";
$result=mysql_query($query);  
 

echo $query;
if (! $result) 
{
	die('could not enter data:'.mysql_error());
}
else
{
	?>

	 <script type="text/javascript">
    alert('Insert Successfully !');
    window.location.href="adding book.php";
    </script>

<?php
}


?>
