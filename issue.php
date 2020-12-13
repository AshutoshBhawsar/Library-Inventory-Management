   <html>
 <body>
 <form action="issue.php"method="post"class="form-inline"role="form">
	<div class="form-group">
	<label for="issue date">Issue Date :</label>
	<input type="text" name="issuedate" value="<?php echo date("d/m/Y")?>"class="form-control" id="issue date">
	</div>
	</form>

  <form class="form-inline"role="form">
  <div class="form-group">
  <label for="id"> ID :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="id"class="form-control" id="id">
  </div>
  </form>

  <form class="form-inline"role="form">
  <div class="form-group">
  <label for="studname"> Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="name"class="form-control" id="studname">
  </div>
  </form><br>


 
    <form class="form-inline"action="issueBook.php" method="post" role = "form">
      <div class = "input-group">
        <span class = "input-group-addon">BOOK ID</span>
          <input type="text" class = "form-control" name="bookid">            
      </div>
       <button class = "btn btn-default" name="fetch"type = "submit">
                     FETCH
              </button> 


           <button  type="button" name="submit"class="btn btn-danger" onclick="clear()">
                  <span class="glyphicon glyphicon-user"></span>cancel
                </button>
    </form><br>
 <?php

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

// $result = mysqli_query($conn,"SELECT * FROM login");
// while($row = mysqli_fetch_array($result))
// {
// $username= $row['studentid'];
// $password= $row['password'];
// $numbooks=$row['numbooks'];
// }
// if($numbooks>3)
// {
// echo"cannnot issue books limit exceed";
// }
if(isset($_POST))
{
$issuedate=$_POST['issuedate'];
$id=$_POST['id'];
$name=$_POST['name'];
$bookid=$_POST['bookid'];
$returndate=$_POST['returndate'];

}

$result=mysql_query("INSERT INTO issuebook(memid,bookid,name,issueDate)VALUES('$id','$bookid,'$name','$issuedate')",$conn);
?>
</body>
</html>