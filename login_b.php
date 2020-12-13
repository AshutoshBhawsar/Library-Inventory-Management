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
	echo mysql_error();
}

if(isset($_POST['submit']))	
{
	$username=$_POST["username"];
	$pswd=$_POST["password"];

	$result=mysql_query("select * from login WHERE username='$username' and password='$pswd'",$conn);
	
}

if(mysql_affected_rows()>0)
  {
    $row=mysql_fetch_array($result);
    $id=$row["username"];
  }

$count=mysql_num_rows($result);
if($count==1)
	{
		$_SESSION["username3"]=$id;
  	 	?>
    <script type="text/javascript">
    alert('Login Successfully !');
    window.location.href="facultyHome.php";
    </script>
     
<?php
	}
else
{
	echo "<h3>Invalid Username or Password</h3><br>";
    echo "<h2>Please,";?> <a href="login.php"><strong>Login</a></strong> <?php echo"again</h2>";
}

?>