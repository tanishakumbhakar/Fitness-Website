<html>
<head>
<title>PROJECT</title>
<style type="text/css">
h1.r{font-size:x-x-large;color:blue;font-family:Cooper Black;}
</style>
</head>
<body bgcolor="darkseagreen">
<table border=1 bgcolor="yellow" width=100%  >
<tr>
<td><font color="blue" size="5"><A HREF="website.htm"><center>HOME</td>
<td><font color="blue"size="5"><a href="products.htm"><center>PRODUCTS</td>
<td><font color="blue" size="5"><A HREF="health.htm"><center>KNOW YOUR HEALTH</td>
</a></td>

</tr></table>
<table bgcolor="orange" width=100% height=15% border=2
bordercolor="red">
<tr>
<td><center><h1 class=r> <font size='8'>F&nbsp;&nbsp;I&nbsp;&nbsp;T&nbsp;&nbsp; H&nbsp;&nbsp;U&nbsp;&nbsp;B&nbsp;&nbsp;</font></h1></center></td>
</tr></table>
<table border=1 bgcolor="yellow" width=100%  >
<tr>
	<td><font color="blue"size="5"><A HREF="suggestions.html"><center>FEEDBACK</td>
<td><font color="blue" size="5"><A HREF="contact us - Copy.html"><center>CONTACT US</td>

<td><font color="blue" size="5"><a href="login.php"><center>
LOGOUT</a></td>

</tr>
</table>
<br><br>

<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'tanisha'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM sales';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>displaying data</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	
	<table class="data-table">
		<caption class="title"><h1>Available sales</h1></caption><br><br>
		<thead>
			<tr>
				<th>CUSTOMER NAME</th>
				<th>ITEM NAME</th>
				<th>ITEM DESCRIPTION</th>
				<th>AMOUNT</th>
				<th>E-MAIL</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['cname'].'</td>
					<td>'.$row['iname'].'</td>
					<td>'.$row['idesc'].'</td>
					<td>'.$row['amt'].'</td>
					<td>'.$row['id'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
</body>
</html>