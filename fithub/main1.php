<html>
<head>
<title>PROJECT</title>
<style type="text/css">
h1.r{font-size:x-x-large;color:blue;font-family:Cooper Black;}
</style>
</head>
<body bgcolor="black">
<table border=1 bgcolor="yellow" width=100%  >
<tr>
<td><font color="blue" size="5"><A HREF="website.htm"><center>HOME</td>
<td><font color="blue"size="5"><a href="products.htm"><center>PRODUCTS</td>
<td><font color="blue" size="5"><A HREF="health.htm"><center>KNOW YOUR HEALTH</td>
CONTACT US</a></td>

</tr></table>
<table bgcolor="orange" width=100% height=15% border=2
bordercolor="red">
<tr>
<td><center><h1 class=r> F&nbsp;&nbsp;I&nbsp;&nbsp;T&nbsp;&nbsp; H&nbsp;&nbsp;U&nbsp;&nbsp;B&nbsp;&nbsp;</h1></center></td>
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
<table width=100% >
<tr>
<td><img src="pics\i1.jpg" height=200 
width=400"></td><td><img src="pics\i2.jpg" height=200 
width=400"></td><td><img src="pics\i3.jpg" height=200 
width=400"></td>
</tr></table><br><br>
<marquee><font color="YELLOW" size="8">HUSTLE &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;FOR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;THAT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;MUSCLE
</font></marquee><br><br>
<table width=100%>
<tr>
<td><img src="pics\i4.jpg" height=200 
width=400"></td><td>
<img src="pics\i5.jpg" height=200 
width=400"></td><td>
<img src="pics\i6.jpg" height=200 
width=400"></td>
</tr></table>
<html><head>
<title>Live clock</title>
</head>
<font color="yellow" size="6">See the time here!!!</FONT>
<form name="Timer">
<input type="text" size="12" name="Clock">


</form>

<script>
function showClock()
{
var CDate=new Date()
var hours=CDate.getHours()
var minutes=CDate.getMinutes()
var seconds=CDate.getSeconds()
var ampm="AM"

if (hours>12)
{
ampm="PM"
hours=hours-12
}
if(hours==0)
hours=12
if(minutes<=59)
minutes=0+minutes
if(seconds<=59)
seconds=0+seconds


document.Timer.Clock.value=hours+":"+minutes+":"+seconds+" "+ampm
setTimeout("showClock()",1000)
}
showClock()
</script>
</html>