<html>
<style type="text/css">
#aa
{
	margin-left:300;
	margin-top:50;
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#0000FF;
	font-size:24px;
}
#b
{
	margin-left:390;
	margin-top:50;
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#0000FF;
	font-size:24px;
}
#c
{
	margin-left:150;
	margin-top:20;
	
}
</style>
</head>
<body bgcolor="sky blue">
<center><h2><font color="black" size="8">CREATE AN ACCOUNT</font></h2></center>
<form action='' method="post" id="aa">

Enter user name :=&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='na'><br>

Enter password :=<input type='text' name='add'><br><br><br>
<input type='SUBMIT' value='CREATE' id="c">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tanisha";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST["na"])||empty($_POST["add"]))
	{
      echo "<center><font face = forte size = 5 color = red>Enter name or address </font></center>";
    }
	else
	{
		 //echo $_POST['na']; echo $_POST['add'];
		
	    $sqll="insert into user values('".$_POST['na']."','".$_POST['add']."')";	
		if ($conn->query($sqll) === TRUE)
	    {
		   echo "<center><font face = Verdana size =6 color = black >REGISTERED SUCCESSFULLY...</font></center>";
	    }
		else
		{
			 echo "<center><font face = Verdana size =6 color = black >Username already exists...</font></center>";
		}
    }
  $conn->close();
}
?>
<form action="main1.php" id="b">
<input type="submit" value="BACK TO HOME PAGE"  >
</form>
</CENTER></body>
</html>