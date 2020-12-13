<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "lib_db";

// Create connection
$conn = mysql_connect($servername, $username, $password);
mysql_select_db($dbname);
// Check connection
if ($conn)
{
    echo(" ");
}
if(isset($_POST['submit']))
{
	$roll1=$_POST["username"];
	$psd1=$_POST["password"];
	
  $result=mysql_query("select * from login where username='$roll1' and password='$psd1'",$conn);
 
  if(mysql_affected_rows()>0)
  {
    $row=mysql_fetch_array($result);
    $id=$row["username"];
  }
   $count=mysql_num_rows($result);

  if($count==1)
  {
 	 
   $_SESSION["username1"]=$id;
   ?>
    <script type="text/javascript">
    alert('Login Successfully !');
    window.location.href="adminHome.php";
    </script>
  	 
<?php
  	 //echo "You are logeed in ";
  }
  else 
  
  {
  	echo "<h3>Invalid Username or Password</h3><br>";
    echo "<h2>Please,";?> <a href="login.php"><strong>Login</a></strong> <?php echo"again</h2>";
  }
}
?>
   