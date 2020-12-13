
 <html>
 <head>
 <title>Log In</title>
  

  <link rel="stylesheet" type="text/css" href="Lib_Assets/bootstrap.min.css">
  
  <script src="Lib_Assets/jquery.js"></script>
  <script src="Lib_Assets/bootstrap.min.js"></script>
    <script src="Lib_Assets/bootstrap-hover-dropdown.js"></script>
    </head>
 
      <script language="Javascript">
       
      function form1(str)
      {
      var xmlhttp;
      if (str=="")
        {
        document.getElementById("txtHint").innerHTML="";
        return;
        }
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
          }
        }
      xmlhttp.open("GET","form1.php?q="+str,true);
      xmlhttp.send();
      }
      function form2(str)
      {
      var xmlhttp;
      if (str=="")
        {
        document.getElementById("txtHint").innerHTML="";
        return;
        }
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
          }
        }
      xmlhttp.open("GET","form2.php?q="+str,true);
      xmlhttp.send();
      }

      function form3(str)
      {
      var xmlhttp;
      if (str=="")
        {
        document.getElementById("txtHint").innerHTML="";
        return;
        }
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
          }
        }
      xmlhttp.open("GET","form3.php?q="+str,true);
      xmlhttp.send();
      }


       </script>
 
<style type="text/css">
  div{
  float: left;
  margin-left:150px
    }
.a{
  float: left;
  margin-left: 22px;
  position: fixed;
  }
 </style>
</head>                             
 
 <body>
    <marquee><h3 style="font-family: jokerman;font-size: 30px; text-shadow: 2px 2px 2px gray">Login - Page</h3></marquee>
     <div id="txtHint"></div>
     <div class="a">
     	<br><br><br><center><button onclick="form1()" class="btn btn-warning btn-lg">Admin</button>
      <br><br><br><button onclick="form2()" class="btn btn-default btn-lg">Student</button>
     	<br><br><br><button onclick="form3()" class="btn btn-success btn-lg">Faculty</button></center>
       </div><br><br>

       
     </body>           
</html>
